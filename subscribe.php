<?php 
require_once("GLOBAL/head.php"); 
require_once("_Library/systemEmail.php");
?>
		
	
<?php
	
$subscribe = $_REQUEST['subscribe'];
$unsubscribe = $_REQUEST['unsubscribe'];
$sender = $_REQUEST['sender'];

	
	
  //////////////////////////////////
 //  Subscribe Unsubscribe Form  //
//////////////////////////////////


$html = ($language == "en") ? "<div class=\"englishMainContainer courier medium\" style=\"padding: 20px;\">" : "<div 
class=\"arabicMainContainer courier medium\" style=\"padding: 20px;\" dir=\"rtl\" lang=\"AR\">";


//  Head Navigation


$html .= ($language == "en") ? "\n\t\t<span class=\"Menu\">To subscribe or unsubscribe, please enter<br />your email 
address below.</span>" : "\n\t\t<span class=\"Menu\" dir=\"rtl\" lang=\"AR\">
للاشتراك أو إلغاء الاشتراك، من فضلك ادخل
<br />
.عنوان البريد الالكتروني أدناه
</span>";


if ($subscribe) {


	//  Send Email

	if (!get_magic_quotes_gpc()) {

		$sender		= addslashes(trim($sender));
		$message 	= addslashes(trim($message));
	}
	systemEmail($sender, "acquiringmodernity-request@acquiringmodernity.com", "subscribe", $message);


	//  Thanks

	$html .= "\n\n\n\n\n\t\t<!--  Email Form  -->\n<br /><br />";
	$html .= ($language == "en") ? "\n\t\tThanks.":
				       "\n\t\tشكرا.";
	$html .= ($language == "en") ? "\n\t\t<br /><a href='javascript: self.close();'>Close this window</a>":
					"\n\t\t<br /><a href='javascript: self.close();'>إغلاق هذه النافذة</a>";

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
	$html .= "\n\t\t<br /><a href='javascript: self.close();'>Close this window</a>";



} else {


	//  Subscribe Form

	$html .= "\n\n\n\n\n\t\t<!--  Email Form  -->\n<br /><br />";
	$html .= "\n\t\t<form enctype='multipart/form-data' action='". $PHP_SELF ."' method='post' style='margin: 0; padding: 0;'>";
	$html .= "\n\t\t\t<textarea name='sender' cols='40' rows='3'class='Mono'></textarea><br />";
	$html .= ($language == "en") ? "\n\t\t\t<input name='subscribe' type='submit' value='Subscribe' />" :
				       "\n\t\t\t<input name='subscribe' type='submit' value='الاشتراك' />";
	$html .= ($language == "en") ? "\n\t\t\t<input name='unsubscribe' type='submit' value='Subscribe' />" :
				       "\n\t\t\t<input name='unsubscribe' type='submit' value='إلغاء الاشتراك' />";

	$html .= "\n\t\t</form>";

}

echo $html;
?>

</div>
</div>
</body>
</html> 
