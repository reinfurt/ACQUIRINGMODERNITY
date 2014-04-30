<?php 
	date_default_timezone_set('Asia/Kuwait');

	require_once("_Library/systemDatabase.php"); 
	require_once("_Library/systemCookie.php");
	require_once("_Library/displayNavigation.php"); 
	require_once("_Library/displayMedia.php"); 


	// Parse $id

	$id = $_REQUEST['id'];		// no register globals	
	if (!$id) $id = "0";
	$ids = explode(",", $id);
	$idFull = $id;
	$id = $ids[count($ids) - 1];
	$pageName = basename($_SERVER['PHP_SELF'], ".php");
	
	// Live?
	
	// $live is stored in database and turns on site
	// $dev is passed in query and stored in cookie

	$dev = $_REQUEST['dev'];
	$dev = systemCookie("devCookie", $dev, 0);
	// if (!$dev) die('Under construction . . .');
	
	// Alt for dev options
	
	$alt = $_REQUEST['alt'];

	// Language

	$language = $_REQUEST['language'];
	$language = systemCookie("languageCookie", $language, time()+60*60*24*30*12);
	if (!$language) $language = "ar";
	if ($language == "ar") $documentTitle = "اقتناء الحداثة";
	if ($language == "en") $documentTitle = "Acquiring Modernity";

	$staging = $_REQUEST['staging'];
	$sql    = "SELECT deck FROM objects WHERE objects.name1 LIKE 'Live';";
	$result =  MYSQL_QUERY($sql);
	$myrow  =  MYSQL_FETCH_ARRAY($result);
	$deck = $myrow["deck"];
	if ( $deck == 'TRUE' ) $live = TRUE;
	
	echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n"; 
?>


<!DOCTYPE html PUBLIC "-//W3C//Dtd XHTML 1.0 Transitional//EN" "http://www.w3.org/tr/xhtml1/Dtd/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
	<title><?php echo $documentTitle; ?></title>
	<meta http-equiv="Content-Type" content="text/xhtml; charset=utf-8" />
	<meta http-equiv="Title" content="<?php echo $documentTitle; ?>" />		
	<!-- <meta charset="utf-8"> -->
	<link rel="stylesheet" type="text/css" media="all" href="GLOBAL/global.css" />
	<script type="text/javascript" src="GLOBAL/global.js"></script>
	<!-- <script src="_Processing/processing-1.4.1.min.js"></script> -->
	<script type="text/javascript" src="JS/animateEmoticon.js"></script>
</head>

<body onload="init(); initCircle(); displayTime(); setInterval('displayTime()',1000);">

	<!--  NAME  -->
	
	<div id='arabic' class='arabicContainer tahoma' dir="rtl" lang="AR">
		<a href="<?php echo $pageName; ?>.php?language=ar"><canvas id="canvas0" width="200" height="15"> اقتناء الحداثة</canvas></a><br />
		<?php 
		if ($language=="ar") {
		?>
		مشاركة الكويت في معرض العمارة الدولي الرابع عشر - بيينالي البندقية 
		<?php
		} 
		?>
	</div>

	<div id='english' class='englishContainer tahoma'>
		<a href="<?php echo $pageName; ?>.php?language=en"><canvas id="canvas1" width="200" height="15">Acquiring Modernity</canvas></a><br />
        	<?php
	        if ($language=="en") {
        	?>		
		Kuwait's Pavilion at the 14th International Architecture Exhibition of la Biennale di Venezia
		<?php
		} 
		?>
	</div>
