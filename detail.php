<?php 
require_once("GLOBAL/head.php"); 
?>


	<!-- TEXT COLUMN --> 

	<div id='text' <?php echo ($language == "en") ? "class='leftContainer tahoma green'" : "class='rightContainer tahoma green' dir='rtl' lang='AR'" ?>>

		<?php
	
			// SQL object only
				
			$sql    = "SELECT * FROM objects WHERE objects.id = $id;";
			$result =  MYSQL_QUERY($sql);
			$myrow  =  MYSQL_FETCH_ARRAY($result);
			$deck = $myrow["deck"];
			$body = $myrow["body"];

			$html = $body;
                        echo nl2br($html);
		?>
	</div>
	

	<!-- IMAGES COLUMN --> 

	<div id='images' <?php echo ($language == "en") ? "class='rightContainer tahoma green'" : "class='leftContainer tahoma green' dir='rtl' lang='AR'" ?>>

		<?php

			// SQL object plus media	

			$sql = "SELECT objects.id AS objectsId, objects.name1, objects.deck, objects.body, objects.active, objects.rank as objectsRank, 
wires.fromid, wires.toid, wires.active, media.id AS mediaId, media.object AS mediaObject, media.type, media.caption, media.active, media.rank FROM objects, 
wires, media WHERE objects.id = $id AND wires.toid = objects.id AND media.object = objects.id AND objects.active = '1' AND wires.active = '1' AND media.active = 
'1' ORDER BY media.rank;";
			$result =  MYSQL_QUERY($sql);
			$html = "";


			while ( $myrow  =  MYSQL_FETCH_ARRAY($result) ) {
						
				$mediaFile = "MEDIA/". str_pad($myrow["mediaId"], 5, "0", STR_PAD_LEFT) .".". $myrow["type"];
				$mediaCaption = strip_tags($myrow["caption"]);
				$mediaStyle = "width: 100%;";
				$html .= "<div class = 'imageContainer'>";
				$html .= "\n	". displayMedia($mediaFile, $mediaCaption, $mediaStyle);
				$html .= "<div class = 'captionContainer caption'>";
				$html .= $mediaCaption . "<br /><br />";
				$html .= "</div>";
				$html .= "</div>";
			}
	
			echo nl2br($html);
		?>
	</div>
	
	
<?php
	require_once("GLOBAL/foot.php"); 
?>
