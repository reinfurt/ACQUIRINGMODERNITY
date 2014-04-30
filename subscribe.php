<?php 
require_once("GLOBAL/head.php"); 
require_once("_Library/systemEmail.php");
?>

	
	
		
	
<?php
	
$subscribe = $_REQUEST['subscribe'];
$unsubscribe = $_REQUEST['unsubscribe'];
	
	
  //////////////////////////////////
 //  Subscribe Unsubscribe Form  //
//////////////////////////////////



//  Head Navigation

$html  = 	"\n\t\t<span class=\"Menu\">To subscribe or unsubscribe from our mailing list,<br />
			please enter your email address below.</span>"; 

if ($subscribe) {


	//  Send Email

	if (!get_magic_quotes_gpc()) {

		$sender		= addslashes(trim($sender));
		$message 	= addslashes(trim($message));
	}
	systemEmail($sender, "acquiringmodernity-request@acquiringmodernity.com", "subscribe", $message);


	//  Thanks

	$html .= "\n\n\n\n\n\t\t<!--  Email Form  -->\n<br /><br />";
	$html .= "\n\t\tThanks.";	

} else if ($unsubscribe) {


	//  Send Email

	if (!get_magic_quotes_gpc()) {

		$sender		= addslashes(trim($sender));
		$message 	= addslashes(trim($message));
	}
	systemEmail($sender, "acquiringmodernity-request@acquiringmodernity.com", "unsubscribe", $message);


	//  Thanks

	$html .= "\n\n\n\n\n\t\t<!--  Email Form  -->\n<br /><br />";
	$html .= "\n\t\tThanks.";



} else {


	//  Subscribe Form

	$html .= "\n\n\n\n\n\t\t<!--  Email Form  -->\n<br /><br />";
	$html .= "\n\t\t<form enctype='multipart/form-data' action='". $PHP_SELF ."' method='post' style='margin: 0; padding: 0;'>";
	$html .= "\n\t\t\t<textarea name='sender' cols='40' rows='3'class='Mono'></textarea><br />";
	$html .= "\n\t\t\t<input name='subscribe' type='submit' value='Subscribe' />";
	$html .= "\n\t\t\t<input name='unsubscribe' type='submit' value='Unsubscribe' />";
	$html .= "\n\t\t</form>";

}

echo $html;
?>

</div>
</body>
</html> 
