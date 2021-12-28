<?php

// Made by Bluetie
include('setup.inc.php');
$r = $_POST['r'];
$ChatDialogue = addslashes($_POST['d']);

switch($ChatDialogue)
{
	case "Test":
	$filename2 = "$DataDirectory/Bot$r." . date("Ymd") . ".txt";
	$fp2 = @fopen ($filename2, "a");	// Open the file for writting file pointer at the end, if it does not exist, create it
	if (!$fp2) {$fp2 = @fopen ($filename2, "a");}	// Try again
	fwrite($fp2, "0|1|1|H|K|Test indeed.\n"); 	// Save this new command
	$content = fread($fp2,filesize($filename2));
	print $content;
	fclose($fp2);
	break;
}

?>