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
	$documentTitle = "--";
	// echo $pageName .  "?id=" . $id;
	
	// Live?
	
	// $live is stored in database and turns on site
	// $dev is passed in query and stored in cookie

	$dev = $_REQUEST['dev'];
	$dev = systemCookie("devCookie", $dev, 0);
	// if (!$dev) die('Under construction . . .');

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
</head>

<body onload="init(); displayTime(); setInterval('displayTime()',1000);">

<?php
if ( ($live) || ($dev) ) {
?>
	
	<!--  NAV  -->
	
	<div id='address' class='navContainer'>
	<p dir="rtl" lang="AR"> رَبٍّ زِدْنٍي عِلمًا </p>
			
		<br /><br /><br /><br /><br /><br />
		<a href="index.php">Acquiring Modernity</a><br />
		Kuwait national participation for <a href="http://www.labiennale.org/en/architecture/">2014 La Biennale Architettura di Venezia</a><br /> 
		<a href="mailto:info@acquiringmodernity.com">info@acquiringmodernity.com</a>
	
		<div id='nav' class='helvetica'>
			<ul>		
				<?php	
	
					$path = "0";		// hard-coded hack for "+ Menu" branch
					$limit = 1;
					$selection = $idFull;
					$linkPageName = $pageName; 
					$breadcrumbsMode = FALSE;
					$multiColumn = 20;	// used to indent menu?
					// $stub = TRUE;
					// if (!$breadcrumbsMode) ($id) ? $breadcrumbsMode = TRUE : $breadcrumbsMode = FALSE;
					displayNavigation($path, $limit, $selection, $linkPageName, $stub, $breadcrumbsMode, $multiColumn);
		
				?>	
			</ul>
		</div>	
	</div> 

<?php
}
?>


<?php 

	// Label
	
	$html  = "<div id='badge' class='labelContainer'>";
	$html .= "<a href='index.php'><img src='MEDIA/logo.jpg' style='width: 100%;' alt='label' /></a>";		
	$html .= "</div>";
	
	//echo $html;
			
?>

