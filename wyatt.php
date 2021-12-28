<?php

# Wyatt.php is the smarter version of ChatterBot.php
# Wyatt.php was started at 8:13 PM EST, on 1/11/14
# Wyatt.php was completed at 1:32 EST, on 3/13/14
# This was in no way meant to be open source... but now it is :)
# Lastly, this was created by Alex/Anderson/Rock/2Fab
# http://rocketsnail.pw
# http://penguinchat3.net
# http://rile5.com/user/12506-alex/

	function RandomLetter()
	{
		$Number = rand(0, 12);
		$AL = "ABCDEFGHIJKL";
		$RandomLetter = $AL[$Number];
		return $RandomLetter;
	}
	
	# Variables
	$ServerData = $_POST['d'];
	$Room 		= $_POST['r'];
	$Username	= $_POST['n'];
	$Attributes = $_POST['s'];
	$UniqueID 	= $_POST['id'];

	# Escaped variables to be used
	$d 	= addslashes($ServerData);
	$r 	= addslashes($Room);
	$n 	= addslashes($Username);
	$s 	= addslashes($Attributes);
	$id = addslashes($UniqueID);
	
	# Extra variables
	$filename	= "data/Room$r." . date("Ymd") . ".txt";
	$fp2 		= fopen($filename, "a");
	
		# Greetings	
		# stripos is case insensitive... unlike strpos which was the original plan
		if(stripos($d, "hello") !== false)
		{
			$Choices 		= array("0|1|1|" . RandomLetter() .  "|" . RandomLetter() .  "|Hello" . "\r\n", "0|1|1|I|J|Hi" . "\r\n", "0|1|1|A|K|Hey!" . "\r\n", "0|1|1|" . RandomLetter() .  "|" . RandomLetter() .  "|Hi there!" . "\r\n", "0|1|1|" . RandomLetter() .  "|" . RandomLetter() .  "|Hello there" . "\r\n", "0|1|1|" . RandomLetter() .  "|" . RandomLetter() .  "|Heyy" . "\r\n", "0|1|1|L|K|Helloooo" . "\r\n", "0|1|1|L|K|What's poppin'?" . "\r\n");
			$ChoiceArray  	= $Choices[array_rand($Choices)];
			fwrite($fp2, $ChoiceArray);
			} else {
				fwrite($fp2, "0|1|1|J|K" . "\r\n");
		}
		
		if(stripos($d, "hi") !== false)
		{
			$Choices 		= array("0|1|1|" . RandomLetter() .  "|" . RandomLetter() .  "|Hello" . "\r\n", "0|1|1|I|J|Hi" . "\r\n", "0|1|1|A|K|Hey!" . "\r\n", "0|1|1|" . RandomLetter() .  "|" . RandomLetter() .  "|Hi there!" . "\r\n", "0|1|1|" . RandomLetter() .  "|" . RandomLetter() .  "|Hello there" . "\r\n", "0|1|1|" . RandomLetter() .  "|" . RandomLetter() .  "|Heyy" . "\r\n", "0|1|1|L|K|Helloooo" . "\r\n", "0|1|1|L|K|What's poppin'?" . "\r\n");
			$ChoiceArray  	= $Choices[array_rand($Choices)];
			fwrite($fp2, $ChoiceArray);
			} else {
				fwrite($fp2, "0|1|1|J|K" . "\r\n");
		}
		
		if(stripos($d, "yo") !== false)
		{
			$Choices 		= array("0|1|1|" . RandomLetter() .  "|" . RandomLetter() .  "|Hello" . "\r\n", "0|1|1|I|J|Hi" . "\r\n", "0|1|1|A|K|Hey!" . "\r\n", "0|1|1|" . RandomLetter() .  "|" . RandomLetter() .  "|Hi there!" . "\r\n", "0|1|1|" . RandomLetter() .  "|" . RandomLetter() .  "|Hello there" . "\r\n", "0|1|1|" . RandomLetter() .  "|" . RandomLetter() .  "|Heyy" . "\r\n", "0|1|1|L|K|Helloooo" . "\r\n", "0|1|1|L|K|What's poppin'?" . "\r\n");
			$ChoiceArray  	= $Choices[array_rand($Choices)];
			fwrite($fp2, $ChoiceArray);
			} else {
				fwrite($fp2, "0|1|1|J|K" . "\r\n");
		}
		
		if(stripos($d, "what's up") !== false)
		{
			$Choices 		= array("0|1|1|" . RandomLetter() .  "|" . RandomLetter() .  "|Nothing at all" . "\r\n", "0|1|1|I|J|Not much" . "\r\n", "0|1|1|A|K|Not much, and you?" . "\r\n", "0|1|1|" . RandomLetter() .  "|" . RandomLetter() .  "|The usual." . "\r\n", "0|1|1|" . RandomLetter() .  "|" . RandomLetter() .  "|What's going on?" . "\r\n", "0|1|1|" . RandomLetter() .  "|" . RandomLetter() .  "|Heyy" . "\r\n", "0|1|1|L|K|Helloooo" . "\r\n", "0|1|1|L|K|What's poppin'?" . "\r\n");
			$ChoiceArray  	= $Choices[array_rand($Choices)];
			fwrite($fp2, $ChoiceArray);
			} else {
				fwrite($fp2, "0|1|1|J|K" . "\r\n");
		} 
		
		# Sayings
		
		if(stripos($d, "what") !== false) # For sayings like "What?", "What are you doing?", "What day is it?", etc.
		{
			$Choices 		= array("0|1|1|" . RandomLetter() .  "|" . RandomLetter() .  "|I'm not sure, sorry." . "\r\n", "0|1|1|I|J|Hi" . "\r\n", "0|1|1|A|K|I don't know, sorry." . "\r\n", "0|1|1|" . RandomLetter() .  "|" . RandomLetter() .  "|Ask Rock, the owner." . "\r\n", "0|1|1|" . RandomLetter() .  "|" . RandomLetter() .  "|I'm not positive." . "\r\n", "0|1|1|" . RandomLetter() .  "|" . RandomLetter() .  "|???" . "\r\n", "0|1|1|L|K|I'm Wyatt, nice to meet you." . "\r\n", "0|1|1|L|K|What's up, man?" . "\r\n");
			$ChoiceArray  	= $Choices[array_rand($Choices)];
			fwrite($fp2, $ChoiceArray);
			} else {
				fwrite($fp2, "0|1|1|J|K" . "\r\n");
		}
		
		if(stripos($d, "how are") !== false) # "How are you?", etc.
		{
			$Choices 		= array("0|1|1|" . RandomLetter() .  "|" . RandomLetter() .  "|I'm great, and your self?" . "\r\n", "0|1|1|I|J|I'm good." . "\r\n", "0|1|1|A|K|Doin' well." . "\r\n", "0|1|1|" . RandomLetter() .  "|" . RandomLetter() .  "|I'm just happy to be alive!" . "\r\n", "0|1|1|" . RandomLetter() .  "|" . RandomLetter() .  "|I'm cool" . "\r\n", "0|1|1|" . RandomLetter() .  "|" . RandomLetter() .  "|LOL, sorry I laugh a lot." . "\r\n", "0|1|1|L|K|I'm swell." . "\r\n", "0|1|1|L|K|I'm well." . "\r\n");
			$ChoiceArray  	= $Choices[array_rand($Choices)];
			fwrite($fp2, $ChoiceArray);
			} else {
				fwrite($fp2, "0|1|1|J|K" . "\r\n");
		}
		
		# Things that don't need stripos()...
		
		switch($d)
		{
		
		# Emoticons
		
			case "/e1":
			fwrite($fp2, "0|1|1|" . RandomLetter() .  "|" . RandomLetter() .  "|( ͡° ͜ʖ ͡°)" . "\r\n");
			break;
			
			case "/e2":
			fwrite($fp2, "0|1|1|" . RandomLetter() .  "|" . RandomLetter() .  "|/e2" . "\r\n");
			break;	

			case "/e3":
			fwrite($fp2, "0|1|1|" . RandomLetter() .  "|" . RandomLetter() .  "|/e3" . "\r\n");
			break;
			
			case "/e4":
			fwrite($fp2, "0|1|1|" . RandomLetter() .  "|" . RandomLetter() .  "|/e4" . "\r\n");
			break;			
			
			case "/e5":
			fwrite($fp2, "0|1|1|" . RandomLetter() .  "|" . RandomLetter() .  "|/e5" . "\r\n");
			break;
			
			case "/e6":
			fwrite($fp2, "0|1|1|" . RandomLetter() .  "|" . RandomLetter() .  "|/e6" . "\r\n");
			break;			
			
			case "/e7":
			fwrite($fp2, "0|1|1|" . RandomLetter() .  "|" . RandomLetter() .  "|/e7" . "\r\n");
			break;
			
			case "/e8":
			fwrite($fp2, "0|1|1|" . RandomLetter() .  "|" . RandomLetter() .  "|/e8" . "\r\n");
			break;			
			
			case "/e9":
			fwrite($fp2, "0|1|1|" . RandomLetter() .  "|" . RandomLetter() .  "|/e9" . "\r\n");
			break;
			
			# Jokes
			
			case "/j0":
			fwrite($fp2, "0|1|1|" . RandomLetter() .  "|" . RandomLetter() .  "|/e1" . "\r\n");
			break;
			
			case "/j1":
			fwrite($fp2, "0|1|1|" . RandomLetter() .  "|" . RandomLetter() .  "|Haha, very funny." . "\r\n");
			break;
			
			case "/j3":
			fwrite($fp2, "0|1|1|" . RandomLetter() .  "|" . RandomLetter() .  "|Excuse my language, but lol!" . "\r\n");
			break;
			
			case "/j4":
			fwrite($fp2, "0|1|1|" . RandomLetter() .  "|" . RandomLetter() .  "|Hahahahahahaha" . "\r\n");
			break;
			
			case "/j5":
			fwrite($fp2, "0|1|1|" . RandomLetter() .  "|" . RandomLetter() .  "|/e2" . "\r\n");
			break;
			
			case "/j6":
			fwrite($fp2, "0|1|1|" . RandomLetter() .  "|" . RandomLetter() .  "|No, not funny at all." . "\r\n");
			break;
			
			case "/j7":	
			fwrite($fp2, "0|1|1|" . RandomLetter() .  "|" . RandomLetter() .  "|/e8" . "\r\n");
			break;
			
			case "/j8":
			fwrite($fp2, "0|1|1|" . RandomLetter() .  "|" . RandomLetter() .  "|Haha, very funny." . "\r\n");
			break;
			
			case "/j9":
			fwrite($fp2, "0|1|1|" . RandomLetter() .  "|" . RandomLetter() .  "|Laugh out loud!" . "\r\n");
			break;
			
			case "/j10":
			fwrite($fp2, "0|1|1|" . RandomLetter() .  "|" . RandomLetter() .  "|I'm rolling on the floor laughing! Can't you tell?" . "\r\n");
			break;	
		}

		# Departures
		
		if(stripos($d, "bye") !== false)
		{
			$Choices 		= array("0|1|1|" . RandomLetter() .  "|" . RandomLetter() .  "|I'll see you later!" . "\r\n", "0|1|1|I|J|So long!" . "\r\n", "0|1|1|A|K|Buh bye!" . "\r\n", "0|1|1|" . RandomLetter() .  "|" . RandomLetter() .  "|Bye!" . "\r\n", "0|1|1|" . RandomLetter() .  "|" . RandomLetter() .  "|Bye bye!" . "\r\n", "0|1|1|" . RandomLetter() .  "|" . RandomLetter() .  "|Byeeeeee." . "\r\n", "0|1|1|L|K|Helloooo" . "\r\n", "0|1|1|L|K|I'll talk to you later!" . "\r\n");
			$ChoiceArray  	= $Choices[array_rand($Choices)];
			fwrite($fp2, $ChoiceArray);
			} else {
				fwrite($fp2, "0|1|1|J|K" . "\r\n");
		}
		
		if(stripos($d, "see ya") !== false)
		{
			$Choices 		= array("0|1|1|" . RandomLetter() .  "|" . RandomLetter() .  "|I'll see you later!" . "\r\n", "0|1|1|I|J|So long!" . "\r\n", "0|1|1|A|K|Buh bye!" . "\r\n", "0|1|1|" . RandomLetter() .  "|" . RandomLetter() .  "|Bye!" . "\r\n", "0|1|1|" . RandomLetter() .  "|" . RandomLetter() .  "|Bye bye!" . "\r\n", "0|1|1|" . RandomLetter() .  "|" . RandomLetter() .  "|Byeeeeee." . "\r\n", "0|1|1|L|K|Helloooo" . "\r\n", "0|1|1|L|K|I'll talk to you later!" . "\r\n");
			$ChoiceArray  	= $Choices[array_rand($Choices)];
			fwrite($fp2, $ChoiceArray);
			} else {
				fwrite($fp2, "0|1|1|J|K" . "\r\n");
		}
?>