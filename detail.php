<?php 
require_once("GLOBAL/head.php"); 
?>


	<!-- MAIN -->

	<div id='main' class='bodyContainer'>

		<?php
	
			// SQL object only
				
			$sql    = "SELECT * FROM objects WHERE objects.id = $id;";
			$result =  MYSQL_QUERY($sql);
			$myrow  =  MYSQL_FETCH_ARRAY($result);
			$deck = $myrow["deck"];
			$body = $myrow["body"];
			$html = "";

			// SQL object plus media	

			$sql    = "SELECT objects.id AS objectsId, objects.name1, objects.deck, objects.body, objects.active, objects.rank as objectsRank, wires.fromid, wires.toid, wires.active, media.id AS mediaId, media.object AS mediaObject, media.type, media.caption, media.active, media.rank FROM objects, wires, media WHERE objects.id = $id AND wires.toid = objects.id AND media.object = objects.id AND objects.active = '1' AND wires.active = '1' AND media.active = '1' ORDER BY media.rank;";
			$result =  MYSQL_QUERY($sql);
	
			while ( $myrow  =  MYSQL_FETCH_ARRAY($result) ) {
						
				$mediaFile = "MEDIA/". str_pad($myrow["mediaId"], 5, "0", str_pad_left) .".". $myrow["type"];
				$mediaCaption = strip_tags($myrow["caption"]);
				$html .= "<div class = 'imageContainer'>";
				$html .= "\n	". displayMedia($mediaFile, $mediaCaption, $mediaStyle);
				$html .= "<div class = 'captionContainer caption euler'>";
				$html .= $mediaCaption . "<br /><br />";
				$html .= "</div>";
				$html .= "</div>";
			}
	
			$html .= "<br /><br /><br /><br /><br />" . $body . "<br />";
			echo nl2br($html);
		?>
	</div>
	
	
<?php
	require_once("GLOBAL/foot.php"); 
?>
