<?php 
	require_once("GLOBAL/head.php"); 
?>


<?php 
if ( ($live) || ($dev) ) {
?>
		
	
	<!--  MAIN  -->
	
	<div id='main' class='mainContainer hidden'>
		<div class = 'blankContainer'>&nbsp;</div>
		<?php
		
			// Query uses LEFT JOIN and multiple selection criteria to get objects with and without media from Front Page and News and return these in randomly sequenced rows . . . returns NULL if no media object attached to record

			$returns = rand(3,8);			
			$baseRecord = "_Home";

			$sql    = "SELECT objects.id AS objectsId, objects.name1, objects.deck, objects.active, objects.rank as objectsRank, objects.url, objects.end, wires.fromid, wires.toid, wires.active, media.id AS mediaId, media.object, media.type, media.caption AS mediaCaption, media.active, media.rank FROM objects, wires LEFT JOIN media ON media.object = wires.toid WHERE wires.fromid = (SELECT objects.id FROM objects WHERE objects.name1 LIKE '$baseRecord' AND objects.active='1' LIMIT 1)  AND wires.toid = objects.id AND objects.active = 1 AND wires.active = 1 AND ((media.rank IS NULL AND media.active IS NULL) OR (media.rank = 1 AND media.active = 1) OR (media.active = 1)) ORDER BY RAND() LIMIT $returns";
			
			$result =  MYSQL_QUERY($sql);	

			while ( $myrow  =  MYSQL_FETCH_ARRAY($result) ) {
					
				$marginer = rand(10, 100);
				$html = "\n	<a href='detail.php?id=" . $myrow['objectsId'] . "'>";
				$html .= "<div class = 'thumbsContainer black euler' style = 'margin:" . $marginer . "px;'>";
				$mediaFile = "MEDIA/". str_pad($myrow["mediaId"], 5, "0", str_pad_left) .".". $myrow["type"];
				$mediaCaption = strip_tags($myrow["mediaCaption"]);
				$name = strip_tags($myrow["name1"]);
				$sizer = rand(75, 95) * .01;
				$specs  = getimagesize($mediaFile);				

				if ($specs[0] > $specs[1]) {
								
					$mediaStyle = "width:" . ($sizer * $specs[0]) . "px;";
					
				} else {

					$mediaStyle = "height:" . ($sizer * $specs[1]) . "px;";
				}
							
				$html .= "\n	". displayMedia($mediaFile, $mediaCaption, $mediaStyle);
				$html .= "<div class = 'captionContainer caption'>";
				$html .= $name;
				$html .= "</div>";
				$html .= "</div>";
				$html .= "</a>";
				echo $html;		
			}
		?>
	<br /><br /><br />
	</div>
	

<?php 
}
?>


<?php	
	echo "\n\n\n\n\n";
	require_once("GLOBAL/foot.php"); 
?>

