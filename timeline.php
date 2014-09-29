<?php 
require_once("GLOBAL/head.php"); 
?>

<script type="text/javascript">

// parallax scrolling, not working correctly

$(document).ready(function(){
    $('#textScroll').scroll(function(){
        var textDiff = $('#text').height() - $('#textScroll').height();
        var textDiffRatio = (1 / textDiff) * $('#textScroll').scrollTop();
        var imageDiff = $('#image').height() - $('#imageScroll').height();
        var imageScrollTop = textDiffRatio * imageDiff;
        $('#imageScroll').scrollTop(imageScrollTop);
    });
});

</script>


        <!-- MAIN -->

        <div id='mainScroll' class='<?php echo ($language == "en") ? "englishMainContainer" : "arabicMainContainer" ?>'>

        <!-- MENU -->

        <div id='menu' class='<?php echo ($language == "en") ? "englishMenuContainer blue " : "arabicMenuContainer red " ?> tahoma'>

                <p dir="rtl" lang="AR" class="tahoma green">

                <ul>
                        <?php
                                if ( $language == "en" ) $path = "14";
                                if ( $language == "ar" ) $path = "15";
                                $limit = 1;
                                $selection = $idFull;
                                // $linkPageName = $pageName;
                                $linkPageName = "detail";                       // probably want to fix this and set using O-R$
                                $breadcrumbsMode = FALSE;
                                $multiColumn = 0;
                                $stub = FALSE;
                                $breadcrumbsMode = FALSE;
                                $thisLanguage = $language;
                                if (!$breadcrumbsMode) ($id) ? $breadcrumbsMode = TRUE : $breadcrumbsMode = FALSE;

                                displayNavigation($path, $limit, $selection, $linkPageName, $stub, $breadcrumbsMode, $multiColumn, $thisLanguage);
                        ?>
                </ul>
        	</p>
        </div>

	<!-- TEXT COLUMN --> 

	<div id='textScroll' <?php echo ($language == "en") ? "class='leftContainer courier medium'" : "class='rightContainer courier 
mediumadjust' dir='rtl' lang='AR'" ?>>

		<div id='text'>

		<?php
	
			// SQL object only
				
			$sql    = "SELECT * FROM objects WHERE objects.id = $id;";
			$result =  MYSQL_QUERY($sql);
			$myrow  =  MYSQL_FETCH_ARRAY($result);
			$deck = $myrow["deck"];
			$body = $myrow["body"];

			// replace [ and ] with footnote style

			$bodyParsed = str_replace("]", "</span>", str_replace("[", "<span class='footnote'>", $body));

			$html = $bodyParsed;
                        echo nl2br($html);
		?>

		</div>
	</div>
	

	<!-- IMAGES COLUMN --> 

	<div id='imageScroll' <?php echo ($language == "en") ? "class='rightContainer tahoma green'" : "class='leftContainer tahoma green' dir='rtl' lang='AR'" ?>>

		<div id='image'>

		<?php

			// SQL object plus media	

			$sql = "SELECT objects.id AS objectsId, objects.name1, objects.deck, objects.body, objects.active, 
objects.rank as objectsRank, wires.fromid, wires.toid, wires.active, media.id AS mediaId, media.object AS mediaObject, 
media.type, media.caption, media.active, media.rank FROM objects, wires, media WHERE objects.id = $id AND wires.toid = 
objects.id AND media.object = objects.id AND objects.active = '1' AND wires.active = '1' AND media.active = '1' ORDER BY 
media.rank DESC;";
			$result =  MYSQL_QUERY($sql);
			$html = "";
			$i = 0;

			while ( $myrow  =  MYSQL_FETCH_ARRAY($result) ) {
					
		
				$mediaFile = "MEDIA/". str_pad($myrow["mediaId"], 5, "0", STR_PAD_LEFT) .".". $myrow["type"];
				// $mediaFile = "http://acquiringmodernity.com/MEDIA/". str_pad($myrow["mediaId"], 5, "0", STR_PAD_LEFT) .".". $myrow["type"];
				$mediaCaption = strip_tags($myrow["caption"]);
				$mediaStyle = "width: 100%;";
				$html .= "<div id='image".$i."' class = 'imageContainer' onclick='expandImage(\"image".$i."\", \"100px\", \"0px\");' style='padding:100px;'>";
				$html .= "\n	". displayMedia($mediaFile, $mediaCaption, $mediaStyle);
				$html .= "<div class = 'captionContainer caption'>";
				$html .= $mediaCaption . "<br /><br />";
				$html .= "</div>";
				$html .= "</div>";
				$i++;
			}
	
			echo nl2br($html);
		?>
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
		</div>
	</div>

	</div> 

	<!-- /MAIN -->

<?php
	require_once("GLOBAL/foot.php"); 
?>
