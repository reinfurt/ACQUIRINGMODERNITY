<?php 
require_once("GLOBAL/head.php"); 
?>

	<!-- MAIN -->

        <div id='main' class='<?php echo ($language == "en") ? "englishMainContainer" : "arabicMainContainer" ?>'>

        <!-- MENU -->

        <div id='menu' class='<?php echo ($language == "en") ? "englishMenuContainer" : "arabicMenuContainer" ?> tahoma'>

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

	</div> 	

	<!-- /MAIN -->


	<!-- MIDDLE -->

	<div id="I" class="bottomleftContainer courier medium">
                <div id="02inner" class="innerContainerCentered">
			<a href="detail.php?id=1,4">I. CULTURE AND ADMINISTRATION</a>
                </div>
        </div>

	<div id="II" class="topleftContainer courier medium">
                <div id="02inner" class="innerContainerCentered">
			<a href="detail.php?id=1,5">II. LAND OF KUWAIT</a>
                </div>
        </div>

	<div id="III" class="toprightContainer courier medium">
                <div id="02inner" class="innerContainerCentered">
			<a href="detail.php?id=1,6">III. MAN OF KUWAIT</a>
                </div>
        </div>

	<div id="IV" class="bottomrightContainer courier medium">
                <div id="02inner" class="innerContainerCentered">
			<a href="detail.php?id=1,7">IV. KUWAIT TODAY AND TOMORROW</a>
                </div>
        </div>

	
<?php
	require_once("GLOBAL/foot.php"); 
?>
