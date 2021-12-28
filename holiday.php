<?php

//require 'setup.inc.php';

# This is the artificial intelligence that moves(and talks/responds).
# He appears randomly/on specific holidays.
//ConnectDB();
function RandomLetter()
{
    $Number = rand(0, 12);
    $AL = "ABCDEFGHIJKL";
    $RandomLetter = $AL[$Number];
    return $RandomLetter;
}
$Bot = "ChatterBot"; # The name of your holiday bot goes here.
$Username = addslashes($_POST['n']);
$ServerData = addslashes($_POST['d']);
$TmpId = addslashes($_POST['id']);
//$Query = mysql_query("SELECT * FROM chat_ChatLiveUsers WHERE TmpId = " . $TmpId . "") or die(mysql_error());
//while($FetchThis = mysql_fetch_array($Query))
//{
switch($ServerData) # So we don't have to use an if(); statement every single time
{
	case "hello":
	case "Hello":
	case "hi":
	case "yo":	
	case $Bot:		
	case $Bot . "!":
	case "bot!":
	case "Bot!":		
	case "bot":
	case "Bot":
	case "chatter": 
	case "chatter!":
	case "whaddup":
	$Choices = array("0|1|1|" . RandomLetter() .  "|" . RandomLetter() .  "|Hello" . "\r\n", "0|1|1|I|J|Hi" . "\r\n", "0|1|1|A|K|Hey" . "\r\n", "0|1|1|" . RandomLetter() .  "|" . RandomLetter() .  "|Hi there" . "\r\n", "0|1|1|" . RandomLetter() .  "|" . RandomLetter() .  "|Hello there" . "\r\n", "0|1|1|" . RandomLetter() .  "|" . RandomLetter() .  "|Heyy" . "\r\n", "0|1|1|L|K|Helloooo" . "\r\n", "0|1|1|L|K|Happy holidays!" . "\r\n");
	$ChoiceArray  = $Choices[array_rand($Choices)];
	print $ChoiceArray;
	break;
	case "ho ho ho":
	$filename = "$DataDirectory/Room$r." . date("Ymd") . ".txt";
	$fp2 = fopen ($filename, "a");		
	fwrite($fp2,"0|1|1|" . RandomLetter() .  "|" . RandomLetter() .  "|Indeed." . "\r\n");
	sleep(500000000);
	break;
	case "/e1":
	print "0|1|1|" . RandomLetter() .  "|" . RandomLetter() .  "|I'm always happy." . "\r\n";
	break;
	case "/e2":
	print "0|1|1|" . RandomLetter() .  "|" . RandomLetter() .  "|Keep that smile just like that!" . "\r\n";
	break;
	case "/e3":
	print "0|1|1|" . RandomLetter() .  "|" . RandomLetter() .  "|Why so serious?" . "\r\n";
	break;
	case "/e4":
	print "0|1|1|" . RandomLetter() .  "|" . RandomLetter() .  "|Turn that frown, upside down." . "\r\n";
	break;
	case "/e5":
	print "0|1|1|" . RandomLetter() .  "|" . RandomLetter() .  "|What? Is it something I said?" . "\r\n";
	break;
	case "/e6":
	print "0|1|1|" . RandomLetter() .  "|" . RandomLetter() .  "|What did I do to deserve that?" . "\r\n";
	break;
	case "/e7":
	print "0|1|1|" . RandomLetter() .  "|" . RandomLetter() .  "|/e7" . "\r\n";
	break;
	case "/e8":
	print "0|1|1|" . RandomLetter() .  "|" . RandomLetter() .  "|Let me grab the barf bucket..." . "\r\n";
	break;
	case "/e9":
	print "0|1|1|" . RandomLetter() .  "|" . RandomLetter() .  "|Why are you angry?" . "\r\n";
	break;
	case "/e10":
	print "0|1|1|" . RandomLetter() .  "|" . RandomLetter() .  "|I'm sad when you're sad." . "\r\n";
	break;
	case "/e11":
	print "0|1|1|" . RandomLetter() .  "|" . RandomLetter() .  "|No!" . "\r\n";
	break;
	case "/e12":
	print "0|1|1|" . RandomLetter() .  "|" . RandomLetter() .  "|I love everyone." . "\r\n";
	break;
	case "/j1":
	print "0|1|1|" . RandomLetter() .  "|" . RandomLetter() .  "|:D" . "\r\n";
	break;
	case "/j2":
	print "0|1|1|" . RandomLetter() .  "|" . RandomLetter() .  "|Very funny." . "\r\n";
	break;
	case "/j3":
	print "0|1|1|" . RandomLetter() .  "|" . RandomLetter() .  "|Please excuse my language but lol." . "\r\n";
	break;
	case "/j4":
	print "0|1|1|" . RandomLetter() .  "|" . RandomLetter() .  "|Wow you're good at jokes!" . "\r\n";
	break;
	case "/j5":
	print "0|1|1|" . RandomLetter() .  "|" . RandomLetter() .  "|That's a good one." . "\r\n";
	break;
	case "/j6":
	print "0|1|1|" . RandomLetter() .  "|" . RandomLetter() .  "|Lol!" . "\r\n";
	break;	
	case "/j7":
	print "0|1|1|" . RandomLetter() .  "|" . RandomLetter() .  "|Funny." . "\r\n";
	break;
	case "/j8":
	print "0|1|1|" . RandomLetter() .  "|" . RandomLetter() .  "|I'm laughing so hard." . "\r\n";
	break;	
	case "/j9":
	print "0|1|1|" . RandomLetter() .  "|" . RandomLetter() .  "|Haha!" . "\r\n";
	break;	
	case "/j10":
	print "0|1|1|" . RandomLetter() .  "|" . RandomLetter() .  "|LOL!" . "\r\n";
	break;	
	case "/j0": // since i didn't know there was a "joke 0", it's at the end instead of at the top
	print "0|1|1|" . RandomLetter() .  "|" . RandomLetter() .  "|Haha! You're soooo funny." . "\r\n";
	break;
	case "wassup":
	case "sup":
	case "whats up":
	case "Whats up":
	case "what's up":
	case "What's up":		
	case "whats up?":
	case "Whats up?":
	case "what's up?":
	case "What's up?":	
	case "waddup":
	print "0|1|1|" . RandomLetter() . "|" .  RandomLetter() . "|Not much, and you?" . "\r\n";
	break;
	case "good.":
	case "good..":
	case "good...":
	case "good....":
	case "good.....":
	case "good......":
	case "good.......":
	case "good!":
	case "good!!":
	case "good!!!":
	case "good!!!!":
	case "good!!!!!":
	case "good!!!!!!":
	case "good!!!!!!!":
	case "good?":
	case "good??":
	case "good???":
	case "good????":
	case "good?????":
	case "good??????":
	case "good???????":
	case "good. u":
	case "good.. u":
	case "good... u":
	case "good.... u":
	case "good..... u":
	case "good...... u":
	case "good....... u":
	case "good! u":
	case "good!! u":
	case "good!!! u":
	case "good!!!! u":
	case "good!!!!! u":
	case "good!!!!!! u":
	case "good!!!!!!! u":
	case "good? u":
	case "good?? u":
	case "good??? u":
	case "good???? u":
	case "good????? u":
	case "good?????? u":
	case "good??????? u":
	case "good u.":
	case "good u..":
	case "good u...":
	case "good u....":
	case "good u.....":
	case "good u......":
	case "good u.......":
	case "good u!":
	case "good u!!":
	case "good u!!!":
	case "good u!!!!":
	case "good u!!!!!":
	case "good u!!!!!!":
	case "good u!!!!!!!":
	case "good u?":
	case "good u??":
	case "good u???":
	case "good u????":
	case "good u?????":
	case "good u??????":
	case "good u???????":
	case "good":
	case "good u":
	case "good you":
	case "good. you":
	case "good.. you":
	case "good... you":
	case "good.... you":
	case "good..... you":
	case "good...... you":
	case "good....... you":
	case "good! you":
	case "good!! you":
	case "good!!! you":
	case "good!!!! you":
	case "good!!!!! you":
	case "good!!!!!! you":
	case "good!!!!!!! you":
	case "good? you":
	case "good?? you":
	case "good??? you":
	case "good???? you":
	case "good????? you":
	case "good?????? you":
	case "good??????? you":
	case "good you.":
	case "good you..":
	case "good you...":
	case "good you....":
	case "good you.....":
	case "good you......":
	case "good you.......":
	case "good you!":
	case "good you!!":
	case "good you!!!":
	case "good you!!!!":
	case "good you!!!!!":
	case "good you!!!!!!":
	case "good you!!!!!!!":
	case "good you?":
	case "good you??":
	case "good you???":
	case "good you????":
	case "good you?????":
	case "good you??????":
	case "good you???????":
	case "good":
	case "good u":
	case "good you":
	case "good. u?":
	case "good.. u?":
	case "good... u?":
	case "good.... u?":
	case "good..... u?":
	case "good...... u?":
	case "good....... u?":
	case "good! u?":
	case "good!! u?":
	case "good!!! u?":
	case "good!!!! u?":
	case "good!!!!! u?":
	case "good!!!!!! u?":
	case "good!!!!!!! u?":
	case "good? u?":
	case "good?? u?":
	case "good??? u?":
	case "good???? u?":
	case "good????? u?":
	case "good?????? u?":
	case "good??????? u?":
	case "good u.?":
	case "good u..?":
	case "good u...?":
	case "good u....?":
	case "good u.....?":
	case "good u......?":
	case "good u.......?":
	case "good u!?":
	case "good u!!?":
	case "good u!!!?":
	case "good u!!!!?":
	case "good u!!!!!?":
	case "good u!!!!!!?":
	case "good u!!!!!!!?":
	case "good u?":
	case "good u??":
	case "good u???":
	case "good u????":
	case "good u?????":
	case "good u??????":
	case "good u???????":
	case "good":
	case "good u?":
	case "good you?":
	case "good. you?":
	case "good.. you?":
	case "good... you?":
	case "good.... you?":
	case "good..... you?":
	case "good...... you?":
	case "good....... you?":
	case "good! you?":
	case "good!! you?":
	case "good!!! you?":
	case "good!!!! you?":
	case "good!!!!! you?":
	case "good!!!!!! you?":
	case "good!!!!!!! you?":
	case "good? you?":
	case "good?? you?":
	case "good??? you?":
	case "good???? you?":
	case "good????? you?":
	case "good?????? you?":
	case "good??????? you?":
	case "good you.?":
	case "good you..?":
	case "good you...?":
	case "good you....?":
	case "good you.....?":
	case "good you......?":
	case "good you.......?":
	case "good you!?":
	case "good you!!?":
	case "good you!!!?":
	case "good you!!!!?":
	case "good you!!!!!?":
	case "good you!!!!!!":
	case "good you!!!!!!!?":
	case "good you??":
	case "good you???":
	case "good you????":
	case "good you?????":
	case "good you??????":
	case "good you???????":
	case "good you????????":
	case "good??":
	case "good u?":
	case "good you?":
	case "good, u.":
	case "good, u..":
	case "good, u...":
	case "good, u....":
	case "good, u.....":
	case "good, u......":
	case "good, u.......":
	case "good, u!":
	case "good, u!!":
	case "good, u!!!":
	case "good, u!!!!":
	case "good, u!!!!!":
	case "good, u!!!!!!":
	case "good, u!!!!!!!":
	case "good, u?":
	case "good, u??":
	case "good, u???":
	case "good, u????":
	case "good, u?????":
	case "good, u??????":
	case "good, u???????":
	case "good, you.":
	case "good, you..":
	case "good, you...":
	case "good, you....":
	case "good, you.....":
	case "good, you......":
	case "good, you.......":
	case "good, you!":
	case "good, you!!":
	case "good, you!!!":
	case "good, you!!!!":
	case "good, you!!!!!":
	case "good, you!!!!!!":
	case "good, you!!!!!!!":
	case "good, you?":
	case "good, you??":
	case "good, you???":
	case "good, you????":
	case "good, you?????":
	case "good, you??????":
	case "good, you???????":
	case "good, u":
	case "good, you":
	case "good, u.?":
	case "good, u..?":
	case "good, u...?":
	case "good, u....?":
	case "good, u.....?":
	case "good, u......?":
	case "good, u.......?":
	case "good, u!?":
	case "good, u!!?":
	case "good, u!!!?":
	case "good, u!!!!?":
	case "good, u!!!!!?":
	case "good, u!!!!!!?":
	case "good, u!!!!!!!?":
	case "good, u?":
	case "good, u??":
	case "good, u???":
	case "good, u????":
	case "good, u?????":
	case "good, u??????":
	case "good, u???????":
	case "good, u?":
	case "good, you?":
	case "good, you.?":
	case "good, you..?":
	case "good, you...?":
	case "good, you....?":
	case "good, you.....?":
	case "good, you......?":
	case "good, you.......?":
	case "good, you!?":
	case "good, you!!?":
	case "good, you!!!?":
	case "good, you!!!!?":
	case "good, you!!!!!?":
	case "good, you!!!!!!":
	case "good, you!!!!!!!?":
	case "good, you??":
	case "good, you???":
	case "good, you????":
	case "good, you?????":
	case "good, you??????":
	case "good, you???????":
	case "good, you????????":
	case "good, u?":
	case "sad.":
	case "sad..":
	case "sad...":
	case "sad....":
	case "sad.....":
	case "sad......":
	case "sad.......":
	case "sad!":
	case "sad!!":
	case "sad!!!":
	case "sad!!!!":
	case "sad!!!!!":
	case "sad!!!!!!":
	case "sad!!!!!!!":
	case "sad?":
	case "sad??":
	case "sad???":
	case "sad????":
	case "sad?????":
	case "sad??????":
	case "sad???????":
	case "sad. u":
	case "sad.. u":
	case "sad... u":
	case "sad.... u":
	case "sad..... u":
	case "sad...... u":
	case "sad....... u":
	case "sad! u":
	case "sad!! u":
	case "sad!!! u":
	case "sad!!!! u":
	case "sad!!!!! u":
	case "sad!!!!!! u":
	case "sad!!!!!!! u":
	case "sad? u":
	case "sad?? u":
	case "sad??? u":
	case "sad???? u":
	case "sad????? u":
	case "sad?????? u":
	case "sad??????? u":
	case "sad u.":
	case "sad u..":
	case "sad u...":
	case "sad u....":
	case "sad u.....":
	case "sad u......":
	case "sad u.......":
	case "sad u!":
	case "sad u!!":
	case "sad u!!!":
	case "sad u!!!!":
	case "sad u!!!!!":
	case "sad u!!!!!!":
	case "sad u!!!!!!!":
	case "sad u?":
	case "sad u??":
	case "sad u???":
	case "sad u????":
	case "sad u?????":
	case "sad u??????":
	case "sad u???????":
	case "sad":
	case "sad u":
	case "sad you":
	case "sad. you":
	case "sad.. you":
	case "sad... you":
	case "sad.... you":
	case "sad..... you":
	case "sad...... you":
	case "sad....... you":
	case "sad! you":
	case "sad!! you":
	case "sad!!! you":
	case "sad!!!! you":
	case "sad!!!!! you":
	case "sad!!!!!! you":
	case "sad!!!!!!! you":
	case "sad? you":
	case "sad?? you":
	case "sad??? you":
	case "sad???? you":
	case "sad????? you":
	case "sad?????? you":
	case "sad??????? you":
	case "sad you.":
	case "sad you..":
	case "sad you...":
	case "sad you....":
	case "sad you.....":
	case "sad you......":
	case "sad you.......":
	case "sad you!":
	case "sad you!!":
	case "sad you!!!":
	case "sad you!!!!":
	case "sad you!!!!!":
	case "sad you!!!!!!":
	case "sad you!!!!!!!":
	case "sad you?":
	case "sad you??":
	case "sad you???":
	case "sad you????":
	case "sad you?????":
	case "sad you??????":
	case "sad you???????":
	case "sad":
	case "sad u":
	case "sad you":
	case "sad. u?":
	case "sad.. u?":
	case "sad... u?":
	case "sad.... u?":
	case "sad..... u?":
	case "sad...... u?":
	case "sad....... u?":
	case "sad! u?":
	case "sad!! u?":
	case "sad!!! u?":
	case "sad!!!! u?":
	case "sad!!!!! u?":
	case "sad!!!!!! u?":
	case "sad!!!!!!! u?":
	case "sad? u?":
	case "sad?? u?":
	case "sad??? u?":
	case "sad???? u?":
	case "sad????? u?":
	case "sad?????? u?":
	case "sad??????? u?":
	case "sad u.?":
	case "sad u..?":
	case "sad u...?":
	case "sad u....?":
	case "sad u.....?":
	case "sad u......?":
	case "sad u.......?":
	case "sad u!?":
	case "sad u!!?":
	case "sad u!!!?":
	case "sad u!!!!?":
	case "sad u!!!!!?":
	case "sad u!!!!!!?":
	case "sad u!!!!!!!?":
	case "sad u?":
	case "sad u??":
	case "sad u???":
	case "sad u????":
	case "sad u?????":
	case "sad u??????":
	case "sad u???????":
	case "sad":
	case "sad u?":
	case "sad you?":
	case "sad. you?":
	case "sad.. you?":
	case "sad... you?":
	case "sad.... you?":
	case "sad..... you?":
	case "sad...... you?":
	case "sad....... you?":
	case "sad! you?":
	case "sad!! you?":
	case "sad!!! you?":
	case "sad!!!! you?":
	case "sad!!!!! you?":
	case "sad!!!!!! you?":
	case "sad!!!!!!! you?":
	case "sad? you?":
	case "sad?? you?":
	case "sad??? you?":
	case "sad???? you?":
	case "sad????? you?":
	case "sad?????? you?":
	case "sad??????? you?":
	case "sad you.?":
	case "sad you..?":
	case "sad you...?":
	case "sad you....?":
	case "sad you.....?":
	case "sad you......?":
	case "sad you.......?":
	case "sad you!?":
	case "sad you!!?":
	case "sad you!!!?":
	case "sad you!!!!?":
	case "sad you!!!!!?":
	case "sad you!!!!!!":
	case "sad you!!!!!!!?":
	case "sad you??":
	case "sad you???":
	case "sad you????":
	case "sad you?????":
	case "sad you??????":
	case "sad you???????":
	case "sad you????????":
	case "sad??":
	case "sad u?":
	case "sad you?":
	case "sad, u.":
	case "sad, u..":
	case "sad, u...":
	case "sad, u....":
	case "sad, u.....":
	case "sad, u......":
	case "sad, u.......":
	case "sad, u!":
	case "sad, u!!":
	case "sad, u!!!":
	case "sad, u!!!!":
	case "sad, u!!!!!":
	case "sad, u!!!!!!":
	case "sad, u!!!!!!!":
	case "sad, u?":
	case "sad, u??":
	case "sad, u???":
	case "sad, u????":
	case "sad, u?????":
	case "sad, u??????":
	case "sad, u???????":
	case "sad, you.":
	case "sad, you..":
	case "sad, you...":
	case "sad, you....":
	case "sad, you.....":
	case "sad, you......":
	case "sad, you.......":
	case "sad, you!":
	case "sad, you!!":
	case "sad, you!!!":
	case "sad, you!!!!":
	case "sad, you!!!!!":
	case "sad, you!!!!!!":
	case "sad, you!!!!!!!":
	case "sad, you?":
	case "sad, you??":
	case "sad, you???":
	case "sad, you????":
	case "sad, you?????":
	case "sad, you??????":
	case "sad, you???????":
	case "sad, u":
	case "sad, you":
	case "sad, u.?":
	case "sad, u..?":
	case "sad, u...?":
	case "sad, u....?":
	case "sad, u.....?":
	case "sad, u......?":
	case "sad, u.......?":
	case "sad, u!?":
	case "sad, u!!?":
	case "sad, u!!!?":
	case "sad, u!!!!?":
	case "sad, u!!!!!?":
	case "sad, u!!!!!!?":
	case "sad, u!!!!!!!?":
	case "sad, u?":
	case "sad, u??":
	case "sad, u???":
	case "sad, u????":
	case "sad, u?????":
	case "sad, u??????":
	case "sad, u???????":
	case "sad, u?":
	case "sad, you?":
	case "sad, you.?":
	case "sad, you..?":
	case "sad, you...?":
	case "sad, you....?":
	case "sad, you.....?":
	case "sad, you......?":
	case "sad, you.......?":
	case "sad, you!?":
	case "sad, you!!?":
	case "sad, you!!!?":
	case "sad, you!!!!?":
	case "sad, you!!!!!?":
	case "sad, you!!!!!!":
	case "sad, you!!!!!!!?":
	case "sad, you??":
	case "sad, you???":
	case "sad, you????":
	case "sad, you?????":
	case "sad, you??????":
	case "sad, you???????":
	case "sad, you????????":
	case "sad, u?":
	case "sad, you?":
	case "excited.":
	case "excited..":
	case "excited...":
	case "excited....":
	case "excited.....":
	case "excited......":
	case "excited.......":
	case "excited!":
	case "excited!!":
	case "excited!!!":
	case "excited!!!!":
	case "excited!!!!!":
	case "excited!!!!!!":
	case "excited!!!!!!!":
	case "excited?":
	case "excited??":
	case "excited???":
	case "excited????":
	case "excited?????":
	case "excited??????":
	case "excited???????":
	case "excited. u":
	case "excited.. u":
	case "excited... u":
	case "excited.... u":
	case "excited..... u":
	case "excited...... u":
	case "excited....... u":
	case "excited! u":
	case "excited!! u":
	case "excited!!! u":
	case "excited!!!! u":
	case "excited!!!!! u":
	case "excited!!!!!! u":
	case "excited!!!!!!! u":
	case "excited? u":
	case "excited?? u":
	case "excited??? u":
	case "excited???? u":
	case "excited????? u":
	case "excited?????? u":
	case "excited??????? u":
	case "excited u.":
	case "excited u..":
	case "excited u...":
	case "excited u....":
	case "excited u.....":
	case "excited u......":
	case "excited u.......":
	case "excited u!":
	case "excited u!!":
	case "excited u!!!":
	case "excited u!!!!":
	case "excited u!!!!!":
	case "excited u!!!!!!":
	case "excited u!!!!!!!":
	case "excited u?":
	case "excited u??":
	case "excited u???":
	case "excited u????":
	case "excited u?????":
	case "excited u??????":
	case "excited u???????":
	case "excited":
	case "excited u":
	case "excited you":
	case "excited. you":
	case "excited.. you":
	case "excited... you":
	case "excited.... you":
	case "excited..... you":
	case "excited...... you":
	case "excited....... you":
	case "excited! you":
	case "excited!! you":
	case "excited!!! you":
	case "excited!!!! you":
	case "excited!!!!! you":
	case "excited!!!!!! you":
	case "excited!!!!!!! you":
	case "excited? you":
	case "excited?? you":
	case "excited??? you":
	case "excited???? you":
	case "excited????? you":
	case "excited?????? you":
	case "excited??????? you":
	case "excited you.":
	case "excited you..":
	case "excited you...":
	case "excited you....":
	case "excited you.....":
	case "excited you......":
	case "excited you.......":
	case "excited you!":
	case "excited you!!":
	case "excited you!!!":
	case "excited you!!!!":
	case "excited you!!!!!":
	case "excited you!!!!!!":
	case "excited you!!!!!!!":
	case "excited you?":
	case "excited you??":
	case "excited you???":
	case "excited you????":
	case "excited you?????":
	case "excited you??????":
	case "excited you???????":
	case "excited":
	case "excited u":
	case "excited you":
	case "excited. u?":
	case "excited.. u?":
	case "excited... u?":
	case "excited.... u?":
	case "excited..... u?":
	case "excited...... u?":
	case "excited....... u?":
	case "excited! u?":
	case "excited!! u?":
	case "excited!!! u?":
	case "excited!!!! u?":
	case "excited!!!!! u?":
	case "excited!!!!!! u?":
	case "excited!!!!!!! u?":
	case "excited? u?":
	case "excited?? u?":
	case "excited??? u?":
	case "excited???? u?":
	case "excited????? u?":
	case "excited?????? u?":
	case "excited??????? u?":
	case "excited u.?":
	case "excited u..?":
	case "excited u...?":
	case "excited u....?":
	case "excited u.....?":
	case "excited u......?":
	case "excited u.......?":
	case "excited u!?":
	case "excited u!!?":
	case "excited u!!!?":
	case "excited u!!!!?":
	case "excited u!!!!!?":
	case "excited u!!!!!!?":
	case "excited u!!!!!!!?":
	case "excited u?":
	case "excited u??":
	case "excited u???":
	case "excited u????":
	case "excited u?????":
	case "excited u??????":
	case "excited u???????":
	case "excited":
	case "excited u?":
	case "excited you?":
	case "excited. you?":
	case "excited.. you?":
	case "excited... you?":
	case "excited.... you?":
	case "excited..... you?":
	case "excited...... you?":
	case "excited....... you?":
	case "excited! you?":
	case "excited!! you?":
	case "excited!!! you?":
	case "excited!!!! you?":
	case "excited!!!!! you?":
	case "excited!!!!!! you?":
	case "excited!!!!!!! you?":
	case "excited? you?":
	case "excited?? you?":
	case "excited??? you?":
	case "excited???? you?":
	case "excited????? you?":
	case "excited?????? you?":
	case "excited??????? you?":
	case "excited you.?":
	case "excited you..?":
	case "excited you...?":
	case "excited you....?":
	case "excited you.....?":
	case "excited you......?":
	case "excited you.......?":
	case "excited you!?":
	case "excited you!!?":
	case "excited you!!!?":
	case "excited you!!!!?":
	case "excited you!!!!!?":
	case "excited you!!!!!!":
	case "excited you!!!!!!!?":
	case "excited you??":
	case "excited you???":
	case "excited you????":
	case "excited you?????":
	case "excited you??????":
	case "excited you???????":
	case "excited you????????":
	case "excited??":
	case "excited u?":
	case "excited you?":
	case "excited, u.":
	case "excited, u..":
	case "excited, u...":
	case "excited, u....":
	case "excited, u.....":
	case "excited, u......":
	case "excited, u.......":
	case "excited, u!":
	case "excited, u!!":
	case "excited, u!!!":
	case "excited, u!!!!":
	case "excited, u!!!!!":
	case "excited, u!!!!!!":
	case "excited, u!!!!!!!":
	case "excited, u?":
	case "excited, u??":
	case "excited, u???":
	case "excited, u????":
	case "excited, u?????":
	case "excited, u??????":
	case "excited, u???????":
	case "excited, you.":
	case "excited, you..":
	case "excited, you...":
	case "excited, you....":
	case "excited, you.....":
	case "excited, you......":
	case "excited, you.......":
	case "excited, you!":
	case "excited, you!!":
	case "excited, you!!!":
	case "excited, you!!!!":
	case "excited, you!!!!!":
	case "excited, you!!!!!!":
	case "excited, you!!!!!!!":
	case "excited, you?":
	case "excited, you??":
	case "excited, you???":
	case "excited, you????":
	case "excited, you?????":
	case "excited, you??????":
	case "excited, you???????":
	case "excited, u":
	case "excited, you":
	case "excited, u.?":
	case "excited, u..?":
	case "excited, u...?":
	case "excited, u....?":
	case "excited, u.....?":
	case "excited, u......?":
	case "excited, u.......?":
	case "excited, u!?":
	case "excited, u!!?":
	case "excited, u!!!?":
	case "excited, u!!!!?":
	case "excited, u!!!!!?":
	case "excited, u!!!!!!?":
	case "excited, u!!!!!!!?":
	case "excited, u?":
	case "excited, u??":
	case "excited, u???":
	case "excited, u????":
	case "excited, u?????":
	case "excited, u??????":
	case "excited, u???????":
	case "excited, u?":
	case "excited, you?":
	case "excited, you.?":
	case "excited, you..?":
	case "excited, you...?":
	case "excited, you....?":
	case "excited, you.....?":
	case "excited, you......?":
	case "excited, you.......?":
	case "excited, you!?":
	case "excited, you!!?":
	case "excited, you!!!?":
	case "excited, you!!!!?":
	case "excited, you!!!!!?":
	case "excited, you!!!!!!":
	case "excited, you!!!!!!!?":
	case "excited, you??":
	case "excited, you???":
	case "excited, you????":
	case "excited, you?????":
	case "excited, you??????":
	case "excited, you???????":
	case "excited, you????????":
	case "excited, u?":
	case "excited, you?":
	case "angry.":
	case "angry..":
	case "angry...":
	case "angry....":
	case "angry.....":
	case "angry......":
	case "angry.......":
	case "angry!":
	case "angry!!":
	case "angry!!!":
	case "angry!!!!":
	case "angry!!!!!":
	case "angry!!!!!!":
	case "angry!!!!!!!":
	case "angry?":
	case "angry??":
	case "angry???":
	case "angry????":
	case "angry?????":
	case "angry??????":
	case "angry???????":
	case "angry. u":
	case "angry.. u":
	case "angry... u":
	case "angry.... u":
	case "angry..... u":
	case "angry...... u":
	case "angry....... u":
	case "angry! u":
	case "angry!! u":
	case "angry!!! u":
	case "angry!!!! u":
	case "angry!!!!! u":
	case "angry!!!!!! u":
	case "angry!!!!!!! u":
	case "angry? u":
	case "angry?? u":
	case "angry??? u":
	case "angry???? u":
	case "angry????? u":
	case "angry?????? u":
	case "angry??????? u":
	case "angry u.":
	case "angry u..":
	case "angry u...":
	case "angry u....":
	case "angry u.....":
	case "angry u......":
	case "angry u.......":
	case "angry u!":
	case "angry u!!":
	case "angry u!!!":
	case "angry u!!!!":
	case "angry u!!!!!":
	case "angry u!!!!!!":
	case "angry u!!!!!!!":
	case "angry u?":
	case "angry u??":
	case "angry u???":
	case "angry u????":
	case "angry u?????":
	case "angry u??????":
	case "angry u???????":
	case "angry":
	case "angry u":
	case "angry you":
	case "angry. you":
	case "angry.. you":
	case "angry... you":
	case "angry.... you":
	case "angry..... you":
	case "angry...... you":
	case "angry....... you":
	case "angry! you":
	case "angry!! you":
	case "angry!!! you":
	case "angry!!!! you":
	case "angry!!!!! you":
	case "angry!!!!!! you":
	case "angry!!!!!!! you":
	case "angry? you":
	case "angry?? you":
	case "angry??? you":
	case "angry???? you":
	case "angry????? you":
	case "angry?????? you":
	case "angry??????? you":
	case "angry you.":
	case "angry you..":
	case "angry you...":
	case "angry you....":
	case "angry you.....":
	case "angry you......":
	case "angry you.......":
	case "angry you!":
	case "angry you!!":
	case "angry you!!!":
	case "angry you!!!!":
	case "angry you!!!!!":
	case "angry you!!!!!!":
	case "angry you!!!!!!!":
	case "angry you?":
	case "angry you??":
	case "angry you???":
	case "angry you????":
	case "angry you?????":
	case "angry you??????":
	case "angry you???????":
	case "angry":
	case "angry u":
	case "angry you":
	case "angry. u?":
	case "angry.. u?":
	case "angry... u?":
	case "angry.... u?":
	case "angry..... u?":
	case "angry...... u?":
	case "angry....... u?":
	case "angry! u?":
	case "angry!! u?":
	case "angry!!! u?":
	case "angry!!!! u?":
	case "angry!!!!! u?":
	case "angry!!!!!! u?":
	case "angry!!!!!!! u?":
	case "angry? u?":
	case "angry?? u?":
	case "angry??? u?":
	case "angry???? u?":
	case "angry????? u?":
	case "angry?????? u?":
	case "angry??????? u?":
	case "angry u.?":
	case "angry u..?":
	case "angry u...?":
	case "angry u....?":
	case "angry u.....?":
	case "angry u......?":
	case "angry u.......?":
	case "angry u!?":
	case "angry u!!?":
	case "angry u!!!?":
	case "angry u!!!!?":
	case "angry u!!!!!?":
	case "angry u!!!!!!?":
	case "angry u!!!!!!!?":
	case "angry u?":
	case "angry u??":
	case "angry u???":
	case "angry u????":
	case "angry u?????":
	case "angry u??????":
	case "angry u???????":
	case "angry":
	case "angry u?":
	case "angry you?":
	case "angry. you?":
	case "angry.. you?":
	case "angry... you?":
	case "angry.... you?":
	case "angry..... you?":
	case "angry...... you?":
	case "angry....... you?":
	case "angry! you?":
	case "angry!! you?":
	case "angry!!! you?":
	case "angry!!!! you?":
	case "angry!!!!! you?":
	case "angry!!!!!! you?":
	case "angry!!!!!!! you?":
	case "angry? you?":
	case "angry?? you?":
	case "angry??? you?":
	case "angry???? you?":
	case "angry????? you?":
	case "angry?????? you?":
	case "angry??????? you?":
	case "angry you.?":
	case "angry you..?":
	case "angry you...?":
	case "angry you....?":
	case "angry you.....?":
	case "angry you......?":
	case "angry you.......?":
	case "angry you!?":
	case "angry you!!?":
	case "angry you!!!?":
	case "angry you!!!!?":
	case "angry you!!!!!?":
	case "angry you!!!!!!":
	case "angry you!!!!!!!?":
	case "angry you??":
	case "angry you???":
	case "angry you????":
	case "angry you?????":
	case "angry you??????":
	case "angry you???????":
	case "angry you????????":
	case "angry??":
	case "angry u?":
	case "angry you?":
	case "angry, u.":
	case "angry, u..":
	case "angry, u...":
	case "angry, u....":
	case "angry, u.....":
	case "angry, u......":
	case "angry, u.......":
	case "angry, u!":
	case "angry, u!!":
	case "angry, u!!!":
	case "angry, u!!!!":
	case "angry, u!!!!!":
	case "angry, u!!!!!!":
	case "angry, u!!!!!!!":
	case "angry, u?":
	case "angry, u??":
	case "angry, u???":
	case "angry, u????":
	case "angry, u?????":
	case "angry, u??????":
	case "angry, u???????":
	case "angry, you.":
	case "angry, you..":
	case "angry, you...":
	case "angry, you....":
	case "angry, you.....":
	case "angry, you......":
	case "angry, you.......":
	case "angry, you!":
	case "angry, you!!":
	case "angry, you!!!":
	case "angry, you!!!!":
	case "angry, you!!!!!":
	case "angry, you!!!!!!":
	case "angry, you!!!!!!!":
	case "angry, you?":
	case "angry, you??":
	case "angry, you???":
	case "angry, you????":
	case "angry, you?????":
	case "angry, you??????":
	case "angry, you???????":
	case "angry, u":
	case "angry, you":
	case "angry, u.?":
	case "angry, u..?":
	case "angry, u...?":
	case "angry, u....?":
	case "angry, u.....?":
	case "angry, u......?":
	case "angry, u.......?":
	case "angry, u!?":
	case "angry, u!!?":
	case "angry, u!!!?":
	case "angry, u!!!!?":
	case "angry, u!!!!!?":
	case "angry, u!!!!!!?":
	case "angry, u!!!!!!!?":
	case "angry, u?":
	case "angry, u??":
	case "angry, u???":
	case "angry, u????":
	case "angry, u?????":
	case "angry, u??????":
	case "angry, u???????":
	case "angry, u?":
	case "angry, you?":
	case "angry, you.?":
	case "angry, you..?":
	case "angry, you...?":
	case "angry, you....?":
	case "angry, you.....?":
	case "angry, you......?":
	case "angry, you.......?":
	case "angry, you!?":
	case "angry, you!!?":
	case "angry, you!!!?":
	case "angry, you!!!!?":
	case "angry, you!!!!!?":
	case "angry, you!!!!!!":
	case "angry, you!!!!!!!?":
	case "angry, you??":
	case "angry, you???":
	case "angry, you????":
	case "angry, you?????":
	case "angry, you??????":
	case "angry, you???????":
	case "angry, you????????":
	case "angry, u?":
	case "angry, you?":
	case "mad.":
	case "mad..":
	case "mad...":
	case "mad....":
	case "mad.....":
	case "mad......":
	case "mad.......":
	case "mad!":
	case "mad!!":
	case "mad!!!":
	case "mad!!!!":
	case "mad!!!!!":
	case "mad!!!!!!":
	case "mad!!!!!!!":
	case "mad?":
	case "mad??":
	case "mad???":
	case "mad????":
	case "mad?????":
	case "mad??????":
	case "mad???????":
	case "mad. u":
	case "mad.. u":
	case "mad... u":
	case "mad.... u":
	case "mad..... u":
	case "mad...... u":
	case "mad....... u":
	case "mad! u":
	case "mad!! u":
	case "mad!!! u":
	case "mad!!!! u":
	case "mad!!!!! u":
	case "mad!!!!!! u":
	case "mad!!!!!!! u":
	case "mad? u":
	case "mad?? u":
	case "mad??? u":
	case "mad???? u":
	case "mad????? u":
	case "mad?????? u":
	case "mad??????? u":
	case "mad u.":
	case "mad u..":
	case "mad u...":
	case "mad u....":
	case "mad u.....":
	case "mad u......":
	case "mad u.......":
	case "mad u!":
	case "mad u!!":
	case "mad u!!!":
	case "mad u!!!!":
	case "mad u!!!!!":
	case "mad u!!!!!!":
	case "mad u!!!!!!!":
	case "mad u?":
	case "mad u??":
	case "mad u???":
	case "mad u????":
	case "mad u?????":
	case "mad u??????":
	case "mad u???????":
	case "mad":
	case "mad u":
	case "mad you":
	case "mad. you":
	case "mad.. you":
	case "mad... you":
	case "mad.... you":
	case "mad..... you":
	case "mad...... you":
	case "mad....... you":
	case "mad! you":
	case "mad!! you":
	case "mad!!! you":
	case "mad!!!! you":
	case "mad!!!!! you":
	case "mad!!!!!! you":
	case "mad!!!!!!! you":
	case "mad? you":
	case "mad?? you":
	case "mad??? you":
	case "mad???? you":
	case "mad????? you":
	case "mad?????? you":
	case "mad??????? you":
	case "mad you.":
	case "mad you..":
	case "mad you...":
	case "mad you....":
	case "mad you.....":
	case "mad you......":
	case "mad you.......":
	case "mad you!":
	case "mad you!!":
	case "mad you!!!":
	case "mad you!!!!":
	case "mad you!!!!!":
	case "mad you!!!!!!":
	case "mad you!!!!!!!":
	case "mad you?":
	case "mad you??":
	case "mad you???":
	case "mad you????":
	case "mad you?????":
	case "mad you??????":
	case "mad you???????":
	case "mad":
	case "mad u":
	case "mad you":
	case "mad. u?":
	case "mad.. u?":
	case "mad... u?":
	case "mad.... u?":
	case "mad..... u?":
	case "mad...... u?":
	case "mad....... u?":
	case "mad! u?":
	case "mad!! u?":
	case "mad!!! u?":
	case "mad!!!! u?":
	case "mad!!!!! u?":
	case "mad!!!!!! u?":
	case "mad!!!!!!! u?":
	case "mad? u?":
	case "mad?? u?":
	case "mad??? u?":
	case "mad???? u?":
	case "mad????? u?":
	case "mad?????? u?":
	case "mad??????? u?":
	case "mad u.?":
	case "mad u..?":
	case "mad u...?":
	case "mad u....?":
	case "mad u.....?":
	case "mad u......?":
	case "mad u.......?":
	case "mad u!?":
	case "mad u!!?":
	case "mad u!!!?":
	case "mad u!!!!?":
	case "mad u!!!!!?":
	case "mad u!!!!!!?":
	case "mad u!!!!!!!?":
	case "mad u?":
	case "mad u??":
	case "mad u???":
	case "mad u????":
	case "mad u?????":
	case "mad u??????":
	case "mad u???????":
	case "mad":
	case "mad u?":
	case "mad you?":
	case "mad. you?":
	case "mad.. you?":
	case "mad... you?":
	case "mad.... you?":
	case "mad..... you?":
	case "mad...... you?":
	case "mad....... you?":
	case "mad! you?":
	case "mad!! you?":
	case "mad!!! you?":
	case "mad!!!! you?":
	case "mad!!!!! you?":
	case "mad!!!!!! you?":
	case "mad!!!!!!! you?":
	case "mad? you?":
	case "mad?? you?":
	case "mad??? you?":
	case "mad???? you?":
	case "mad????? you?":
	case "mad?????? you?":
	case "mad??????? you?":
	case "mad you.?":
	case "mad you..?":
	case "mad you...?":
	case "mad you....?":
	case "mad you.....?":
	case "mad you......?":
	case "mad you.......?":
	case "mad you!?":
	case "mad you!!?":
	case "mad you!!!?":
	case "mad you!!!!?":
	case "mad you!!!!!?":
	case "mad you!!!!!!":
	case "mad you!!!!!!!?":
	case "mad you??":
	case "mad you???":
	case "mad you????":
	case "mad you?????":
	case "mad you??????":
	case "mad you???????":
	case "mad you????????":
	case "mad??":
	case "mad u?":
	case "mad you?":
	case "mad, u.":
	case "mad, u..":
	case "mad, u...":
	case "mad, u....":
	case "mad, u.....":
	case "mad, u......":
	case "mad, u.......":
	case "mad, u!":
	case "mad, u!!":
	case "mad, u!!!":
	case "mad, u!!!!":
	case "mad, u!!!!!":
	case "mad, u!!!!!!":
	case "mad, u!!!!!!!":
	case "mad, u?":
	case "mad, u??":
	case "mad, u???":
	case "mad, u????":
	case "mad, u?????":
	case "mad, u??????":
	case "mad, u???????":
	case "mad, you.":
	case "mad, you..":
	case "mad, you...":
	case "mad, you....":
	case "mad, you.....":
	case "mad, you......":
	case "mad, you.......":
	case "mad, you!":
	case "mad, you!!":
	case "mad, you!!!":
	case "mad, you!!!!":
	case "mad, you!!!!!":
	case "mad, you!!!!!!":
	case "mad, you!!!!!!!":
	case "mad, you?":
	case "mad, you??":
	case "mad, you???":
	case "mad, you????":
	case "mad, you?????":
	case "mad, you??????":
	case "mad, you???????":
	case "mad, u":
	case "mad, you":
	case "mad, u.?":
	case "mad, u..?":
	case "mad, u...?":
	case "mad, u....?":
	case "mad, u.....?":
	case "mad, u......?":
	case "mad, u.......?":
	case "mad, u!?":
	case "mad, u!!?":
	case "mad, u!!!?":
	case "mad, u!!!!?":
	case "mad, u!!!!!?":
	case "mad, u!!!!!!?":
	case "mad, u!!!!!!!?":
	case "mad, u?":
	case "mad, u??":
	case "mad, u???":
	case "mad, u????":
	case "mad, u?????":
	case "mad, u??????":
	case "mad, u???????":
	case "mad, u?":
	case "mad, you?":
	case "mad, you.?":
	case "mad, you..?":
	case "mad, you...?":
	case "mad, you....?":
	case "mad, you.....?":
	case "mad, you......?":
	case "mad, you.......?":
	case "mad, you!?":
	case "mad, you!!?":
	case "mad, you!!!?":
	case "mad, you!!!!?":
	case "mad, you!!!!!?":
	case "mad, you!!!!!!":
	case "mad, you!!!!!!!?":
	case "mad, you??":
	case "mad, you???":
	case "mad, you????":
	case "mad, you?????":
	case "mad, you??????":
	case "mad, you???????":
	case "mad, you????????":
	case "mad, u?":
	case "mad, you?":
	case "i am good.":
	case "i am good..":
	case "i am good...":
	case "i am good....":
	case "i am good.....":
	case "i am good......":
	case "i am good.......":
	case "i am good!":
	case "i am good!!":
	case "i am good!!!":
	case "i am good!!!!":
	case "i am good!!!!!":
	case "i am good!!!!!!":
	case "i am good!!!!!!!":
	case "i am good?":
	case "i am good??":
	case "i am good???":
	case "i am good????":
	case "i am good?????":
	case "i am good??????":
	case "i am good???????":
	case "i am good. u":
	case "i am good.. u":
	case "i am good... u":
	case "i am good.... u":
	case "i am good..... u":
	case "i am good...... u":
	case "i am good....... u":
	case "i am good! u":
	case "i am good!! u":
	case "i am good!!! u":
	case "i am good!!!! u":
	case "i am good!!!!! u":
	case "i am good!!!!!! u":
	case "i am good!!!!!!! u":
	case "i am good? u":
	case "i am good?? u":
	case "i am good??? u":
	case "i am good???? u":
	case "i am good????? u":
	case "i am good?????? u":
	case "i am good??????? u":
	case "i am good u.":
	case "i am good u..":
	case "i am good u...":
	case "i am good u....":
	case "i am good u.....":
	case "i am good u......":
	case "i am good u.......":
	case "i am good u!":
	case "i am good u!!":
	case "i am good u!!!":
	case "i am good u!!!!":
	case "i am good u!!!!!":
	case "i am good u!!!!!!":
	case "i am good u!!!!!!!":
	case "i am good u?":
	case "i am good u??":
	case "i am good u???":
	case "i am good u????":
	case "i am good u?????":
	case "i am good u??????":
	case "i am good u???????":
	case "i am good":
	case "i am good u":
	case "i am good you":
	case "i am good. you":
	case "i am good.. you":
	case "i am good... you":
	case "i am good.... you":
	case "i am good..... you":
	case "i am good...... you":
	case "i am good....... you":
	case "i am good! you":
	case "i am good!! you":
	case "i am good!!! you":
	case "i am good!!!! you":
	case "i am good!!!!! you":
	case "i am good!!!!!! you":
	case "i am good!!!!!!! you":
	case "i am good? you":
	case "i am good?? you":
	case "i am good??? you":
	case "i am good???? you":
	case "i am good????? you":
	case "i am good?????? you":
	case "i am good??????? you":
	case "i am good you.":
	case "i am good you..":
	case "i am good you...":
	case "i am good you....":
	case "i am good you.....":
	case "i am good you......":
	case "i am good you.......":
	case "i am good you!":
	case "i am good you!!":
	case "i am good you!!!":
	case "i am good you!!!!":
	case "i am good you!!!!!":
	case "i am good you!!!!!!":
	case "i am good you!!!!!!!":
	case "i am good you?":
	case "i am good you??":
	case "i am good you???":
	case "i am good you????":
	case "i am good you?????":
	case "i am good you??????":
	case "i am good you???????":
	case "i am good":
	case "i am good u":
	case "i am good you":
	case "i am good. u?":
	case "i am good.. u?":
	case "i am good... u?":
	case "i am good.... u?":
	case "i am good..... u?":
	case "i am good...... u?":
	case "i am good....... u?":
	case "i am good! u?":
	case "i am good!! u?":
	case "i am good!!! u?":
	case "i am good!!!! u?":
	case "i am good!!!!! u?":
	case "i am good!!!!!! u?":
	case "i am good!!!!!!! u?":
	case "i am good? u?":
	case "i am good?? u?":
	case "i am good??? u?":
	case "i am good???? u?":
	case "i am good????? u?":
	case "i am good?????? u?":
	case "i am good??????? u?":
	case "i am good u.?":
	case "i am good u..?":
	case "i am good u...?":
	case "i am good u....?":
	case "i am good u.....?":
	case "i am good u......?":
	case "i am good u.......?":
	case "i am good u!?":
	case "i am good u!!?":
	case "i am good u!!!?":
	case "i am good u!!!!?":
	case "i am good u!!!!!?":
	case "i am good u!!!!!!?":
	case "i am good u!!!!!!!?":
	case "i am good u?":
	case "i am good u??":
	case "i am good u???":
	case "i am good u????":
	case "i am good u?????":
	case "i am good u??????":
	case "i am good u???????":
	case "i am good":
	case "i am good u?":
	case "i am good you?":
	case "i am good. you?":
	case "i am good.. you?":
	case "i am good... you?":
	case "i am good.... you?":
	case "i am good..... you?":
	case "i am good...... you?":
	case "i am good....... you?":
	case "i am good! you?":
	case "i am good!! you?":
	case "i am good!!! you?":
	case "i am good!!!! you?":
	case "i am good!!!!! you?":
	case "i am good!!!!!! you?":
	case "i am good!!!!!!! you?":
	case "i am good? you?":
	case "i am good?? you?":
	case "i am good??? you?":
	case "i am good???? you?":
	case "i am good????? you?":
	case "i am good?????? you?":
	case "i am good??????? you?":
	case "i am good you.?":
	case "i am good you..?":
	case "i am good you...?":
	case "i am good you....?":
	case "i am good you.....?":
	case "i am good you......?":
	case "i am good you.......?":
	case "i am good you!?":
	case "i am good you!!?":
	case "i am good you!!!?":
	case "i am good you!!!!?":
	case "i am good you!!!!!?":
	case "i am good you!!!!!!":
	case "i am good you!!!!!!!?":
	case "i am good you??":
	case "i am good you???":
	case "i am good you????":
	case "i am good you?????":
	case "i am good you??????":
	case "i am good you???????":
	case "i am good you????????":
	case "i am good??":
	case "i am good u?":
	case "i am good you?":
	case "i am good, u.":
	case "i am good, u..":
	case "i am good, u...":
	case "i am good, u....":
	case "i am good, u.....":
	case "i am good, u......":
	case "i am good, u.......":
	case "i am good, u!":
	case "i am good, u!!":
	case "i am good, u!!!":
	case "i am good, u!!!!":
	case "i am good, u!!!!!":
	case "i am good, u!!!!!!":
	case "i am good, u!!!!!!!":
	case "i am good, u?":
	case "i am good, u??":
	case "i am good, u???":
	case "i am good, u????":
	case "i am good, u?????":
	case "i am good, u??????":
	case "i am good, u???????":
	case "i am good, you.":
	case "i am good, you..":
	case "i am good, you...":
	case "i am good, you....":
	case "i am good, you.....":
	case "i am good, you......":
	case "i am good, you.......":
	case "i am good, you!":
	case "i am good, you!!":
	case "i am good, you!!!":
	case "i am good, you!!!!":
	case "i am good, you!!!!!":
	case "i am good, you!!!!!!":
	case "i am good, you!!!!!!!":
	case "i am good, you?":
	case "i am good, you??":
	case "i am good, you???":
	case "i am good, you????":
	case "i am good, you?????":
	case "i am good, you??????":
	case "i am good, you???????":
	case "i am good, u":
	case "i am good, you":
	case "i am good, u.?":
	case "i am good, u..?":
	case "i am good, u...?":
	case "i am good, u....?":
	case "i am good, u.....?":
	case "i am good, u......?":
	case "i am good, u.......?":
	case "i am good, u!?":
	case "i am good, u!!?":
	case "i am good, u!!!?":
	case "i am good, u!!!!?":
	case "i am good, u!!!!!?":
	case "i am good, u!!!!!!?":
	case "i am good, u!!!!!!!?":
	case "i am good, u?":
	case "i am good, u??":
	case "i am good, u???":
	case "i am good, u????":
	case "i am good, u?????":
	case "i am good, u??????":
	case "i am good, u???????":
	case "i am good, u?":
	case "i am good, you?":
	case "i am good, you.?":
	case "i am good, you..?":
	case "i am good, you...?":
	case "i am good, you....?":
	case "i am good, you.....?":
	case "i am good, you......?":
	case "i am good, you.......?":
	case "i am good, you!?":
	case "i am good, you!!?":
	case "i am good, you!!!?":
	case "i am good, you!!!!?":
	case "i am good, you!!!!!?":
	case "i am good, you!!!!!!":
	case "i am good, you!!!!!!!?":
	case "i am good, you??":
	case "i am good, you???":
	case "i am good, you????":
	case "i am good, you?????":
	case "i am good, you??????":
	case "i am good, you???????":
	case "i am good, you????????":
	case "i am good, u?":
	case "i am sad.":
	case "i am sad..":
	case "i am sad...":
	case "i am sad....":
	case "i am sad.....":
	case "i am sad......":
	case "i am sad.......":
	case "i am sad!":
	case "i am sad!!":
	case "i am sad!!!":
	case "i am sad!!!!":
	case "i am sad!!!!!":
	case "i am sad!!!!!!":
	case "i am sad!!!!!!!":
	case "i am sad?":
	case "i am sad??":
	case "i am sad???":
	case "i am sad????":
	case "i am sad?????":
	case "i am sad??????":
	case "i am sad???????":
	case "i am sad. u":
	case "i am sad.. u":
	case "i am sad... u":
	case "i am sad.... u":
	case "i am sad..... u":
	case "i am sad...... u":
	case "i am sad....... u":
	case "i am sad! u":
	case "i am sad!! u":
	case "i am sad!!! u":
	case "i am sad!!!! u":
	case "i am sad!!!!! u":
	case "i am sad!!!!!! u":
	case "i am sad!!!!!!! u":
	case "i am sad? u":
	case "i am sad?? u":
	case "i am sad??? u":
	case "i am sad???? u":
	case "i am sad????? u":
	case "i am sad?????? u":
	case "i am sad??????? u":
	case "i am sad u.":
	case "i am sad u..":
	case "i am sad u...":
	case "i am sad u....":
	case "i am sad u.....":
	case "i am sad u......":
	case "i am sad u.......":
	case "i am sad u!":
	case "i am sad u!!":
	case "i am sad u!!!":
	case "i am sad u!!!!":
	case "i am sad u!!!!!":
	case "i am sad u!!!!!!":
	case "i am sad u!!!!!!!":
	case "i am sad u?":
	case "i am sad u??":
	case "i am sad u???":
	case "i am sad u????":
	case "i am sad u?????":
	case "i am sad u??????":
	case "i am sad u???????":
	case "i am sad":
	case "i am sad u":
	case "i am sad you":
	case "i am sad. you":
	case "i am sad.. you":
	case "i am sad... you":
	case "i am sad.... you":
	case "i am sad..... you":
	case "i am sad...... you":
	case "i am sad....... you":
	case "i am sad! you":
	case "i am sad!! you":
	case "i am sad!!! you":
	case "i am sad!!!! you":
	case "i am sad!!!!! you":
	case "i am sad!!!!!! you":
	case "i am sad!!!!!!! you":
	case "i am sad? you":
	case "i am sad?? you":
	case "i am sad??? you":
	case "i am sad???? you":
	case "i am sad????? you":
	case "i am sad?????? you":
	case "i am sad??????? you":
	case "i am sad you.":
	case "i am sad you..":
	case "i am sad you...":
	case "i am sad you....":
	case "i am sad you.....":
	case "i am sad you......":
	case "i am sad you.......":
	case "i am sad you!":
	case "i am sad you!!":
	case "i am sad you!!!":
	case "i am sad you!!!!":
	case "i am sad you!!!!!":
	case "i am sad you!!!!!!":
	case "i am sad you!!!!!!!":
	case "i am sad you?":
	case "i am sad you??":
	case "i am sad you???":
	case "i am sad you????":
	case "i am sad you?????":
	case "i am sad you??????":
	case "i am sad you???????":
	case "i am sad":
	case "i am sad u":
	case "i am sad you":
	case "i am sad. u?":
	case "i am sad.. u?":
	case "i am sad... u?":
	case "i am sad.... u?":
	case "i am sad..... u?":
	case "i am sad...... u?":
	case "i am sad....... u?":
	case "i am sad! u?":
	case "i am sad!! u?":
	case "i am sad!!! u?":
	case "i am sad!!!! u?":
	case "i am sad!!!!! u?":
	case "i am sad!!!!!! u?":
	case "i am sad!!!!!!! u?":
	case "i am sad? u?":
	case "i am sad?? u?":
	case "i am sad??? u?":
	case "i am sad???? u?":
	case "i am sad????? u?":
	case "i am sad?????? u?":
	case "i am sad??????? u?":
	case "i am sad u.?":
	case "i am sad u..?":
	case "i am sad u...?":
	case "i am sad u....?":
	case "i am sad u.....?":
	case "i am sad u......?":
	case "i am sad u.......?":
	case "i am sad u!?":
	case "i am sad u!!?":
	case "i am sad u!!!?":
	case "i am sad u!!!!?":
	case "i am sad u!!!!!?":
	case "i am sad u!!!!!!?":
	case "i am sad u!!!!!!!?":
	case "i am sad u?":
	case "i am sad u??":
	case "i am sad u???":
	case "i am sad u????":
	case "i am sad u?????":
	case "i am sad u??????":
	case "i am sad u???????":
	case "i am sad":
	case "i am sad u?":
	case "i am sad you?":
	case "i am sad. you?":
	case "i am sad.. you?":
	case "i am sad... you?":
	case "i am sad.... you?":
	case "i am sad..... you?":
	case "i am sad...... you?":
	case "i am sad....... you?":
	case "i am sad! you?":
	case "i am sad!! you?":
	case "i am sad!!! you?":
	case "i am sad!!!! you?":
	case "i am sad!!!!! you?":
	case "i am sad!!!!!! you?":
	case "i am sad!!!!!!! you?":
	case "i am sad? you?":
	case "i am sad?? you?":
	case "i am sad??? you?":
	case "i am sad???? you?":
	case "i am sad????? you?":
	case "i am sad?????? you?":
	case "i am sad??????? you?":
	case "i am sad you.?":
	case "i am sad you..?":
	case "i am sad you...?":
	case "i am sad you....?":
	case "i am sad you.....?":
	case "i am sad you......?":
	case "i am sad you.......?":
	case "i am sad you!?":
	case "i am sad you!!?":
	case "i am sad you!!!?":
	case "i am sad you!!!!?":
	case "i am sad you!!!!!?":
	case "i am sad you!!!!!!":
	case "i am sad you!!!!!!!?":
	case "i am sad you??":
	case "i am sad you???":
	case "i am sad you????":
	case "i am sad you?????":
	case "i am sad you??????":
	case "i am sad you???????":
	case "i am sad you????????":
	case "i am sad??":
	case "i am sad u?":
	case "i am sad you?":
	case "i am sad, u.":
	case "i am sad, u..":
	case "i am sad, u...":
	case "i am sad, u....":
	case "i am sad, u.....":
	case "i am sad, u......":
	case "i am sad, u.......":
	case "i am sad, u!":
	case "i am sad, u!!":
	case "i am sad, u!!!":
	case "i am sad, u!!!!":
	case "i am sad, u!!!!!":
	case "i am sad, u!!!!!!":
	case "i am sad, u!!!!!!!":
	case "i am sad, u?":
	case "i am sad, u??":
	case "i am sad, u???":
	case "i am sad, u????":
	case "i am sad, u?????":
	case "i am sad, u??????":
	case "i am sad, u???????":
	case "i am sad, you.":
	case "i am sad, you..":
	case "i am sad, you...":
	case "i am sad, you....":
	case "i am sad, you.....":
	case "i am sad, you......":
	case "i am sad, you.......":
	case "i am sad, you!":
	case "i am sad, you!!":
	case "i am sad, you!!!":
	case "i am sad, you!!!!":
	case "i am sad, you!!!!!":
	case "i am sad, you!!!!!!":
	case "i am sad, you!!!!!!!":
	case "i am sad, you?":
	case "i am sad, you??":
	case "i am sad, you???":
	case "i am sad, you????":
	case "i am sad, you?????":
	case "i am sad, you??????":
	case "i am sad, you???????":
	case "i am sad, u":
	case "i am sad, you":
	case "i am sad, u.?":
	case "i am sad, u..?":
	case "i am sad, u...?":
	case "i am sad, u....?":
	case "i am sad, u.....?":
	case "i am sad, u......?":
	case "i am sad, u.......?":
	case "i am sad, u!?":
	case "i am sad, u!!?":
	case "i am sad, u!!!?":
	case "i am sad, u!!!!?":
	case "i am sad, u!!!!!?":
	case "i am sad, u!!!!!!?":
	case "i am sad, u!!!!!!!?":
	case "i am sad, u?":
	case "i am sad, u??":
	case "i am sad, u???":
	case "i am sad, u????":
	case "i am sad, u?????":
	case "i am sad, u??????":
	case "i am sad, u???????":
	case "i am sad, u?":
	case "i am sad, you?":
	case "i am sad, you.?":
	case "i am sad, you..?":
	case "i am sad, you...?":
	case "i am sad, you....?":
	case "i am sad, you.....?":
	case "i am sad, you......?":
	case "i am sad, you.......?":
	case "i am sad, you!?":
	case "i am sad, you!!?":
	case "i am sad, you!!!?":
	case "i am sad, you!!!!?":
	case "i am sad, you!!!!!?":
	case "i am sad, you!!!!!!":
	case "i am sad, you!!!!!!!?":
	case "i am sad, you??":
	case "i am sad, you???":
	case "i am sad, you????":
	case "i am sad, you?????":
	case "i am sad, you??????":
	case "i am sad, you???????":
	case "i am sad, you????????":
	case "i am sad, u?":
	case "i am sad, you?":
	case "i am excited.":
	case "i am excited..":
	case "i am excited...":
	case "i am excited....":
	case "i am excited.....":
	case "i am excited......":
	case "i am excited.......":
	case "i am excited!":
	case "i am excited!!":
	case "i am excited!!!":
	case "i am excited!!!!":
	case "i am excited!!!!!":
	case "i am excited!!!!!!":
	case "i am excited!!!!!!!":
	case "i am excited?":
	case "i am excited??":
	case "i am excited???":
	case "i am excited????":
	case "i am excited?????":
	case "i am excited??????":
	case "i am excited???????":
	case "i am excited. u":
	case "i am excited.. u":
	case "i am excited... u":
	case "i am excited.... u":
	case "i am excited..... u":
	case "i am excited...... u":
	case "i am excited....... u":
	case "i am excited! u":
	case "i am excited!! u":
	case "i am excited!!! u":
	case "i am excited!!!! u":
	case "i am excited!!!!! u":
	case "i am excited!!!!!! u":
	case "i am excited!!!!!!! u":
	case "i am excited? u":
	case "i am excited?? u":
	case "i am excited??? u":
	case "i am excited???? u":
	case "i am excited????? u":
	case "i am excited?????? u":
	case "i am excited??????? u":
	case "i am excited u.":
	case "i am excited u..":
	case "i am excited u...":
	case "i am excited u....":
	case "i am excited u.....":
	case "i am excited u......":
	case "i am excited u.......":
	case "i am excited u!":
	case "i am excited u!!":
	case "i am excited u!!!":
	case "i am excited u!!!!":
	case "i am excited u!!!!!":
	case "i am excited u!!!!!!":
	case "i am excited u!!!!!!!":
	case "i am excited u?":
	case "i am excited u??":
	case "i am excited u???":
	case "i am excited u????":
	case "i am excited u?????":
	case "i am excited u??????":
	case "i am excited u???????":
	case "i am excited":
	case "i am excited u":
	case "i am excited you":
	case "i am excited. you":
	case "i am excited.. you":
	case "i am excited... you":
	case "i am excited.... you":
	case "i am excited..... you":
	case "i am excited...... you":
	case "i am excited....... you":
	case "i am excited! you":
	case "i am excited!! you":
	case "i am excited!!! you":
	case "i am excited!!!! you":
	case "i am excited!!!!! you":
	case "i am excited!!!!!! you":
	case "i am excited!!!!!!! you":
	case "i am excited? you":
	case "i am excited?? you":
	case "i am excited??? you":
	case "i am excited???? you":
	case "i am excited????? you":
	case "i am excited?????? you":
	case "i am excited??????? you":
	case "i am excited you.":
	case "i am excited you..":
	case "i am excited you...":
	case "i am excited you....":
	case "i am excited you.....":
	case "i am excited you......":
	case "i am excited you.......":
	case "i am excited you!":
	case "i am excited you!!":
	case "i am excited you!!!":
	case "i am excited you!!!!":
	case "i am excited you!!!!!":
	case "i am excited you!!!!!!":
	case "i am excited you!!!!!!!":
	case "i am excited you?":
	case "i am excited you??":
	case "i am excited you???":
	case "i am excited you????":
	case "i am excited you?????":
	case "i am excited you??????":
	case "i am excited you???????":
	case "i am excited":
	case "i am excited u":
	case "i am excited you":
	case "i am excited. u?":
	case "i am excited.. u?":
	case "i am excited... u?":
	case "i am excited.... u?":
	case "i am excited..... u?":
	case "i am excited...... u?":
	case "i am excited....... u?":
	case "i am excited! u?":
	case "i am excited!! u?":
	case "i am excited!!! u?":
	case "i am excited!!!! u?":
	case "i am excited!!!!! u?":
	case "i am excited!!!!!! u?":
	case "i am excited!!!!!!! u?":
	case "i am excited? u?":
	case "i am excited?? u?":
	case "i am excited??? u?":
	case "i am excited???? u?":
	case "i am excited????? u?":
	case "i am excited?????? u?":
	case "i am excited??????? u?":
	case "i am excited u.?":
	case "i am excited u..?":
	case "i am excited u...?":
	case "i am excited u....?":
	case "i am excited u.....?":
	case "i am excited u......?":
	case "i am excited u.......?":
	case "i am excited u!?":
	case "i am excited u!!?":
	case "i am excited u!!!?":
	case "i am excited u!!!!?":
	case "i am excited u!!!!!?":
	case "i am excited u!!!!!!?":
	case "i am excited u!!!!!!!?":
	case "i am excited u?":
	case "i am excited u??":
	case "i am excited u???":
	case "i am excited u????":
	case "i am excited u?????":
	case "i am excited u??????":
	case "i am excited u???????":
	case "i am excited":
	case "i am excited u?":
	case "i am excited you?":
	case "i am excited. you?":
	case "i am excited.. you?":
	case "i am excited... you?":
	case "i am excited.... you?":
	case "i am excited..... you?":
	case "i am excited...... you?":
	case "i am excited....... you?":
	case "i am excited! you?":
	case "i am excited!! you?":
	case "i am excited!!! you?":
	case "i am excited!!!! you?":
	case "i am excited!!!!! you?":
	case "i am excited!!!!!! you?":
	case "i am excited!!!!!!! you?":
	case "i am excited? you?":
	case "i am excited?? you?":
	case "i am excited??? you?":
	case "i am excited???? you?":
	case "i am excited????? you?":
	case "i am excited?????? you?":
	case "i am excited??????? you?":
	case "i am excited you.?":
	case "i am excited you..?":
	case "i am excited you...?":
	case "i am excited you....?":
	case "i am excited you.....?":
	case "i am excited you......?":
	case "i am excited you.......?":
	case "i am excited you!?":
	case "i am excited you!!?":
	case "i am excited you!!!?":
	case "i am excited you!!!!?":
	case "i am excited you!!!!!?":
	case "i am excited you!!!!!!":
	case "i am excited you!!!!!!!?":
	case "i am excited you??":
	case "i am excited you???":
	case "i am excited you????":
	case "i am excited you?????":
	case "i am excited you??????":
	case "i am excited you???????":
	case "i am excited you????????":
	case "i am excited??":
	case "i am excited u?":
	case "i am excited you?":
	case "i am excited, u.":
	case "i am excited, u..":
	case "i am excited, u...":
	case "i am excited, u....":
	case "i am excited, u.....":
	case "i am excited, u......":
	case "i am excited, u.......":
	case "i am excited, u!":
	case "i am excited, u!!":
	case "i am excited, u!!!":
	case "i am excited, u!!!!":
	case "i am excited, u!!!!!":
	case "i am excited, u!!!!!!":
	case "i am excited, u!!!!!!!":
	case "i am excited, u?":
	case "i am excited, u??":
	case "i am excited, u???":
	case "i am excited, u????":
	case "i am excited, u?????":
	case "i am excited, u??????":
	case "i am excited, u???????":
	case "i am excited, you.":
	case "i am excited, you..":
	case "i am excited, you...":
	case "i am excited, you....":
	case "i am excited, you.....":
	case "i am excited, you......":
	case "i am excited, you.......":
	case "i am excited, you!":
	case "i am excited, you!!":
	case "i am excited, you!!!":
	case "i am excited, you!!!!":
	case "i am excited, you!!!!!":
	case "i am excited, you!!!!!!":
	case "i am excited, you!!!!!!!":
	case "i am excited, you?":
	case "i am excited, you??":
	case "i am excited, you???":
	case "i am excited, you????":
	case "i am excited, you?????":
	case "i am excited, you??????":
	case "i am excited, you???????":
	case "i am excited, u":
	case "i am excited, you":
	case "i am excited, u.?":
	case "i am excited, u..?":
	case "i am excited, u...?":
	case "i am excited, u....?":
	case "i am excited, u.....?":
	case "i am excited, u......?":
	case "i am excited, u.......?":
	case "i am excited, u!?":
	case "i am excited, u!!?":
	case "i am excited, u!!!?":
	case "i am excited, u!!!!?":
	case "i am excited, u!!!!!?":
	case "i am excited, u!!!!!!?":
	case "i am excited, u!!!!!!!?":
	case "i am excited, u?":
	case "i am excited, u??":
	case "i am excited, u???":
	case "i am excited, u????":
	case "i am excited, u?????":
	case "i am excited, u??????":
	case "i am excited, u???????":
	case "i am excited, u?":
	case "i am excited, you?":
	case "i am excited, you.?":
	case "i am excited, you..?":
	case "i am excited, you...?":
	case "i am excited, you....?":
	case "i am excited, you.....?":
	case "i am excited, you......?":
	case "i am excited, you.......?":
	case "i am excited, you!?":
	case "i am excited, you!!?":
	case "i am excited, you!!!?":
	case "i am excited, you!!!!?":
	case "i am excited, you!!!!!?":
	case "i am excited, you!!!!!!":
	case "i am excited, you!!!!!!!?":
	case "i am excited, you??":
	case "i am excited, you???":
	case "i am excited, you????":
	case "i am excited, you?????":
	case "i am excited, you??????":
	case "i am excited, you???????":
	case "i am excited, you????????":
	case "i am excited, u?":
	case "i am excited, you?":
	case "i am angry.":
	case "i am angry..":
	case "i am angry...":
	case "i am angry....":
	case "i am angry.....":
	case "i am angry......":
	case "i am angry.......":
	case "i am angry!":
	case "i am angry!!":
	case "i am angry!!!":
	case "i am angry!!!!":
	case "i am angry!!!!!":
	case "i am angry!!!!!!":
	case "i am angry!!!!!!!":
	case "i am angry?":
	case "i am angry??":
	case "i am angry???":
	case "i am angry????":
	case "i am angry?????":
	case "i am angry??????":
	case "i am angry???????":
	case "i am angry. u":
	case "i am angry.. u":
	case "i am angry... u":
	case "i am angry.... u":
	case "i am angry..... u":
	case "i am angry...... u":
	case "i am angry....... u":
	case "i am angry! u":
	case "i am angry!! u":
	case "i am angry!!! u":
	case "i am angry!!!! u":
	case "i am angry!!!!! u":
	case "i am angry!!!!!! u":
	case "i am angry!!!!!!! u":
	case "i am angry? u":
	case "i am angry?? u":
	case "i am angry??? u":
	case "i am angry???? u":
	case "i am angry????? u":
	case "i am angry?????? u":
	case "i am angry??????? u":
	case "i am angry u.":
	case "i am angry u..":
	case "i am angry u...":
	case "i am angry u....":
	case "i am angry u.....":
	case "i am angry u......":
	case "i am angry u.......":
	case "i am angry u!":
	case "i am angry u!!":
	case "i am angry u!!!":
	case "i am angry u!!!!":
	case "i am angry u!!!!!":
	case "i am angry u!!!!!!":
	case "i am angry u!!!!!!!":
	case "i am angry u?":
	case "i am angry u??":
	case "i am angry u???":
	case "i am angry u????":
	case "i am angry u?????":
	case "i am angry u??????":
	case "i am angry u???????":
	case "i am angry":
	case "i am angry u":
	case "i am angry you":
	case "i am angry. you":
	case "i am angry.. you":
	case "i am angry... you":
	case "i am angry.... you":
	case "i am angry..... you":
	case "i am angry...... you":
	case "i am angry....... you":
	case "i am angry! you":
	case "i am angry!! you":
	case "i am angry!!! you":
	case "i am angry!!!! you":
	case "i am angry!!!!! you":
	case "i am angry!!!!!! you":
	case "i am angry!!!!!!! you":
	case "i am angry? you":
	case "i am angry?? you":
	case "i am angry??? you":
	case "i am angry???? you":
	case "i am angry????? you":
	case "i am angry?????? you":
	case "i am angry??????? you":
	case "i am angry you.":
	case "i am angry you..":
	case "i am angry you...":
	case "i am angry you....":
	case "i am angry you.....":
	case "i am angry you......":
	case "i am angry you.......":
	case "i am angry you!":
	case "i am angry you!!":
	case "i am angry you!!!":
	case "i am angry you!!!!":
	case "i am angry you!!!!!":
	case "i am angry you!!!!!!":
	case "i am angry you!!!!!!!":
	case "i am angry you?":
	case "i am angry you??":
	case "i am angry you???":
	case "i am angry you????":
	case "i am angry you?????":
	case "i am angry you??????":
	case "i am angry you???????":
	case "i am angry":
	case "i am angry u":
	case "i am angry you":
	case "i am angry. u?":
	case "i am angry.. u?":
	case "i am angry... u?":
	case "i am angry.... u?":
	case "i am angry..... u?":
	case "i am angry...... u?":
	case "i am angry....... u?":
	case "i am angry! u?":
	case "i am angry!! u?":
	case "i am angry!!! u?":
	case "i am angry!!!! u?":
	case "i am angry!!!!! u?":
	case "i am angry!!!!!! u?":
	case "i am angry!!!!!!! u?":
	case "i am angry? u?":
	case "i am angry?? u?":
	case "i am angry??? u?":
	case "i am angry???? u?":
	case "i am angry????? u?":
	case "i am angry?????? u?":
	case "i am angry??????? u?":
	case "i am angry u.?":
	case "i am angry u..?":
	case "i am angry u...?":
	case "i am angry u....?":
	case "i am angry u.....?":
	case "i am angry u......?":
	case "i am angry u.......?":
	case "i am angry u!?":
	case "i am angry u!!?":
	case "i am angry u!!!?":
	case "i am angry u!!!!?":
	case "i am angry u!!!!!?":
	case "i am angry u!!!!!!?":
	case "i am angry u!!!!!!!?":
	case "i am angry u?":
	case "i am angry u??":
	case "i am angry u???":
	case "i am angry u????":
	case "i am angry u?????":
	case "i am angry u??????":
	case "i am angry u???????":
	case "i am angry":
	case "i am angry u?":
	case "i am angry you?":
	case "i am angry. you?":
	case "i am angry.. you?":
	case "i am angry... you?":
	case "i am angry.... you?":
	case "i am angry..... you?":
	case "i am angry...... you?":
	case "i am angry....... you?":
	case "i am angry! you?":
	case "i am angry!! you?":
	case "i am angry!!! you?":
	case "i am angry!!!! you?":
	case "i am angry!!!!! you?":
	case "i am angry!!!!!! you?":
	case "i am angry!!!!!!! you?":
	case "i am angry? you?":
	case "i am angry?? you?":
	case "i am angry??? you?":
	case "i am angry???? you?":
	case "i am angry????? you?":
	case "i am angry?????? you?":
	case "i am angry??????? you?":
	case "i am angry you.?":
	case "i am angry you..?":
	case "i am angry you...?":
	case "i am angry you....?":
	case "i am angry you.....?":
	case "i am angry you......?":
	case "i am angry you.......?":
	case "i am angry you!?":
	case "i am angry you!!?":
	case "i am angry you!!!?":
	case "i am angry you!!!!?":
	case "i am angry you!!!!!?":
	case "i am angry you!!!!!!":
	case "i am angry you!!!!!!!?":
	case "i am angry you??":
	case "i am angry you???":
	case "i am angry you????":
	case "i am angry you?????":
	case "i am angry you??????":
	case "i am angry you???????":
	case "i am angry you????????":
	case "i am angry??":
	case "i am angry u?":
	case "i am angry you?":
	case "i am angry, u.":
	case "i am angry, u..":
	case "i am angry, u...":
	case "i am angry, u....":
	case "i am angry, u.....":
	case "i am angry, u......":
	case "i am angry, u.......":
	case "i am angry, u!":
	case "i am angry, u!!":
	case "i am angry, u!!!":
	case "i am angry, u!!!!":
	case "i am angry, u!!!!!":
	case "i am angry, u!!!!!!":
	case "i am angry, u!!!!!!!":
	case "i am angry, u?":
	case "i am angry, u??":
	case "i am angry, u???":
	case "i am angry, u????":
	case "i am angry, u?????":
	case "i am angry, u??????":
	case "i am angry, u???????":
	case "i am angry, you.":
	case "i am angry, you..":
	case "i am angry, you...":
	case "i am angry, you....":
	case "i am angry, you.....":
	case "i am angry, you......":
	case "i am angry, you.......":
	case "i am angry, you!":
	case "i am angry, you!!":
	case "i am angry, you!!!":
	case "i am angry, you!!!!":
	case "i am angry, you!!!!!":
	case "i am angry, you!!!!!!":
	case "i am angry, you!!!!!!!":
	case "i am angry, you?":
	case "i am angry, you??":
	case "i am angry, you???":
	case "i am angry, you????":
	case "i am angry, you?????":
	case "i am angry, you??????":
	case "i am angry, you???????":
	case "i am angry, u":
	case "i am angry, you":
	case "i am angry, u.?":
	case "i am angry, u..?":
	case "i am angry, u...?":
	case "i am angry, u....?":
	case "i am angry, u.....?":
	case "i am angry, u......?":
	case "i am angry, u.......?":
	case "i am angry, u!?":
	case "i am angry, u!!?":
	case "i am angry, u!!!?":
	case "i am angry, u!!!!?":
	case "i am angry, u!!!!!?":
	case "i am angry, u!!!!!!?":
	case "i am angry, u!!!!!!!?":
	case "i am angry, u?":
	case "i am angry, u??":
	case "i am angry, u???":
	case "i am angry, u????":
	case "i am angry, u?????":
	case "i am angry, u??????":
	case "i am angry, u???????":
	case "i am angry, u?":
	case "i am angry, you?":
	case "i am angry, you.?":
	case "i am angry, you..?":
	case "i am angry, you...?":
	case "i am angry, you....?":
	case "i am angry, you.....?":
	case "i am angry, you......?":
	case "i am angry, you.......?":
	case "i am angry, you!?":
	case "i am angry, you!!?":
	case "i am angry, you!!!?":
	case "i am angry, you!!!!?":
	case "i am angry, you!!!!!?":
	case "i am angry, you!!!!!!":
	case "i am angry, you!!!!!!!?":
	case "i am angry, you??":
	case "i am angry, you???":
	case "i am angry, you????":
	case "i am angry, you?????":
	case "i am angry, you??????":
	case "i am angry, you???????":
	case "i am angry, you????????":
	case "i am angry, u?":
	case "i am angry, you?":
	case "i am mad.":
	case "i am mad..":
	case "i am mad...":
	case "i am mad....":
	case "i am mad.....":
	case "i am mad......":
	case "i am mad.......":
	case "i am mad!":
	case "i am mad!!":
	case "i am mad!!!":
	case "i am mad!!!!":
	case "i am mad!!!!!":
	case "i am mad!!!!!!":
	case "i am mad!!!!!!!":
	case "i am mad?":
	case "i am mad??":
	case "i am mad???":
	case "i am mad????":
	case "i am mad?????":
	case "i am mad??????":
	case "i am mad???????":
	case "i am mad. u":
	case "i am mad.. u":
	case "i am mad... u":
	case "i am mad.... u":
	case "i am mad..... u":
	case "i am mad...... u":
	case "i am mad....... u":
	case "i am mad! u":
	case "i am mad!! u":
	case "i am mad!!! u":
	case "i am mad!!!! u":
	case "i am mad!!!!! u":
	case "i am mad!!!!!! u":
	case "i am mad!!!!!!! u":
	case "i am mad? u":
	case "i am mad?? u":
	case "i am mad??? u":
	case "i am mad???? u":
	case "i am mad????? u":
	case "i am mad?????? u":
	case "i am mad??????? u":
	case "i am mad u.":
	case "i am mad u..":
	case "i am mad u...":
	case "i am mad u....":
	case "i am mad u.....":
	case "i am mad u......":
	case "i am mad u.......":
	case "i am mad u!":
	case "i am mad u!!":
	case "i am mad u!!!":
	case "i am mad u!!!!":
	case "i am mad u!!!!!":
	case "i am mad u!!!!!!":
	case "i am mad u!!!!!!!":
	case "i am mad u?":
	case "i am mad u??":
	case "i am mad u???":
	case "i am mad u????":
	case "i am mad u?????":
	case "i am mad u??????":
	case "i am mad u???????":
	case "i am mad":
	case "i am mad u":
	case "i am mad you":
	case "i am mad. you":
	case "i am mad.. you":
	case "i am mad... you":
	case "i am mad.... you":
	case "i am mad..... you":
	case "i am mad...... you":
	case "i am mad....... you":
	case "i am mad! you":
	case "i am mad!! you":
	case "i am mad!!! you":
	case "i am mad!!!! you":
	case "i am mad!!!!! you":
	case "i am mad!!!!!! you":
	case "i am mad!!!!!!! you":
	case "i am mad? you":
	case "i am mad?? you":
	case "i am mad??? you":
	case "i am mad???? you":
	case "i am mad????? you":
	case "i am mad?????? you":
	case "i am mad??????? you":
	case "i am mad you.":
	case "i am mad you..":
	case "i am mad you...":
	case "i am mad you....":
	case "i am mad you.....":
	case "i am mad you......":
	case "i am mad you.......":
	case "i am mad you!":
	case "i am mad you!!":
	case "i am mad you!!!":
	case "i am mad you!!!!":
	case "i am mad you!!!!!":
	case "i am mad you!!!!!!":
	case "i am mad you!!!!!!!":
	case "i am mad you?":
	case "i am mad you??":
	case "i am mad you???":
	case "i am mad you????":
	case "i am mad you?????":
	case "i am mad you??????":
	case "i am mad you???????":
	case "i am mad":
	case "i am mad u":
	case "i am mad you":
	case "i am mad. u?":
	case "i am mad.. u?":
	case "i am mad... u?":
	case "i am mad.... u?":
	case "i am mad..... u?":
	case "i am mad...... u?":
	case "i am mad....... u?":
	case "i am mad! u?":
	case "i am mad!! u?":
	case "i am mad!!! u?":
	case "i am mad!!!! u?":
	case "i am mad!!!!! u?":
	case "i am mad!!!!!! u?":
	case "i am mad!!!!!!! u?":
	case "i am mad? u?":
	case "i am mad?? u?":
	case "i am mad??? u?":
	case "i am mad???? u?":
	case "i am mad????? u?":
	case "i am mad?????? u?":
	case "i am mad??????? u?":
	case "i am mad u.?":
	case "i am mad u..?":
	case "i am mad u...?":
	case "i am mad u....?":
	case "i am mad u.....?":
	case "i am mad u......?":
	case "i am mad u.......?":
	case "i am mad u!?":
	case "i am mad u!!?":
	case "i am mad u!!!?":
	case "i am mad u!!!!?":
	case "i am mad u!!!!!?":
	case "i am mad u!!!!!!?":
	case "i am mad u!!!!!!!?":
	case "i am mad u?":
	case "i am mad u??":
	case "i am mad u???":
	case "i am mad u????":
	case "i am mad u?????":
	case "i am mad u??????":
	case "i am mad u???????":
	case "i am mad":
	case "i am mad u?":
	case "i am mad you?":
	case "i am mad. you?":
	case "i am mad.. you?":
	case "i am mad... you?":
	case "i am mad.... you?":
	case "i am mad..... you?":
	case "i am mad...... you?":
	case "i am mad....... you?":
	case "i am mad! you?":
	case "i am mad!! you?":
	case "i am mad!!! you?":
	case "i am mad!!!! you?":
	case "i am mad!!!!! you?":
	case "i am mad!!!!!! you?":
	case "i am mad!!!!!!! you?":
	case "i am mad? you?":
	case "i am mad?? you?":
	case "i am mad??? you?":
	case "i am mad???? you?":
	case "i am mad????? you?":
	case "i am mad?????? you?":
	case "i am mad??????? you?":
	case "i am mad you.?":
	case "i am mad you..?":
	case "i am mad you...?":
	case "i am mad you....?":
	case "i am mad you.....?":
	case "i am mad you......?":
	case "i am mad you.......?":
	case "i am mad you!?":
	case "i am mad you!!?":
	case "i am mad you!!!?":
	case "i am mad you!!!!?":
	case "i am mad you!!!!!?":
	case "i am mad you!!!!!!":
	case "i am mad you!!!!!!!?":
	case "i am mad you??":
	case "i am mad you???":
	case "i am mad you????":
	case "i am mad you?????":
	case "i am mad you??????":
	case "i am mad you???????":
	case "i am mad you????????":
	case "i am mad??":
	case "i am mad u?":
	case "i am mad you?":
	case "i am mad, u.":
	case "i am mad, u..":
	case "i am mad, u...":
	case "i am mad, u....":
	case "i am mad, u.....":
	case "i am mad, u......":
	case "i am mad, u.......":
	case "i am mad, u!":
	case "i am mad, u!!":
	case "i am mad, u!!!":
	case "i am mad, u!!!!":
	case "i am mad, u!!!!!":
	case "i am mad, u!!!!!!":
	case "i am mad, u!!!!!!!":
	case "i am mad, u?":
	case "i am mad, u??":
	case "i am mad, u???":
	case "i am mad, u????":
	case "i am mad, u?????":
	case "i am mad, u??????":
	case "i am mad, u???????":
	case "i am mad, you.":
	case "i am mad, you..":
	case "i am mad, you...":
	case "i am mad, you....":
	case "i am mad, you.....":
	case "i am mad, you......":
	case "i am mad, you.......":
	case "i am mad, you!":
	case "i am mad, you!!":
	case "i am mad, you!!!":
	case "i am mad, you!!!!":
	case "i am mad, you!!!!!":
	case "i am mad, you!!!!!!":
	case "i am mad, you!!!!!!!":
	case "i am mad, you?":
	case "i am mad, you??":
	case "i am mad, you???":
	case "i am mad, you????":
	case "i am mad, you?????":
	case "i am mad, you??????":
	case "i am mad, you???????":
	case "i am mad, u":
	case "i am mad, you":
	case "i am mad, u.?":
	case "i am mad, u..?":
	case "i am mad, u...?":
	case "i am mad, u....?":
	case "i am mad, u.....?":
	case "i am mad, u......?":
	case "i am mad, u.......?":
	case "i am mad, u!?":
	case "i am mad, u!!?":
	case "i am mad, u!!!?":
	case "i am mad, u!!!!?":
	case "i am mad, u!!!!!?":
	case "i am mad, u!!!!!!?":
	case "i am mad, u!!!!!!!?":
	case "i am mad, u?":
	case "i am mad, u??":
	case "i am mad, u???":
	case "i am mad, u????":
	case "i am mad, u?????":
	case "i am mad, u??????":
	case "i am mad, u???????":
	case "i am mad, u?":
	case "i am mad, you?":
	case "i am mad, you.?":
	case "i am mad, you..?":
	case "i am mad, you...?":
	case "i am mad, you....?":
	case "i am mad, you.....?":
	case "i am mad, you......?":
	case "i am mad, you.......?":
	case "i am mad, you!?":
	case "i am mad, you!!?":
	case "i am mad, you!!!?":
	case "i am mad, you!!!!?":
	case "i am mad, you!!!!!?":
	case "i am mad, you!!!!!!":
	case "i am mad, you!!!!!!!?":
	case "i am mad, you??":
	case "i am mad, you???":
	case "i am mad, you????":
	case "i am mad, you?????":
	case "i am mad, you??????":
	case "i am mad, you???????":
	case "i am mad, you????????":
	case "i am mad, u?":
	case "i am mad, you?":	
	case "i'm good.":
	case "i'm good..":
	case "i'm good...":
	case "i'm good....":
	case "i'm good.....":
	case "i'm good......":
	case "i'm good.......":
	case "i'm good!":
	case "i'm good!!":
	case "i'm good!!!":
	case "i'm good!!!!":
	case "i'm good!!!!!":
	case "i'm good!!!!!!":
	case "i'm good!!!!!!!":
	case "i'm good?":
	case "i'm good??":
	case "i'm good???":
	case "i'm good????":
	case "i'm good?????":
	case "i'm good??????":
	case "i'm good???????":
	case "i'm good. u":
	case "i'm good.. u":
	case "i'm good... u":
	case "i'm good.... u":
	case "i'm good..... u":
	case "i'm good...... u":
	case "i'm good....... u":
	case "i'm good! u":
	case "i'm good!! u":
	case "i'm good!!! u":
	case "i'm good!!!! u":
	case "i'm good!!!!! u":
	case "i'm good!!!!!! u":
	case "i'm good!!!!!!! u":
	case "i'm good? u":
	case "i'm good?? u":
	case "i'm good??? u":
	case "i'm good???? u":
	case "i'm good????? u":
	case "i'm good?????? u":
	case "i'm good??????? u":
	case "i'm good u.":
	case "i'm good u..":
	case "i'm good u...":
	case "i'm good u....":
	case "i'm good u.....":
	case "i'm good u......":
	case "i'm good u.......":
	case "i'm good u!":
	case "i'm good u!!":
	case "i'm good u!!!":
	case "i'm good u!!!!":
	case "i'm good u!!!!!":
	case "i'm good u!!!!!!":
	case "i'm good u!!!!!!!":
	case "i'm good u?":
	case "i'm good u??":
	case "i'm good u???":
	case "i'm good u????":
	case "i'm good u?????":
	case "i'm good u??????":
	case "i'm good u???????":
	case "i'm good":
	case "i'm good u":
	case "i'm good you":
	case "i'm good. you":
	case "i'm good.. you":
	case "i'm good... you":
	case "i'm good.... you":
	case "i'm good..... you":
	case "i'm good...... you":
	case "i'm good....... you":
	case "i'm good! you":
	case "i'm good!! you":
	case "i'm good!!! you":
	case "i'm good!!!! you":
	case "i'm good!!!!! you":
	case "i'm good!!!!!! you":
	case "i'm good!!!!!!! you":
	case "i'm good? you":
	case "i'm good?? you":
	case "i'm good??? you":
	case "i'm good???? you":
	case "i'm good????? you":
	case "i'm good?????? you":
	case "i'm good??????? you":
	case "i'm good you.":
	case "i'm good you..":
	case "i'm good you...":
	case "i'm good you....":
	case "i'm good you.....":
	case "i'm good you......":
	case "i'm good you.......":
	case "i'm good you!":
	case "i'm good you!!":
	case "i'm good you!!!":
	case "i'm good you!!!!":
	case "i'm good you!!!!!":
	case "i'm good you!!!!!!":
	case "i'm good you!!!!!!!":
	case "i'm good you?":
	case "i'm good you??":
	case "i'm good you???":
	case "i'm good you????":
	case "i'm good you?????":
	case "i'm good you??????":
	case "i'm good you???????":
	case "i'm good":
	case "i'm good u":
	case "i'm good you":
	case "i'm good. u?":
	case "i'm good.. u?":
	case "i'm good... u?":
	case "i'm good.... u?":
	case "i'm good..... u?":
	case "i'm good...... u?":
	case "i'm good....... u?":
	case "i'm good! u?":
	case "i'm good!! u?":
	case "i'm good!!! u?":
	case "i'm good!!!! u?":
	case "i'm good!!!!! u?":
	case "i'm good!!!!!! u?":
	case "i'm good!!!!!!! u?":
	case "i'm good? u?":
	case "i'm good?? u?":
	case "i'm good??? u?":
	case "i'm good???? u?":
	case "i'm good????? u?":
	case "i'm good?????? u?":
	case "i'm good??????? u?":
	case "i'm good u.?":
	case "i'm good u..?":
	case "i'm good u...?":
	case "i'm good u....?":
	case "i'm good u.....?":
	case "i'm good u......?":
	case "i'm good u.......?":
	case "i'm good u!?":
	case "i'm good u!!?":
	case "i'm good u!!!?":
	case "i'm good u!!!!?":
	case "i'm good u!!!!!?":
	case "i'm good u!!!!!!?":
	case "i'm good u!!!!!!!?":
	case "i'm good u?":
	case "i'm good u??":
	case "i'm good u???":
	case "i'm good u????":
	case "i'm good u?????":
	case "i'm good u??????":
	case "i'm good u???????":
	case "i'm good":
	case "i'm good u?":
	case "i'm good you?":
	case "i'm good. you?":
	case "i'm good.. you?":
	case "i'm good... you?":
	case "i'm good.... you?":
	case "i'm good..... you?":
	case "i'm good...... you?":
	case "i'm good....... you?":
	case "i'm good! you?":
	case "i'm good!! you?":
	case "i'm good!!! you?":
	case "i'm good!!!! you?":
	case "i'm good!!!!! you?":
	case "i'm good!!!!!! you?":
	case "i'm good!!!!!!! you?":
	case "i'm good? you?":
	case "i'm good?? you?":
	case "i'm good??? you?":
	case "i'm good???? you?":
	case "i'm good????? you?":
	case "i'm good?????? you?":
	case "i'm good??????? you?":
	case "i'm good you.?":
	case "i'm good you..?":
	case "i'm good you...?":
	case "i'm good you....?":
	case "i'm good you.....?":
	case "i'm good you......?":
	case "i'm good you.......?":
	case "i'm good you!?":
	case "i'm good you!!?":
	case "i'm good you!!!?":
	case "i'm good you!!!!?":
	case "i'm good you!!!!!?":
	case "i'm good you!!!!!!":
	case "i'm good you!!!!!!!?":
	case "i'm good you??":
	case "i'm good you???":
	case "i'm good you????":
	case "i'm good you?????":
	case "i'm good you??????":
	case "i'm good you???????":
	case "i'm good you????????":
	case "i'm good??":
	case "i'm good u?":
	case "i'm good you?":
	case "i'm good, u.":
	case "i'm good, u..":
	case "i'm good, u...":
	case "i'm good, u....":
	case "i'm good, u.....":
	case "i'm good, u......":
	case "i'm good, u.......":
	case "i'm good, u!":
	case "i'm good, u!!":
	case "i'm good, u!!!":
	case "i'm good, u!!!!":
	case "i'm good, u!!!!!":
	case "i'm good, u!!!!!!":
	case "i'm good, u!!!!!!!":
	case "i'm good, u?":
	case "i'm good, u??":
	case "i'm good, u???":
	case "i'm good, u????":
	case "i'm good, u?????":
	case "i'm good, u??????":
	case "i'm good, u???????":
	case "i'm good, you.":
	case "i'm good, you..":
	case "i'm good, you...":
	case "i'm good, you....":
	case "i'm good, you.....":
	case "i'm good, you......":
	case "i'm good, you.......":
	case "i'm good, you!":
	case "i'm good, you!!":
	case "i'm good, you!!!":
	case "i'm good, you!!!!":
	case "i'm good, you!!!!!":
	case "i'm good, you!!!!!!":
	case "i'm good, you!!!!!!!":
	case "i'm good, you?":
	case "i'm good, you??":
	case "i'm good, you???":
	case "i'm good, you????":
	case "i'm good, you?????":
	case "i'm good, you??????":
	case "i'm good, you???????":
	case "i'm good, u":
	case "i'm good, you":
	case "i'm good, u.?":
	case "i'm good, u..?":
	case "i'm good, u...?":
	case "i'm good, u....?":
	case "i'm good, u.....?":
	case "i'm good, u......?":
	case "i'm good, u.......?":
	case "i'm good, u!?":
	case "i'm good, u!!?":
	case "i'm good, u!!!?":
	case "i'm good, u!!!!?":
	case "i'm good, u!!!!!?":
	case "i'm good, u!!!!!!?":
	case "i'm good, u!!!!!!!?":
	case "i'm good, u?":
	case "i'm good, u??":
	case "i'm good, u???":
	case "i'm good, u????":
	case "i'm good, u?????":
	case "i'm good, u??????":
	case "i'm good, u???????":
	case "i'm good, u?":
	case "i'm good, you?":
	case "i'm good, you.?":
	case "i'm good, you..?":
	case "i'm good, you...?":
	case "i'm good, you....?":
	case "i'm good, you.....?":
	case "i'm good, you......?":
	case "i'm good, you.......?":
	case "i'm good, you!?":
	case "i'm good, you!!?":
	case "i'm good, you!!!?":
	case "i'm good, you!!!!?":
	case "i'm good, you!!!!!?":
	case "i'm good, you!!!!!!":
	case "i'm good, you!!!!!!!?":
	case "i'm good, you??":
	case "i'm good, you???":
	case "i'm good, you????":
	case "i'm good, you?????":
	case "i'm good, you??????":
	case "i'm good, you???????":
	case "i'm good, you????????":
	case "i'm good, u?":
	case "i'm sad.":
	case "i'm sad..":
	case "i'm sad...":
	case "i'm sad....":
	case "i'm sad.....":
	case "i'm sad......":
	case "i'm sad.......":
	case "i'm sad!":
	case "i'm sad!!":
	case "i'm sad!!!":
	case "i'm sad!!!!":
	case "i'm sad!!!!!":
	case "i'm sad!!!!!!":
	case "i'm sad!!!!!!!":
	case "i'm sad?":
	case "i'm sad??":
	case "i'm sad???":
	case "i'm sad????":
	case "i'm sad?????":
	case "i'm sad??????":
	case "i'm sad???????":
	case "i'm sad. u":
	case "i'm sad.. u":
	case "i'm sad... u":
	case "i'm sad.... u":
	case "i'm sad..... u":
	case "i'm sad...... u":
	case "i'm sad....... u":
	case "i'm sad! u":
	case "i'm sad!! u":
	case "i'm sad!!! u":
	case "i'm sad!!!! u":
	case "i'm sad!!!!! u":
	case "i'm sad!!!!!! u":
	case "i'm sad!!!!!!! u":
	case "i'm sad? u":
	case "i'm sad?? u":
	case "i'm sad??? u":
	case "i'm sad???? u":
	case "i'm sad????? u":
	case "i'm sad?????? u":
	case "i'm sad??????? u":
	case "i'm sad u.":
	case "i'm sad u..":
	case "i'm sad u...":
	case "i'm sad u....":
	case "i'm sad u.....":
	case "i'm sad u......":
	case "i'm sad u.......":
	case "i'm sad u!":
	case "i'm sad u!!":
	case "i'm sad u!!!":
	case "i'm sad u!!!!":
	case "i'm sad u!!!!!":
	case "i'm sad u!!!!!!":
	case "i'm sad u!!!!!!!":
	case "i'm sad u?":
	case "i'm sad u??":
	case "i'm sad u???":
	case "i'm sad u????":
	case "i'm sad u?????":
	case "i'm sad u??????":
	case "i'm sad u???????":
	case "i'm sad":
	case "i'm sad u":
	case "i'm sad you":
	case "i'm sad. you":
	case "i'm sad.. you":
	case "i'm sad... you":
	case "i'm sad.... you":
	case "i'm sad..... you":
	case "i'm sad...... you":
	case "i'm sad....... you":
	case "i'm sad! you":
	case "i'm sad!! you":
	case "i'm sad!!! you":
	case "i'm sad!!!! you":
	case "i'm sad!!!!! you":
	case "i'm sad!!!!!! you":
	case "i'm sad!!!!!!! you":
	case "i'm sad? you":
	case "i'm sad?? you":
	case "i'm sad??? you":
	case "i'm sad???? you":
	case "i'm sad????? you":
	case "i'm sad?????? you":
	case "i'm sad??????? you":
	case "i'm sad you.":
	case "i'm sad you..":
	case "i'm sad you...":
	case "i'm sad you....":
	case "i'm sad you.....":
	case "i'm sad you......":
	case "i'm sad you.......":
	case "i'm sad you!":
	case "i'm sad you!!":
	case "i'm sad you!!!":
	case "i'm sad you!!!!":
	case "i'm sad you!!!!!":
	case "i'm sad you!!!!!!":
	case "i'm sad you!!!!!!!":
	case "i'm sad you?":
	case "i'm sad you??":
	case "i'm sad you???":
	case "i'm sad you????":
	case "i'm sad you?????":
	case "i'm sad you??????":
	case "i'm sad you???????":
	case "i'm sad":
	case "i'm sad u":
	case "i'm sad you":
	case "i'm sad. u?":
	case "i'm sad.. u?":
	case "i'm sad... u?":
	case "i'm sad.... u?":
	case "i'm sad..... u?":
	case "i'm sad...... u?":
	case "i'm sad....... u?":
	case "i'm sad! u?":
	case "i'm sad!! u?":
	case "i'm sad!!! u?":
	case "i'm sad!!!! u?":
	case "i'm sad!!!!! u?":
	case "i'm sad!!!!!! u?":
	case "i'm sad!!!!!!! u?":
	case "i'm sad? u?":
	case "i'm sad?? u?":
	case "i'm sad??? u?":
	case "i'm sad???? u?":
	case "i'm sad????? u?":
	case "i'm sad?????? u?":
	case "i'm sad??????? u?":
	case "i'm sad u.?":
	case "i'm sad u..?":
	case "i'm sad u...?":
	case "i'm sad u....?":
	case "i'm sad u.....?":
	case "i'm sad u......?":
	case "i'm sad u.......?":
	case "i'm sad u!?":
	case "i'm sad u!!?":
	case "i'm sad u!!!?":
	case "i'm sad u!!!!?":
	case "i'm sad u!!!!!?":
	case "i'm sad u!!!!!!?":
	case "i'm sad u!!!!!!!?":
	case "i'm sad u?":
	case "i'm sad u??":
	case "i'm sad u???":
	case "i'm sad u????":
	case "i'm sad u?????":
	case "i'm sad u??????":
	case "i'm sad u???????":
	case "i'm sad":
	case "i'm sad u?":
	case "i'm sad you?":
	case "i'm sad. you?":
	case "i'm sad.. you?":
	case "i'm sad... you?":
	case "i'm sad.... you?":
	case "i'm sad..... you?":
	case "i'm sad...... you?":
	case "i'm sad....... you?":
	case "i'm sad! you?":
	case "i'm sad!! you?":
	case "i'm sad!!! you?":
	case "i'm sad!!!! you?":
	case "i'm sad!!!!! you?":
	case "i'm sad!!!!!! you?":
	case "i'm sad!!!!!!! you?":
	case "i'm sad? you?":
	case "i'm sad?? you?":
	case "i'm sad??? you?":
	case "i'm sad???? you?":
	case "i'm sad????? you?":
	case "i'm sad?????? you?":
	case "i'm sad??????? you?":
	case "i'm sad you.?":
	case "i'm sad you..?":
	case "i'm sad you...?":
	case "i'm sad you....?":
	case "i'm sad you.....?":
	case "i'm sad you......?":
	case "i'm sad you.......?":
	case "i'm sad you!?":
	case "i'm sad you!!?":
	case "i'm sad you!!!?":
	case "i'm sad you!!!!?":
	case "i'm sad you!!!!!?":
	case "i'm sad you!!!!!!":
	case "i'm sad you!!!!!!!?":
	case "i'm sad you??":
	case "i'm sad you???":
	case "i'm sad you????":
	case "i'm sad you?????":
	case "i'm sad you??????":
	case "i'm sad you???????":
	case "i'm sad you????????":
	case "i'm sad??":
	case "i'm sad u?":
	case "i'm sad you?":
	case "i'm sad, u.":
	case "i'm sad, u..":
	case "i'm sad, u...":
	case "i'm sad, u....":
	case "i'm sad, u.....":
	case "i'm sad, u......":
	case "i'm sad, u.......":
	case "i'm sad, u!":
	case "i'm sad, u!!":
	case "i'm sad, u!!!":
	case "i'm sad, u!!!!":
	case "i'm sad, u!!!!!":
	case "i'm sad, u!!!!!!":
	case "i'm sad, u!!!!!!!":
	case "i'm sad, u?":
	case "i'm sad, u??":
	case "i'm sad, u???":
	case "i'm sad, u????":
	case "i'm sad, u?????":
	case "i'm sad, u??????":
	case "i'm sad, u???????":
	case "i'm sad, you.":
	case "i'm sad, you..":
	case "i'm sad, you...":
	case "i'm sad, you....":
	case "i'm sad, you.....":
	case "i'm sad, you......":
	case "i'm sad, you.......":
	case "i'm sad, you!":
	case "i'm sad, you!!":
	case "i'm sad, you!!!":
	case "i'm sad, you!!!!":
	case "i'm sad, you!!!!!":
	case "i'm sad, you!!!!!!":
	case "i'm sad, you!!!!!!!":
	case "i'm sad, you?":
	case "i'm sad, you??":
	case "i'm sad, you???":
	case "i'm sad, you????":
	case "i'm sad, you?????":
	case "i'm sad, you??????":
	case "i'm sad, you???????":
	case "i'm sad, u":
	case "i'm sad, you":
	case "i'm sad, u.?":
	case "i'm sad, u..?":
	case "i'm sad, u...?":
	case "i'm sad, u....?":
	case "i'm sad, u.....?":
	case "i'm sad, u......?":
	case "i'm sad, u.......?":
	case "i'm sad, u!?":
	case "i'm sad, u!!?":
	case "i'm sad, u!!!?":
	case "i'm sad, u!!!!?":
	case "i'm sad, u!!!!!?":
	case "i'm sad, u!!!!!!?":
	case "i'm sad, u!!!!!!!?":
	case "i'm sad, u?":
	case "i'm sad, u??":
	case "i'm sad, u???":
	case "i'm sad, u????":
	case "i'm sad, u?????":
	case "i'm sad, u??????":
	case "i'm sad, u???????":
	case "i'm sad, u?":
	case "i'm sad, you?":
	case "i'm sad, you.?":
	case "i'm sad, you..?":
	case "i'm sad, you...?":
	case "i'm sad, you....?":
	case "i'm sad, you.....?":
	case "i'm sad, you......?":
	case "i'm sad, you.......?":
	case "i'm sad, you!?":
	case "i'm sad, you!!?":
	case "i'm sad, you!!!?":
	case "i'm sad, you!!!!?":
	case "i'm sad, you!!!!!?":
	case "i'm sad, you!!!!!!":
	case "i'm sad, you!!!!!!!?":
	case "i'm sad, you??":
	case "i'm sad, you???":
	case "i'm sad, you????":
	case "i'm sad, you?????":
	case "i'm sad, you??????":
	case "i'm sad, you???????":
	case "i'm sad, you????????":
	case "i'm sad, u?":
	case "i'm sad, you?":
	case "i'm excited.":
	case "i'm excited..":
	case "i'm excited...":
	case "i'm excited....":
	case "i'm excited.....":
	case "i'm excited......":
	case "i'm excited.......":
	case "i'm excited!":
	case "i'm excited!!":
	case "i'm excited!!!":
	case "i'm excited!!!!":
	case "i'm excited!!!!!":
	case "i'm excited!!!!!!":
	case "i'm excited!!!!!!!":
	case "i'm excited?":
	case "i'm excited??":
	case "i'm excited???":
	case "i'm excited????":
	case "i'm excited?????":
	case "i'm excited??????":
	case "i'm excited???????":
	case "i'm excited. u":
	case "i'm excited.. u":
	case "i'm excited... u":
	case "i'm excited.... u":
	case "i'm excited..... u":
	case "i'm excited...... u":
	case "i'm excited....... u":
	case "i'm excited! u":
	case "i'm excited!! u":
	case "i'm excited!!! u":
	case "i'm excited!!!! u":
	case "i'm excited!!!!! u":
	case "i'm excited!!!!!! u":
	case "i'm excited!!!!!!! u":
	case "i'm excited? u":
	case "i'm excited?? u":
	case "i'm excited??? u":
	case "i'm excited???? u":
	case "i'm excited????? u":
	case "i'm excited?????? u":
	case "i'm excited??????? u":
	case "i'm excited u.":
	case "i'm excited u..":
	case "i'm excited u...":
	case "i'm excited u....":
	case "i'm excited u.....":
	case "i'm excited u......":
	case "i'm excited u.......":
	case "i'm excited u!":
	case "i'm excited u!!":
	case "i'm excited u!!!":
	case "i'm excited u!!!!":
	case "i'm excited u!!!!!":
	case "i'm excited u!!!!!!":
	case "i'm excited u!!!!!!!":
	case "i'm excited u?":
	case "i'm excited u??":
	case "i'm excited u???":
	case "i'm excited u????":
	case "i'm excited u?????":
	case "i'm excited u??????":
	case "i'm excited u???????":
	case "i'm excited":
	case "i'm excited u":
	case "i'm excited you":
	case "i'm excited. you":
	case "i'm excited.. you":
	case "i'm excited... you":
	case "i'm excited.... you":
	case "i'm excited..... you":
	case "i'm excited...... you":
	case "i'm excited....... you":
	case "i'm excited! you":
	case "i'm excited!! you":
	case "i'm excited!!! you":
	case "i'm excited!!!! you":
	case "i'm excited!!!!! you":
	case "i'm excited!!!!!! you":
	case "i'm excited!!!!!!! you":
	case "i'm excited? you":
	case "i'm excited?? you":
	case "i'm excited??? you":
	case "i'm excited???? you":
	case "i'm excited????? you":
	case "i'm excited?????? you":
	case "i'm excited??????? you":
	case "i'm excited you.":
	case "i'm excited you..":
	case "i'm excited you...":
	case "i'm excited you....":
	case "i'm excited you.....":
	case "i'm excited you......":
	case "i'm excited you.......":
	case "i'm excited you!":
	case "i'm excited you!!":
	case "i'm excited you!!!":
	case "i'm excited you!!!!":
	case "i'm excited you!!!!!":
	case "i'm excited you!!!!!!":
	case "i'm excited you!!!!!!!":
	case "i'm excited you?":
	case "i'm excited you??":
	case "i'm excited you???":
	case "i'm excited you????":
	case "i'm excited you?????":
	case "i'm excited you??????":
	case "i'm excited you???????":
	case "i'm excited":
	case "i'm excited u":
	case "i'm excited you":
	case "i'm excited. u?":
	case "i'm excited.. u?":
	case "i'm excited... u?":
	case "i'm excited.... u?":
	case "i'm excited..... u?":
	case "i'm excited...... u?":
	case "i'm excited....... u?":
	case "i'm excited! u?":
	case "i'm excited!! u?":
	case "i'm excited!!! u?":
	case "i'm excited!!!! u?":
	case "i'm excited!!!!! u?":
	case "i'm excited!!!!!! u?":
	case "i'm excited!!!!!!! u?":
	case "i'm excited? u?":
	case "i'm excited?? u?":
	case "i'm excited??? u?":
	case "i'm excited???? u?":
	case "i'm excited????? u?":
	case "i'm excited?????? u?":
	case "i'm excited??????? u?":
	case "i'm excited u.?":
	case "i'm excited u..?":
	case "i'm excited u...?":
	case "i'm excited u....?":
	case "i'm excited u.....?":
	case "i'm excited u......?":
	case "i'm excited u.......?":
	case "i'm excited u!?":
	case "i'm excited u!!?":
	case "i'm excited u!!!?":
	case "i'm excited u!!!!?":
	case "i'm excited u!!!!!?":
	case "i'm excited u!!!!!!?":
	case "i'm excited u!!!!!!!?":
	case "i'm excited u?":
	case "i'm excited u??":
	case "i'm excited u???":
	case "i'm excited u????":
	case "i'm excited u?????":
	case "i'm excited u??????":
	case "i'm excited u???????":
	case "i'm excited":
	case "i'm excited u?":
	case "i'm excited you?":
	case "i'm excited. you?":
	case "i'm excited.. you?":
	case "i'm excited... you?":
	case "i'm excited.... you?":
	case "i'm excited..... you?":
	case "i'm excited...... you?":
	case "i'm excited....... you?":
	case "i'm excited! you?":
	case "i'm excited!! you?":
	case "i'm excited!!! you?":
	case "i'm excited!!!! you?":
	case "i'm excited!!!!! you?":
	case "i'm excited!!!!!! you?":
	case "i'm excited!!!!!!! you?":
	case "i'm excited? you?":
	case "i'm excited?? you?":
	case "i'm excited??? you?":
	case "i'm excited???? you?":
	case "i'm excited????? you?":
	case "i'm excited?????? you?":
	case "i'm excited??????? you?":
	case "i'm excited you.?":
	case "i'm excited you..?":
	case "i'm excited you...?":
	case "i'm excited you....?":
	case "i'm excited you.....?":
	case "i'm excited you......?":
	case "i'm excited you.......?":
	case "i'm excited you!?":
	case "i'm excited you!!?":
	case "i'm excited you!!!?":
	case "i'm excited you!!!!?":
	case "i'm excited you!!!!!?":
	case "i'm excited you!!!!!!":
	case "i'm excited you!!!!!!!?":
	case "i'm excited you??":
	case "i'm excited you???":
	case "i'm excited you????":
	case "i'm excited you?????":
	case "i'm excited you??????":
	case "i'm excited you???????":
	case "i'm excited you????????":
	case "i'm excited??":
	case "i'm excited u?":
	case "i'm excited you?":
	case "i'm excited, u.":
	case "i'm excited, u..":
	case "i'm excited, u...":
	case "i'm excited, u....":
	case "i'm excited, u.....":
	case "i'm excited, u......":
	case "i'm excited, u.......":
	case "i'm excited, u!":
	case "i'm excited, u!!":
	case "i'm excited, u!!!":
	case "i'm excited, u!!!!":
	case "i'm excited, u!!!!!":
	case "i'm excited, u!!!!!!":
	case "i'm excited, u!!!!!!!":
	case "i'm excited, u?":
	case "i'm excited, u??":
	case "i'm excited, u???":
	case "i'm excited, u????":
	case "i'm excited, u?????":
	case "i'm excited, u??????":
	case "i'm excited, u???????":
	case "i'm excited, you.":
	case "i'm excited, you..":
	case "i'm excited, you...":
	case "i'm excited, you....":
	case "i'm excited, you.....":
	case "i'm excited, you......":
	case "i'm excited, you.......":
	case "i'm excited, you!":
	case "i'm excited, you!!":
	case "i'm excited, you!!!":
	case "i'm excited, you!!!!":
	case "i'm excited, you!!!!!":
	case "i'm excited, you!!!!!!":
	case "i'm excited, you!!!!!!!":
	case "i'm excited, you?":
	case "i'm excited, you??":
	case "i'm excited, you???":
	case "i'm excited, you????":
	case "i'm excited, you?????":
	case "i'm excited, you??????":
	case "i'm excited, you???????":
	case "i'm excited, u":
	case "i'm excited, you":
	case "i'm excited, u.?":
	case "i'm excited, u..?":
	case "i'm excited, u...?":
	case "i'm excited, u....?":
	case "i'm excited, u.....?":
	case "i'm excited, u......?":
	case "i'm excited, u.......?":
	case "i'm excited, u!?":
	case "i'm excited, u!!?":
	case "i'm excited, u!!!?":
	case "i'm excited, u!!!!?":
	case "i'm excited, u!!!!!?":
	case "i'm excited, u!!!!!!?":
	case "i'm excited, u!!!!!!!?":
	case "i'm excited, u?":
	case "i'm excited, u??":
	case "i'm excited, u???":
	case "i'm excited, u????":
	case "i'm excited, u?????":
	case "i'm excited, u??????":
	case "i'm excited, u???????":
	case "i'm excited, u?":
	case "i'm excited, you?":
	case "i'm excited, you.?":
	case "i'm excited, you..?":
	case "i'm excited, you...?":
	case "i'm excited, you....?":
	case "i'm excited, you.....?":
	case "i'm excited, you......?":
	case "i'm excited, you.......?":
	case "i'm excited, you!?":
	case "i'm excited, you!!?":
	case "i'm excited, you!!!?":
	case "i'm excited, you!!!!?":
	case "i'm excited, you!!!!!?":
	case "i'm excited, you!!!!!!":
	case "i'm excited, you!!!!!!!?":
	case "i'm excited, you??":
	case "i'm excited, you???":
	case "i'm excited, you????":
	case "i'm excited, you?????":
	case "i'm excited, you??????":
	case "i'm excited, you???????":
	case "i'm excited, you????????":
	case "i'm excited, u?":
	case "i'm excited, you?":
	case "i'm angry.":
	case "i'm angry..":
	case "i'm angry...":
	case "i'm angry....":
	case "i'm angry.....":
	case "i'm angry......":
	case "i'm angry.......":
	case "i'm angry!":
	case "i'm angry!!":
	case "i'm angry!!!":
	case "i'm angry!!!!":
	case "i'm angry!!!!!":
	case "i'm angry!!!!!!":
	case "i'm angry!!!!!!!":
	case "i'm angry?":
	case "i'm angry??":
	case "i'm angry???":
	case "i'm angry????":
	case "i'm angry?????":
	case "i'm angry??????":
	case "i'm angry???????":
	case "i'm angry. u":
	case "i'm angry.. u":
	case "i'm angry... u":
	case "i'm angry.... u":
	case "i'm angry..... u":
	case "i'm angry...... u":
	case "i'm angry....... u":
	case "i'm angry! u":
	case "i'm angry!! u":
	case "i'm angry!!! u":
	case "i'm angry!!!! u":
	case "i'm angry!!!!! u":
	case "i'm angry!!!!!! u":
	case "i'm angry!!!!!!! u":
	case "i'm angry? u":
	case "i'm angry?? u":
	case "i'm angry??? u":
	case "i'm angry???? u":
	case "i'm angry????? u":
	case "i'm angry?????? u":
	case "i'm angry??????? u":
	case "i'm angry u.":
	case "i'm angry u..":
	case "i'm angry u...":
	case "i'm angry u....":
	case "i'm angry u.....":
	case "i'm angry u......":
	case "i'm angry u.......":
	case "i'm angry u!":
	case "i'm angry u!!":
	case "i'm angry u!!!":
	case "i'm angry u!!!!":
	case "i'm angry u!!!!!":
	case "i'm angry u!!!!!!":
	case "i'm angry u!!!!!!!":
	case "i'm angry u?":
	case "i'm angry u??":
	case "i'm angry u???":
	case "i'm angry u????":
	case "i'm angry u?????":
	case "i'm angry u??????":
	case "i'm angry u???????":
	case "i'm angry":
	case "i'm angry u":
	case "i'm angry you":
	case "i'm angry. you":
	case "i'm angry.. you":
	case "i'm angry... you":
	case "i'm angry.... you":
	case "i'm angry..... you":
	case "i'm angry...... you":
	case "i'm angry....... you":
	case "i'm angry! you":
	case "i'm angry!! you":
	case "i'm angry!!! you":
	case "i'm angry!!!! you":
	case "i'm angry!!!!! you":
	case "i'm angry!!!!!! you":
	case "i'm angry!!!!!!! you":
	case "i'm angry? you":
	case "i'm angry?? you":
	case "i'm angry??? you":
	case "i'm angry???? you":
	case "i'm angry????? you":
	case "i'm angry?????? you":
	case "i'm angry??????? you":
	case "i'm angry you.":
	case "i'm angry you..":
	case "i'm angry you...":
	case "i'm angry you....":
	case "i'm angry you.....":
	case "i'm angry you......":
	case "i'm angry you.......":
	case "i'm angry you!":
	case "i'm angry you!!":
	case "i'm angry you!!!":
	case "i'm angry you!!!!":
	case "i'm angry you!!!!!":
	case "i'm angry you!!!!!!":
	case "i'm angry you!!!!!!!":
	case "i'm angry you?":
	case "i'm angry you??":
	case "i'm angry you???":
	case "i'm angry you????":
	case "i'm angry you?????":
	case "i'm angry you??????":
	case "i'm angry you???????":
	case "i'm angry":
	case "i'm angry u":
	case "i'm angry you":
	case "i'm angry. u?":
	case "i'm angry.. u?":
	case "i'm angry... u?":
	case "i'm angry.... u?":
	case "i'm angry..... u?":
	case "i'm angry...... u?":
	case "i'm angry....... u?":
	case "i'm angry! u?":
	case "i'm angry!! u?":
	case "i'm angry!!! u?":
	case "i'm angry!!!! u?":
	case "i'm angry!!!!! u?":
	case "i'm angry!!!!!! u?":
	case "i'm angry!!!!!!! u?":
	case "i'm angry? u?":
	case "i'm angry?? u?":
	case "i'm angry??? u?":
	case "i'm angry???? u?":
	case "i'm angry????? u?":
	case "i'm angry?????? u?":
	case "i'm angry??????? u?":
	case "i'm angry u.?":
	case "i'm angry u..?":
	case "i'm angry u...?":
	case "i'm angry u....?":
	case "i'm angry u.....?":
	case "i'm angry u......?":
	case "i'm angry u.......?":
	case "i'm angry u!?":
	case "i'm angry u!!?":
	case "i'm angry u!!!?":
	case "i'm angry u!!!!?":
	case "i'm angry u!!!!!?":
	case "i'm angry u!!!!!!?":
	case "i'm angry u!!!!!!!?":
	case "i'm angry u?":
	case "i'm angry u??":
	case "i'm angry u???":
	case "i'm angry u????":
	case "i'm angry u?????":
	case "i'm angry u??????":
	case "i'm angry u???????":
	case "i'm angry":
	case "i'm angry u?":
	case "i'm angry you?":
	case "i'm angry. you?":
	case "i'm angry.. you?":
	case "i'm angry... you?":
	case "i'm angry.... you?":
	case "i'm angry..... you?":
	case "i'm angry...... you?":
	case "i'm angry....... you?":
	case "i'm angry! you?":
	case "i'm angry!! you?":
	case "i'm angry!!! you?":
	case "i'm angry!!!! you?":
	case "i'm angry!!!!! you?":
	case "i'm angry!!!!!! you?":
	case "i'm angry!!!!!!! you?":
	case "i'm angry? you?":
	case "i'm angry?? you?":
	case "i'm angry??? you?":
	case "i'm angry???? you?":
	case "i'm angry????? you?":
	case "i'm angry?????? you?":
	case "i'm angry??????? you?":
	case "i'm angry you.?":
	case "i'm angry you..?":
	case "i'm angry you...?":
	case "i'm angry you....?":
	case "i'm angry you.....?":
	case "i'm angry you......?":
	case "i'm angry you.......?":
	case "i'm angry you!?":
	case "i'm angry you!!?":
	case "i'm angry you!!!?":
	case "i'm angry you!!!!?":
	case "i'm angry you!!!!!?":
	case "i'm angry you!!!!!!":
	case "i'm angry you!!!!!!!?":
	case "i'm angry you??":
	case "i'm angry you???":
	case "i'm angry you????":
	case "i'm angry you?????":
	case "i'm angry you??????":
	case "i'm angry you???????":
	case "i'm angry you????????":
	case "i'm angry??":
	case "i'm angry u?":
	case "i'm angry you?":
	case "i'm angry, u.":
	case "i'm angry, u..":
	case "i'm angry, u...":
	case "i'm angry, u....":
	case "i'm angry, u.....":
	case "i'm angry, u......":
	case "i'm angry, u.......":
	case "i'm angry, u!":
	case "i'm angry, u!!":
	case "i'm angry, u!!!":
	case "i'm angry, u!!!!":
	case "i'm angry, u!!!!!":
	case "i'm angry, u!!!!!!":
	case "i'm angry, u!!!!!!!":
	case "i'm angry, u?":
	case "i'm angry, u??":
	case "i'm angry, u???":
	case "i'm angry, u????":
	case "i'm angry, u?????":
	case "i'm angry, u??????":
	case "i'm angry, u???????":
	case "i'm angry, you.":
	case "i'm angry, you..":
	case "i'm angry, you...":
	case "i'm angry, you....":
	case "i'm angry, you.....":
	case "i'm angry, you......":
	case "i'm angry, you.......":
	case "i'm angry, you!":
	case "i'm angry, you!!":
	case "i'm angry, you!!!":
	case "i'm angry, you!!!!":
	case "i'm angry, you!!!!!":
	case "i'm angry, you!!!!!!":
	case "i'm angry, you!!!!!!!":
	case "i'm angry, you?":
	case "i'm angry, you??":
	case "i'm angry, you???":
	case "i'm angry, you????":
	case "i'm angry, you?????":
	case "i'm angry, you??????":
	case "i'm angry, you???????":
	case "i'm angry, u":
	case "i'm angry, you":
	case "i'm angry, u.?":
	case "i'm angry, u..?":
	case "i'm angry, u...?":
	case "i'm angry, u....?":
	case "i'm angry, u.....?":
	case "i'm angry, u......?":
	case "i'm angry, u.......?":
	case "i'm angry, u!?":
	case "i'm angry, u!!?":
	case "i'm angry, u!!!?":
	case "i'm angry, u!!!!?":
	case "i'm angry, u!!!!!?":
	case "i'm angry, u!!!!!!?":
	case "i'm angry, u!!!!!!!?":
	case "i'm angry, u?":
	case "i'm angry, u??":
	case "i'm angry, u???":
	case "i'm angry, u????":
	case "i'm angry, u?????":
	case "i'm angry, u??????":
	case "i'm angry, u???????":
	case "i'm angry, u?":
	case "i'm angry, you?":
	case "i'm angry, you.?":
	case "i'm angry, you..?":
	case "i'm angry, you...?":
	case "i'm angry, you....?":
	case "i'm angry, you.....?":
	case "i'm angry, you......?":
	case "i'm angry, you.......?":
	case "i'm angry, you!?":
	case "i'm angry, you!!?":
	case "i'm angry, you!!!?":
	case "i'm angry, you!!!!?":
	case "i'm angry, you!!!!!?":
	case "i'm angry, you!!!!!!":
	case "i'm angry, you!!!!!!!?":
	case "i'm angry, you??":
	case "i'm angry, you???":
	case "i'm angry, you????":
	case "i'm angry, you?????":
	case "i'm angry, you??????":
	case "i'm angry, you???????":
	case "i'm angry, you????????":
	case "i'm angry, u?":
	case "i'm angry, you?":
	case "i'm mad.":
	case "i'm mad..":
	case "i'm mad...":
	case "i'm mad....":
	case "i'm mad.....":
	case "i'm mad......":
	case "i'm mad.......":
	case "i'm mad!":
	case "i'm mad!!":
	case "i'm mad!!!":
	case "i'm mad!!!!":
	case "i'm mad!!!!!":
	case "i'm mad!!!!!!":
	case "i'm mad!!!!!!!":
	case "i'm mad?":
	case "i'm mad??":
	case "i'm mad???":
	case "i'm mad????":
	case "i'm mad?????":
	case "i'm mad??????":
	case "i'm mad???????":
	case "i'm mad. u":
	case "i'm mad.. u":
	case "i'm mad... u":
	case "i'm mad.... u":
	case "i'm mad..... u":
	case "i'm mad...... u":
	case "i'm mad....... u":
	case "i'm mad! u":
	case "i'm mad!! u":
	case "i'm mad!!! u":
	case "i'm mad!!!! u":
	case "i'm mad!!!!! u":
	case "i'm mad!!!!!! u":
	case "i'm mad!!!!!!! u":
	case "i'm mad? u":
	case "i'm mad?? u":
	case "i'm mad??? u":
	case "i'm mad???? u":
	case "i'm mad????? u":
	case "i'm mad?????? u":
	case "i'm mad??????? u":
	case "i'm mad u.":
	case "i'm mad u..":
	case "i'm mad u...":
	case "i'm mad u....":
	case "i'm mad u.....":
	case "i'm mad u......":
	case "i'm mad u.......":
	case "i'm mad u!":
	case "i'm mad u!!":
	case "i'm mad u!!!":
	case "i'm mad u!!!!":
	case "i'm mad u!!!!!":
	case "i'm mad u!!!!!!":
	case "i'm mad u!!!!!!!":
	case "i'm mad u?":
	case "i'm mad u??":
	case "i'm mad u???":
	case "i'm mad u????":
	case "i'm mad u?????":
	case "i'm mad u??????":
	case "i'm mad u???????":
	case "i'm mad":
	case "i'm mad u":
	case "i'm mad you":
	case "i'm mad. you":
	case "i'm mad.. you":
	case "i'm mad... you":
	case "i'm mad.... you":
	case "i'm mad..... you":
	case "i'm mad...... you":
	case "i'm mad....... you":
	case "i'm mad! you":
	case "i'm mad!! you":
	case "i'm mad!!! you":
	case "i'm mad!!!! you":
	case "i'm mad!!!!! you":
	case "i'm mad!!!!!! you":
	case "i'm mad!!!!!!! you":
	case "i'm mad? you":
	case "i'm mad?? you":
	case "i'm mad??? you":
	case "i'm mad???? you":
	case "i'm mad????? you":
	case "i'm mad?????? you":
	case "i'm mad??????? you":
	case "i'm mad you.":
	case "i'm mad you..":
	case "i'm mad you...":
	case "i'm mad you....":
	case "i'm mad you.....":
	case "i'm mad you......":
	case "i'm mad you.......":
	case "i'm mad you!":
	case "i'm mad you!!":
	case "i'm mad you!!!":
	case "i'm mad you!!!!":
	case "i'm mad you!!!!!":
	case "i'm mad you!!!!!!":
	case "i'm mad you!!!!!!!":
	case "i'm mad you?":
	case "i'm mad you??":
	case "i'm mad you???":
	case "i'm mad you????":
	case "i'm mad you?????":
	case "i'm mad you??????":
	case "i'm mad you???????":
	case "i'm mad":
	case "i'm mad u":
	case "i'm mad you":
	case "i'm mad. u?":
	case "i'm mad.. u?":
	case "i'm mad... u?":
	case "i'm mad.... u?":
	case "i'm mad..... u?":
	case "i'm mad...... u?":
	case "i'm mad....... u?":
	case "i'm mad! u?":
	case "i'm mad!! u?":
	case "i'm mad!!! u?":
	case "i'm mad!!!! u?":
	case "i'm mad!!!!! u?":
	case "i'm mad!!!!!! u?":
	case "i'm mad!!!!!!! u?":
	case "i'm mad? u?":
	case "i'm mad?? u?":
	case "i'm mad??? u?":
	case "i'm mad???? u?":
	case "i'm mad????? u?":
	case "i'm mad?????? u?":
	case "i'm mad??????? u?":
	case "i'm mad u.?":
	case "i'm mad u..?":
	case "i'm mad u...?":
	case "i'm mad u....?":
	case "i'm mad u.....?":
	case "i'm mad u......?":
	case "i'm mad u.......?":
	case "i'm mad u!?":
	case "i'm mad u!!?":
	case "i'm mad u!!!?":
	case "i'm mad u!!!!?":
	case "i'm mad u!!!!!?":
	case "i'm mad u!!!!!!?":
	case "i'm mad u!!!!!!!?":
	case "i'm mad u?":
	case "i'm mad u??":
	case "i'm mad u???":
	case "i'm mad u????":
	case "i'm mad u?????":
	case "i'm mad u??????":
	case "i'm mad u???????":
	case "i'm mad":
	case "i'm mad u?":
	case "i'm mad you?":
	case "i'm mad. you?":
	case "i'm mad.. you?":
	case "i'm mad... you?":
	case "i'm mad.... you?":
	case "i'm mad..... you?":
	case "i'm mad...... you?":
	case "i'm mad....... you?":
	case "i'm mad! you?":
	case "i'm mad!! you?":
	case "i'm mad!!! you?":
	case "i'm mad!!!! you?":
	case "i'm mad!!!!! you?":
	case "i'm mad!!!!!! you?":
	case "i'm mad!!!!!!! you?":
	case "i'm mad? you?":
	case "i'm mad?? you?":
	case "i'm mad??? you?":
	case "i'm mad???? you?":
	case "i'm mad????? you?":
	case "i'm mad?????? you?":
	case "i'm mad??????? you?":
	case "i'm mad you.?":
	case "i'm mad you..?":
	case "i'm mad you...?":
	case "i'm mad you....?":
	case "i'm mad you.....?":
	case "i'm mad you......?":
	case "i'm mad you.......?":
	case "i'm mad you!?":
	case "i'm mad you!!?":
	case "i'm mad you!!!?":
	case "i'm mad you!!!!?":
	case "i'm mad you!!!!!?":
	case "i'm mad you!!!!!!":
	case "i'm mad you!!!!!!!?":
	case "i'm mad you??":
	case "i'm mad you???":
	case "i'm mad you????":
	case "i'm mad you?????":
	case "i'm mad you??????":
	case "i'm mad you???????":
	case "i'm mad you????????":
	case "i'm mad??":
	case "i'm mad u?":
	case "i'm mad you?":
	case "i'm mad, u.":
	case "i'm mad, u..":
	case "i'm mad, u...":
	case "i'm mad, u....":
	case "i'm mad, u.....":
	case "i'm mad, u......":
	case "i'm mad, u.......":
	case "i'm mad, u!":
	case "i'm mad, u!!":
	case "i'm mad, u!!!":
	case "i'm mad, u!!!!":
	case "i'm mad, u!!!!!":
	case "i'm mad, u!!!!!!":
	case "i'm mad, u!!!!!!!":
	case "i'm mad, u?":
	case "i'm mad, u??":
	case "i'm mad, u???":
	case "i'm mad, u????":
	case "i'm mad, u?????":
	case "i'm mad, u??????":
	case "i'm mad, u???????":
	case "i'm mad, you.":
	case "i'm mad, you..":
	case "i'm mad, you...":
	case "i'm mad, you....":
	case "i'm mad, you.....":
	case "i'm mad, you......":
	case "i'm mad, you.......":
	case "i'm mad, you!":
	case "i'm mad, you!!":
	case "i'm mad, you!!!":
	case "i'm mad, you!!!!":
	case "i'm mad, you!!!!!":
	case "i'm mad, you!!!!!!":
	case "i'm mad, you!!!!!!!":
	case "i'm mad, you?":
	case "i'm mad, you??":
	case "i'm mad, you???":
	case "i'm mad, you????":
	case "i'm mad, you?????":
	case "i'm mad, you??????":
	case "i'm mad, you???????":
	case "i'm mad, u":
	case "i'm mad, you":
	case "i'm mad, u.?":
	case "i'm mad, u..?":
	case "i'm mad, u...?":
	case "i'm mad, u....?":
	case "i'm mad, u.....?":
	case "i'm mad, u......?":
	case "i'm mad, u.......?":
	case "i'm mad, u!?":
	case "i'm mad, u!!?":
	case "i'm mad, u!!!?":
	case "i'm mad, u!!!!?":
	case "i'm mad, u!!!!!?":
	case "i'm mad, u!!!!!!?":
	case "i'm mad, u!!!!!!!?":
	case "i'm mad, u?":
	case "i'm mad, u??":
	case "i'm mad, u???":
	case "i'm mad, u????":
	case "i'm mad, u?????":
	case "i'm mad, u??????":
	case "i'm mad, u???????":
	case "i'm mad, u?":
	case "i'm mad, you?":
	case "i'm mad, you.?":
	case "i'm mad, you..?":
	case "i'm mad, you...?":
	case "i'm mad, you....?":
	case "i'm mad, you.....?":
	case "i'm mad, you......?":
	case "i'm mad, you.......?":
	case "i'm mad, you!?":
	case "i'm mad, you!!?":
	case "i'm mad, you!!!?":
	case "i'm mad, you!!!!?":
	case "i'm mad, you!!!!!?":
	case "i'm mad, you!!!!!!":
	case "i'm mad, you!!!!!!!?":
	case "i'm mad, you??":
	case "i'm mad, you???":
	case "i'm mad, you????":
	case "i'm mad, you?????":
	case "i'm mad, you??????":
	case "i'm mad, you???????":
	case "i'm mad, you????????":
	case "i'm mad, u?":
	case "i'm mad, you?":	
	case "im good.":
	case "im good..":
	case "im good...":
	case "im good....":
	case "im good.....":
	case "im good......":
	case "im good.......":
	case "im good!":
	case "im good!!":
	case "im good!!!":
	case "im good!!!!":
	case "im good!!!!!":
	case "im good!!!!!!":
	case "im good!!!!!!!":
	case "im good?":
	case "im good??":
	case "im good???":
	case "im good????":
	case "im good?????":
	case "im good??????":
	case "im good???????":
	case "im good. u":
	case "im good.. u":
	case "im good... u":
	case "im good.... u":
	case "im good..... u":
	case "im good...... u":
	case "im good....... u":
	case "im good! u":
	case "im good!! u":
	case "im good!!! u":
	case "im good!!!! u":
	case "im good!!!!! u":
	case "im good!!!!!! u":
	case "im good!!!!!!! u":
	case "im good? u":
	case "im good?? u":
	case "im good??? u":
	case "im good???? u":
	case "im good????? u":
	case "im good?????? u":
	case "im good??????? u":
	case "im good u.":
	case "im good u..":
	case "im good u...":
	case "im good u....":
	case "im good u.....":
	case "im good u......":
	case "im good u.......":
	case "im good u!":
	case "im good u!!":
	case "im good u!!!":
	case "im good u!!!!":
	case "im good u!!!!!":
	case "im good u!!!!!!":
	case "im good u!!!!!!!":
	case "im good u?":
	case "im good u??":
	case "im good u???":
	case "im good u????":
	case "im good u?????":
	case "im good u??????":
	case "im good u???????":
	case "im good":
	case "im good u":
	case "im good you":
	case "im good. you":
	case "im good.. you":
	case "im good... you":
	case "im good.... you":
	case "im good..... you":
	case "im good...... you":
	case "im good....... you":
	case "im good! you":
	case "im good!! you":
	case "im good!!! you":
	case "im good!!!! you":
	case "im good!!!!! you":
	case "im good!!!!!! you":
	case "im good!!!!!!! you":
	case "im good? you":
	case "im good?? you":
	case "im good??? you":
	case "im good???? you":
	case "im good????? you":
	case "im good?????? you":
	case "im good??????? you":
	case "im good you.":
	case "im good you..":
	case "im good you...":
	case "im good you....":
	case "im good you.....":
	case "im good you......":
	case "im good you.......":
	case "im good you!":
	case "im good you!!":
	case "im good you!!!":
	case "im good you!!!!":
	case "im good you!!!!!":
	case "im good you!!!!!!":
	case "im good you!!!!!!!":
	case "im good you?":
	case "im good you??":
	case "im good you???":
	case "im good you????":
	case "im good you?????":
	case "im good you??????":
	case "im good you???????":
	case "im good":
	case "im good u":
	case "im good you":
	case "im good. u?":
	case "im good.. u?":
	case "im good... u?":
	case "im good.... u?":
	case "im good..... u?":
	case "im good...... u?":
	case "im good....... u?":
	case "im good! u?":
	case "im good!! u?":
	case "im good!!! u?":
	case "im good!!!! u?":
	case "im good!!!!! u?":
	case "im good!!!!!! u?":
	case "im good!!!!!!! u?":
	case "im good? u?":
	case "im good?? u?":
	case "im good??? u?":
	case "im good???? u?":
	case "im good????? u?":
	case "im good?????? u?":
	case "im good??????? u?":
	case "im good u.?":
	case "im good u..?":
	case "im good u...?":
	case "im good u....?":
	case "im good u.....?":
	case "im good u......?":
	case "im good u.......?":
	case "im good u!?":
	case "im good u!!?":
	case "im good u!!!?":
	case "im good u!!!!?":
	case "im good u!!!!!?":
	case "im good u!!!!!!?":
	case "im good u!!!!!!!?":
	case "im good u?":
	case "im good u??":
	case "im good u???":
	case "im good u????":
	case "im good u?????":
	case "im good u??????":
	case "im good u???????":
	case "im good":
	case "im good u?":
	case "im good you?":
	case "im good. you?":
	case "im good.. you?":
	case "im good... you?":
	case "im good.... you?":
	case "im good..... you?":
	case "im good...... you?":
	case "im good....... you?":
	case "im good! you?":
	case "im good!! you?":
	case "im good!!! you?":
	case "im good!!!! you?":
	case "im good!!!!! you?":
	case "im good!!!!!! you?":
	case "im good!!!!!!! you?":
	case "im good? you?":
	case "im good?? you?":
	case "im good??? you?":
	case "im good???? you?":
	case "im good????? you?":
	case "im good?????? you?":
	case "im good??????? you?":
	case "im good you.?":
	case "im good you..?":
	case "im good you...?":
	case "im good you....?":
	case "im good you.....?":
	case "im good you......?":
	case "im good you.......?":
	case "im good you!?":
	case "im good you!!?":
	case "im good you!!!?":
	case "im good you!!!!?":
	case "im good you!!!!!?":
	case "im good you!!!!!!":
	case "im good you!!!!!!!?":
	case "im good you??":
	case "im good you???":
	case "im good you????":
	case "im good you?????":
	case "im good you??????":
	case "im good you???????":
	case "im good you????????":
	case "im good??":
	case "im good u?":
	case "im good you?":
	case "im good, u.":
	case "im good, u..":
	case "im good, u...":
	case "im good, u....":
	case "im good, u.....":
	case "im good, u......":
	case "im good, u.......":
	case "im good, u!":
	case "im good, u!!":
	case "im good, u!!!":
	case "im good, u!!!!":
	case "im good, u!!!!!":
	case "im good, u!!!!!!":
	case "im good, u!!!!!!!":
	case "im good, u?":
	case "im good, u??":
	case "im good, u???":
	case "im good, u????":
	case "im good, u?????":
	case "im good, u??????":
	case "im good, u???????":
	case "im good, you.":
	case "im good, you..":
	case "im good, you...":
	case "im good, you....":
	case "im good, you.....":
	case "im good, you......":
	case "im good, you.......":
	case "im good, you!":
	case "im good, you!!":
	case "im good, you!!!":
	case "im good, you!!!!":
	case "im good, you!!!!!":
	case "im good, you!!!!!!":
	case "im good, you!!!!!!!":
	case "im good, you?":
	case "im good, you??":
	case "im good, you???":
	case "im good, you????":
	case "im good, you?????":
	case "im good, you??????":
	case "im good, you???????":
	case "im good, u":
	case "im good, you":
	case "im good, u.?":
	case "im good, u..?":
	case "im good, u...?":
	case "im good, u....?":
	case "im good, u.....?":
	case "im good, u......?":
	case "im good, u.......?":
	case "im good, u!?":
	case "im good, u!!?":
	case "im good, u!!!?":
	case "im good, u!!!!?":
	case "im good, u!!!!!?":
	case "im good, u!!!!!!?":
	case "im good, u!!!!!!!?":
	case "im good, u?":
	case "im good, u??":
	case "im good, u???":
	case "im good, u????":
	case "im good, u?????":
	case "im good, u??????":
	case "im good, u???????":
	case "im good, u?":
	case "im good, you?":
	case "im good, you.?":
	case "im good, you..?":
	case "im good, you...?":
	case "im good, you....?":
	case "im good, you.....?":
	case "im good, you......?":
	case "im good, you.......?":
	case "im good, you!?":
	case "im good, you!!?":
	case "im good, you!!!?":
	case "im good, you!!!!?":
	case "im good, you!!!!!?":
	case "im good, you!!!!!!":
	case "im good, you!!!!!!!?":
	case "im good, you??":
	case "im good, you???":
	case "im good, you????":
	case "im good, you?????":
	case "im good, you??????":
	case "im good, you???????":
	case "im good, you????????":
	case "im good, u?":
	case "im sad.":
	case "im sad..":
	case "im sad...":
	case "im sad....":
	case "im sad.....":
	case "im sad......":
	case "im sad.......":
	case "im sad!":
	case "im sad!!":
	case "im sad!!!":
	case "im sad!!!!":
	case "im sad!!!!!":
	case "im sad!!!!!!":
	case "im sad!!!!!!!":
	case "im sad?":
	case "im sad??":
	case "im sad???":
	case "im sad????":
	case "im sad?????":
	case "im sad??????":
	case "im sad???????":
	case "im sad. u":
	case "im sad.. u":
	case "im sad... u":
	case "im sad.... u":
	case "im sad..... u":
	case "im sad...... u":
	case "im sad....... u":
	case "im sad! u":
	case "im sad!! u":
	case "im sad!!! u":
	case "im sad!!!! u":
	case "im sad!!!!! u":
	case "im sad!!!!!! u":
	case "im sad!!!!!!! u":
	case "im sad? u":
	case "im sad?? u":
	case "im sad??? u":
	case "im sad???? u":
	case "im sad????? u":
	case "im sad?????? u":
	case "im sad??????? u":
	case "im sad u.":
	case "im sad u..":
	case "im sad u...":
	case "im sad u....":
	case "im sad u.....":
	case "im sad u......":
	case "im sad u.......":
	case "im sad u!":
	case "im sad u!!":
	case "im sad u!!!":
	case "im sad u!!!!":
	case "im sad u!!!!!":
	case "im sad u!!!!!!":
	case "im sad u!!!!!!!":
	case "im sad u?":
	case "im sad u??":
	case "im sad u???":
	case "im sad u????":
	case "im sad u?????":
	case "im sad u??????":
	case "im sad u???????":
	case "im sad":
	case "im sad u":
	case "im sad you":
	case "im sad. you":
	case "im sad.. you":
	case "im sad... you":
	case "im sad.... you":
	case "im sad..... you":
	case "im sad...... you":
	case "im sad....... you":
	case "im sad! you":
	case "im sad!! you":
	case "im sad!!! you":
	case "im sad!!!! you":
	case "im sad!!!!! you":
	case "im sad!!!!!! you":
	case "im sad!!!!!!! you":
	case "im sad? you":
	case "im sad?? you":
	case "im sad??? you":
	case "im sad???? you":
	case "im sad????? you":
	case "im sad?????? you":
	case "im sad??????? you":
	case "im sad you.":
	case "im sad you..":
	case "im sad you...":
	case "im sad you....":
	case "im sad you.....":
	case "im sad you......":
	case "im sad you.......":
	case "im sad you!":
	case "im sad you!!":
	case "im sad you!!!":
	case "im sad you!!!!":
	case "im sad you!!!!!":
	case "im sad you!!!!!!":
	case "im sad you!!!!!!!":
	case "im sad you?":
	case "im sad you??":
	case "im sad you???":
	case "im sad you????":
	case "im sad you?????":
	case "im sad you??????":
	case "im sad you???????":
	case "im sad":
	case "im sad u":
	case "im sad you":
	case "im sad. u?":
	case "im sad.. u?":
	case "im sad... u?":
	case "im sad.... u?":
	case "im sad..... u?":
	case "im sad...... u?":
	case "im sad....... u?":
	case "im sad! u?":
	case "im sad!! u?":
	case "im sad!!! u?":
	case "im sad!!!! u?":
	case "im sad!!!!! u?":
	case "im sad!!!!!! u?":
	case "im sad!!!!!!! u?":
	case "im sad? u?":
	case "im sad?? u?":
	case "im sad??? u?":
	case "im sad???? u?":
	case "im sad????? u?":
	case "im sad?????? u?":
	case "im sad??????? u?":
	case "im sad u.?":
	case "im sad u..?":
	case "im sad u...?":
	case "im sad u....?":
	case "im sad u.....?":
	case "im sad u......?":
	case "im sad u.......?":
	case "im sad u!?":
	case "im sad u!!?":
	case "im sad u!!!?":
	case "im sad u!!!!?":
	case "im sad u!!!!!?":
	case "im sad u!!!!!!?":
	case "im sad u!!!!!!!?":
	case "im sad u?":
	case "im sad u??":
	case "im sad u???":
	case "im sad u????":
	case "im sad u?????":
	case "im sad u??????":
	case "im sad u???????":
	case "im sad":
	case "im sad u?":
	case "im sad you?":
	case "im sad. you?":
	case "im sad.. you?":
	case "im sad... you?":
	case "im sad.... you?":
	case "im sad..... you?":
	case "im sad...... you?":
	case "im sad....... you?":
	case "im sad! you?":
	case "im sad!! you?":
	case "im sad!!! you?":
	case "im sad!!!! you?":
	case "im sad!!!!! you?":
	case "im sad!!!!!! you?":
	case "im sad!!!!!!! you?":
	case "im sad? you?":
	case "im sad?? you?":
	case "im sad??? you?":
	case "im sad???? you?":
	case "im sad????? you?":
	case "im sad?????? you?":
	case "im sad??????? you?":
	case "im sad you.?":
	case "im sad you..?":
	case "im sad you...?":
	case "im sad you....?":
	case "im sad you.....?":
	case "im sad you......?":
	case "im sad you.......?":
	case "im sad you!?":
	case "im sad you!!?":
	case "im sad you!!!?":
	case "im sad you!!!!?":
	case "im sad you!!!!!?":
	case "im sad you!!!!!!":
	case "im sad you!!!!!!!?":
	case "im sad you??":
	case "im sad you???":
	case "im sad you????":
	case "im sad you?????":
	case "im sad you??????":
	case "im sad you???????":
	case "im sad you????????":
	case "im sad??":
	case "im sad u?":
	case "im sad you?":
	case "im sad, u.":
	case "im sad, u..":
	case "im sad, u...":
	case "im sad, u....":
	case "im sad, u.....":
	case "im sad, u......":
	case "im sad, u.......":
	case "im sad, u!":
	case "im sad, u!!":
	case "im sad, u!!!":
	case "im sad, u!!!!":
	case "im sad, u!!!!!":
	case "im sad, u!!!!!!":
	case "im sad, u!!!!!!!":
	case "im sad, u?":
	case "im sad, u??":
	case "im sad, u???":
	case "im sad, u????":
	case "im sad, u?????":
	case "im sad, u??????":
	case "im sad, u???????":
	case "im sad, you.":
	case "im sad, you..":
	case "im sad, you...":
	case "im sad, you....":
	case "im sad, you.....":
	case "im sad, you......":
	case "im sad, you.......":
	case "im sad, you!":
	case "im sad, you!!":
	case "im sad, you!!!":
	case "im sad, you!!!!":
	case "im sad, you!!!!!":
	case "im sad, you!!!!!!":
	case "im sad, you!!!!!!!":
	case "im sad, you?":
	case "im sad, you??":
	case "im sad, you???":
	case "im sad, you????":
	case "im sad, you?????":
	case "im sad, you??????":
	case "im sad, you???????":
	case "im sad, u":
	case "im sad, you":
	case "im sad, u.?":
	case "im sad, u..?":
	case "im sad, u...?":
	case "im sad, u....?":
	case "im sad, u.....?":
	case "im sad, u......?":
	case "im sad, u.......?":
	case "im sad, u!?":
	case "im sad, u!!?":
	case "im sad, u!!!?":
	case "im sad, u!!!!?":
	case "im sad, u!!!!!?":
	case "im sad, u!!!!!!?":
	case "im sad, u!!!!!!!?":
	case "im sad, u?":
	case "im sad, u??":
	case "im sad, u???":
	case "im sad, u????":
	case "im sad, u?????":
	case "im sad, u??????":
	case "im sad, u???????":
	case "im sad, u?":
	case "im sad, you?":
	case "im sad, you.?":
	case "im sad, you..?":
	case "im sad, you...?":
	case "im sad, you....?":
	case "im sad, you.....?":
	case "im sad, you......?":
	case "im sad, you.......?":
	case "im sad, you!?":
	case "im sad, you!!?":
	case "im sad, you!!!?":
	case "im sad, you!!!!?":
	case "im sad, you!!!!!?":
	case "im sad, you!!!!!!":
	case "im sad, you!!!!!!!?":
	case "im sad, you??":
	case "im sad, you???":
	case "im sad, you????":
	case "im sad, you?????":
	case "im sad, you??????":
	case "im sad, you???????":
	case "im sad, you????????":
	case "im sad, u?":
	case "im sad, you?":
	case "im excited.":
	case "im excited..":
	case "im excited...":
	case "im excited....":
	case "im excited.....":
	case "im excited......":
	case "im excited.......":
	case "im excited!":
	case "im excited!!":
	case "im excited!!!":
	case "im excited!!!!":
	case "im excited!!!!!":
	case "im excited!!!!!!":
	case "im excited!!!!!!!":
	case "im excited?":
	case "im excited??":
	case "im excited???":
	case "im excited????":
	case "im excited?????":
	case "im excited??????":
	case "im excited???????":
	case "im excited. u":
	case "im excited.. u":
	case "im excited... u":
	case "im excited.... u":
	case "im excited..... u":
	case "im excited...... u":
	case "im excited....... u":
	case "im excited! u":
	case "im excited!! u":
	case "im excited!!! u":
	case "im excited!!!! u":
	case "im excited!!!!! u":
	case "im excited!!!!!! u":
	case "im excited!!!!!!! u":
	case "im excited? u":
	case "im excited?? u":
	case "im excited??? u":
	case "im excited???? u":
	case "im excited????? u":
	case "im excited?????? u":
	case "im excited??????? u":
	case "im excited u.":
	case "im excited u..":
	case "im excited u...":
	case "im excited u....":
	case "im excited u.....":
	case "im excited u......":
	case "im excited u.......":
	case "im excited u!":
	case "im excited u!!":
	case "im excited u!!!":
	case "im excited u!!!!":
	case "im excited u!!!!!":
	case "im excited u!!!!!!":
	case "im excited u!!!!!!!":
	case "im excited u?":
	case "im excited u??":
	case "im excited u???":
	case "im excited u????":
	case "im excited u?????":
	case "im excited u??????":
	case "im excited u???????":
	case "im excited":
	case "im excited u":
	case "im excited you":
	case "im excited. you":
	case "im excited.. you":
	case "im excited... you":
	case "im excited.... you":
	case "im excited..... you":
	case "im excited...... you":
	case "im excited....... you":
	case "im excited! you":
	case "im excited!! you":
	case "im excited!!! you":
	case "im excited!!!! you":
	case "im excited!!!!! you":
	case "im excited!!!!!! you":
	case "im excited!!!!!!! you":
	case "im excited? you":
	case "im excited?? you":
	case "im excited??? you":
	case "im excited???? you":
	case "im excited????? you":
	case "im excited?????? you":
	case "im excited??????? you":
	case "im excited you.":
	case "im excited you..":
	case "im excited you...":
	case "im excited you....":
	case "im excited you.....":
	case "im excited you......":
	case "im excited you.......":
	case "im excited you!":
	case "im excited you!!":
	case "im excited you!!!":
	case "im excited you!!!!":
	case "im excited you!!!!!":
	case "im excited you!!!!!!":
	case "im excited you!!!!!!!":
	case "im excited you?":
	case "im excited you??":
	case "im excited you???":
	case "im excited you????":
	case "im excited you?????":
	case "im excited you??????":
	case "im excited you???????":
	case "im excited":
	case "im excited u":
	case "im excited you":
	case "im excited. u?":
	case "im excited.. u?":
	case "im excited... u?":
	case "im excited.... u?":
	case "im excited..... u?":
	case "im excited...... u?":
	case "im excited....... u?":
	case "im excited! u?":
	case "im excited!! u?":
	case "im excited!!! u?":
	case "im excited!!!! u?":
	case "im excited!!!!! u?":
	case "im excited!!!!!! u?":
	case "im excited!!!!!!! u?":
	case "im excited? u?":
	case "im excited?? u?":
	case "im excited??? u?":
	case "im excited???? u?":
	case "im excited????? u?":
	case "im excited?????? u?":
	case "im excited??????? u?":
	case "im excited u.?":
	case "im excited u..?":
	case "im excited u...?":
	case "im excited u....?":
	case "im excited u.....?":
	case "im excited u......?":
	case "im excited u.......?":
	case "im excited u!?":
	case "im excited u!!?":
	case "im excited u!!!?":
	case "im excited u!!!!?":
	case "im excited u!!!!!?":
	case "im excited u!!!!!!?":
	case "im excited u!!!!!!!?":
	case "im excited u?":
	case "im excited u??":
	case "im excited u???":
	case "im excited u????":
	case "im excited u?????":
	case "im excited u??????":
	case "im excited u???????":
	case "im excited":
	case "im excited u?":
	case "im excited you?":
	case "im excited. you?":
	case "im excited.. you?":
	case "im excited... you?":
	case "im excited.... you?":
	case "im excited..... you?":
	case "im excited...... you?":
	case "im excited....... you?":
	case "im excited! you?":
	case "im excited!! you?":
	case "im excited!!! you?":
	case "im excited!!!! you?":
	case "im excited!!!!! you?":
	case "im excited!!!!!! you?":
	case "im excited!!!!!!! you?":
	case "im excited? you?":
	case "im excited?? you?":
	case "im excited??? you?":
	case "im excited???? you?":
	case "im excited????? you?":
	case "im excited?????? you?":
	case "im excited??????? you?":
	case "im excited you.?":
	case "im excited you..?":
	case "im excited you...?":
	case "im excited you....?":
	case "im excited you.....?":
	case "im excited you......?":
	case "im excited you.......?":
	case "im excited you!?":
	case "im excited you!!?":
	case "im excited you!!!?":
	case "im excited you!!!!?":
	case "im excited you!!!!!?":
	case "im excited you!!!!!!":
	case "im excited you!!!!!!!?":
	case "im excited you??":
	case "im excited you???":
	case "im excited you????":
	case "im excited you?????":
	case "im excited you??????":
	case "im excited you???????":
	case "im excited you????????":
	case "im excited??":
	case "im excited u?":
	case "im excited you?":
	case "im excited, u.":
	case "im excited, u..":
	case "im excited, u...":
	case "im excited, u....":
	case "im excited, u.....":
	case "im excited, u......":
	case "im excited, u.......":
	case "im excited, u!":
	case "im excited, u!!":
	case "im excited, u!!!":
	case "im excited, u!!!!":
	case "im excited, u!!!!!":
	case "im excited, u!!!!!!":
	case "im excited, u!!!!!!!":
	case "im excited, u?":
	case "im excited, u??":
	case "im excited, u???":
	case "im excited, u????":
	case "im excited, u?????":
	case "im excited, u??????":
	case "im excited, u???????":
	case "im excited, you.":
	case "im excited, you..":
	case "im excited, you...":
	case "im excited, you....":
	case "im excited, you.....":
	case "im excited, you......":
	case "im excited, you.......":
	case "im excited, you!":
	case "im excited, you!!":
	case "im excited, you!!!":
	case "im excited, you!!!!":
	case "im excited, you!!!!!":
	case "im excited, you!!!!!!":
	case "im excited, you!!!!!!!":
	case "im excited, you?":
	case "im excited, you??":
	case "im excited, you???":
	case "im excited, you????":
	case "im excited, you?????":
	case "im excited, you??????":
	case "im excited, you???????":
	case "im excited, u":
	case "im excited, you":
	case "im excited, u.?":
	case "im excited, u..?":
	case "im excited, u...?":
	case "im excited, u....?":
	case "im excited, u.....?":
	case "im excited, u......?":
	case "im excited, u.......?":
	case "im excited, u!?":
	case "im excited, u!!?":
	case "im excited, u!!!?":
	case "im excited, u!!!!?":
	case "im excited, u!!!!!?":
	case "im excited, u!!!!!!?":
	case "im excited, u!!!!!!!?":
	case "im excited, u?":
	case "im excited, u??":
	case "im excited, u???":
	case "im excited, u????":
	case "im excited, u?????":
	case "im excited, u??????":
	case "im excited, u???????":
	case "im excited, u?":
	case "im excited, you?":
	case "im excited, you.?":
	case "im excited, you..?":
	case "im excited, you...?":
	case "im excited, you....?":
	case "im excited, you.....?":
	case "im excited, you......?":
	case "im excited, you.......?":
	case "im excited, you!?":
	case "im excited, you!!?":
	case "im excited, you!!!?":
	case "im excited, you!!!!?":
	case "im excited, you!!!!!?":
	case "im excited, you!!!!!!":
	case "im excited, you!!!!!!!?":
	case "im excited, you??":
	case "im excited, you???":
	case "im excited, you????":
	case "im excited, you?????":
	case "im excited, you??????":
	case "im excited, you???????":
	case "im excited, you????????":
	case "im excited, u?":
	case "im excited, you?":
	case "im angry.":
	case "im angry..":
	case "im angry...":
	case "im angry....":
	case "im angry.....":
	case "im angry......":
	case "im angry.......":
	case "im angry!":
	case "im angry!!":
	case "im angry!!!":
	case "im angry!!!!":
	case "im angry!!!!!":
	case "im angry!!!!!!":
	case "im angry!!!!!!!":
	case "im angry?":
	case "im angry??":
	case "im angry???":
	case "im angry????":
	case "im angry?????":
	case "im angry??????":
	case "im angry???????":
	case "im angry. u":
	case "im angry.. u":
	case "im angry... u":
	case "im angry.... u":
	case "im angry..... u":
	case "im angry...... u":
	case "im angry....... u":
	case "im angry! u":
	case "im angry!! u":
	case "im angry!!! u":
	case "im angry!!!! u":
	case "im angry!!!!! u":
	case "im angry!!!!!! u":
	case "im angry!!!!!!! u":
	case "im angry? u":
	case "im angry?? u":
	case "im angry??? u":
	case "im angry???? u":
	case "im angry????? u":
	case "im angry?????? u":
	case "im angry??????? u":
	case "im angry u.":
	case "im angry u..":
	case "im angry u...":
	case "im angry u....":
	case "im angry u.....":
	case "im angry u......":
	case "im angry u.......":
	case "im angry u!":
	case "im angry u!!":
	case "im angry u!!!":
	case "im angry u!!!!":
	case "im angry u!!!!!":
	case "im angry u!!!!!!":
	case "im angry u!!!!!!!":
	case "im angry u?":
	case "im angry u??":
	case "im angry u???":
	case "im angry u????":
	case "im angry u?????":
	case "im angry u??????":
	case "im angry u???????":
	case "im angry":
	case "im angry u":
	case "im angry you":
	case "im angry. you":
	case "im angry.. you":
	case "im angry... you":
	case "im angry.... you":
	case "im angry..... you":
	case "im angry...... you":
	case "im angry....... you":
	case "im angry! you":
	case "im angry!! you":
	case "im angry!!! you":
	case "im angry!!!! you":
	case "im angry!!!!! you":
	case "im angry!!!!!! you":
	case "im angry!!!!!!! you":
	case "im angry? you":
	case "im angry?? you":
	case "im angry??? you":
	case "im angry???? you":
	case "im angry????? you":
	case "im angry?????? you":
	case "im angry??????? you":
	case "im angry you.":
	case "im angry you..":
	case "im angry you...":
	case "im angry you....":
	case "im angry you.....":
	case "im angry you......":
	case "im angry you.......":
	case "im angry you!":
	case "im angry you!!":
	case "im angry you!!!":
	case "im angry you!!!!":
	case "im angry you!!!!!":
	case "im angry you!!!!!!":
	case "im angry you!!!!!!!":
	case "im angry you?":
	case "im angry you??":
	case "im angry you???":
	case "im angry you????":
	case "im angry you?????":
	case "im angry you??????":
	case "im angry you???????":
	case "im angry":
	case "im angry u":
	case "im angry you":
	case "im angry. u?":
	case "im angry.. u?":
	case "im angry... u?":
	case "im angry.... u?":
	case "im angry..... u?":
	case "im angry...... u?":
	case "im angry....... u?":
	case "im angry! u?":
	case "im angry!! u?":
	case "im angry!!! u?":
	case "im angry!!!! u?":
	case "im angry!!!!! u?":
	case "im angry!!!!!! u?":
	case "im angry!!!!!!! u?":
	case "im angry? u?":
	case "im angry?? u?":
	case "im angry??? u?":
	case "im angry???? u?":
	case "im angry????? u?":
	case "im angry?????? u?":
	case "im angry??????? u?":
	case "im angry u.?":
	case "im angry u..?":
	case "im angry u...?":
	case "im angry u....?":
	case "im angry u.....?":
	case "im angry u......?":
	case "im angry u.......?":
	case "im angry u!?":
	case "im angry u!!?":
	case "im angry u!!!?":
	case "im angry u!!!!?":
	case "im angry u!!!!!?":
	case "im angry u!!!!!!?":
	case "im angry u!!!!!!!?":
	case "im angry u?":
	case "im angry u??":
	case "im angry u???":
	case "im angry u????":
	case "im angry u?????":
	case "im angry u??????":
	case "im angry u???????":
	case "im angry":
	case "im angry u?":
	case "im angry you?":
	case "im angry. you?":
	case "im angry.. you?":
	case "im angry... you?":
	case "im angry.... you?":
	case "im angry..... you?":
	case "im angry...... you?":
	case "im angry....... you?":
	case "im angry! you?":
	case "im angry!! you?":
	case "im angry!!! you?":
	case "im angry!!!! you?":
	case "im angry!!!!! you?":
	case "im angry!!!!!! you?":
	case "im angry!!!!!!! you?":
	case "im angry? you?":
	case "im angry?? you?":
	case "im angry??? you?":
	case "im angry???? you?":
	case "im angry????? you?":
	case "im angry?????? you?":
	case "im angry??????? you?":
	case "im angry you.?":
	case "im angry you..?":
	case "im angry you...?":
	case "im angry you....?":
	case "im angry you.....?":
	case "im angry you......?":
	case "im angry you.......?":
	case "im angry you!?":
	case "im angry you!!?":
	case "im angry you!!!?":
	case "im angry you!!!!?":
	case "im angry you!!!!!?":
	case "im angry you!!!!!!":
	case "im angry you!!!!!!!?":
	case "im angry you??":
	case "im angry you???":
	case "im angry you????":
	case "im angry you?????":
	case "im angry you??????":
	case "im angry you???????":
	case "im angry you????????":
	case "im angry??":
	case "im angry u?":
	case "im angry you?":
	case "im angry, u.":
	case "im angry, u..":
	case "im angry, u...":
	case "im angry, u....":
	case "im angry, u.....":
	case "im angry, u......":
	case "im angry, u.......":
	case "im angry, u!":
	case "im angry, u!!":
	case "im angry, u!!!":
	case "im angry, u!!!!":
	case "im angry, u!!!!!":
	case "im angry, u!!!!!!":
	case "im angry, u!!!!!!!":
	case "im angry, u?":
	case "im angry, u??":
	case "im angry, u???":
	case "im angry, u????":
	case "im angry, u?????":
	case "im angry, u??????":
	case "im angry, u???????":
	case "im angry, you.":
	case "im angry, you..":
	case "im angry, you...":
	case "im angry, you....":
	case "im angry, you.....":
	case "im angry, you......":
	case "im angry, you.......":
	case "im angry, you!":
	case "im angry, you!!":
	case "im angry, you!!!":
	case "im angry, you!!!!":
	case "im angry, you!!!!!":
	case "im angry, you!!!!!!":
	case "im angry, you!!!!!!!":
	case "im angry, you?":
	case "im angry, you??":
	case "im angry, you???":
	case "im angry, you????":
	case "im angry, you?????":
	case "im angry, you??????":
	case "im angry, you???????":
	case "im angry, u":
	case "im angry, you":
	case "im angry, u.?":
	case "im angry, u..?":
	case "im angry, u...?":
	case "im angry, u....?":
	case "im angry, u.....?":
	case "im angry, u......?":
	case "im angry, u.......?":
	case "im angry, u!?":
	case "im angry, u!!?":
	case "im angry, u!!!?":
	case "im angry, u!!!!?":
	case "im angry, u!!!!!?":
	case "im angry, u!!!!!!?":
	case "im angry, u!!!!!!!?":
	case "im angry, u?":
	case "im angry, u??":
	case "im angry, u???":
	case "im angry, u????":
	case "im angry, u?????":
	case "im angry, u??????":
	case "im angry, u???????":
	case "im angry, u?":
	case "im angry, you?":
	case "im angry, you.?":
	case "im angry, you..?":
	case "im angry, you...?":
	case "im angry, you....?":
	case "im angry, you.....?":
	case "im angry, you......?":
	case "im angry, you.......?":
	case "im angry, you!?":
	case "im angry, you!!?":
	case "im angry, you!!!?":
	case "im angry, you!!!!?":
	case "im angry, you!!!!!?":
	case "im angry, you!!!!!!":
	case "im angry, you!!!!!!!?":
	case "im angry, you??":
	case "im angry, you???":
	case "im angry, you????":
	case "im angry, you?????":
	case "im angry, you??????":
	case "im angry, you???????":
	case "im angry, you????????":
	case "im angry, u?":
	case "im angry, you?":
	case "im mad.":
	case "im mad..":
	case "im mad...":
	case "im mad....":
	case "im mad.....":
	case "im mad......":
	case "im mad.......":
	case "im mad!":
	case "im mad!!":
	case "im mad!!!":
	case "im mad!!!!":
	case "im mad!!!!!":
	case "im mad!!!!!!":
	case "im mad!!!!!!!":
	case "im mad?":
	case "im mad??":
	case "im mad???":
	case "im mad????":
	case "im mad?????":
	case "im mad??????":
	case "im mad???????":
	case "im mad. u":
	case "im mad.. u":
	case "im mad... u":
	case "im mad.... u":
	case "im mad..... u":
	case "im mad...... u":
	case "im mad....... u":
	case "im mad! u":
	case "im mad!! u":
	case "im mad!!! u":
	case "im mad!!!! u":
	case "im mad!!!!! u":
	case "im mad!!!!!! u":
	case "im mad!!!!!!! u":
	case "im mad? u":
	case "im mad?? u":
	case "im mad??? u":
	case "im mad???? u":
	case "im mad????? u":
	case "im mad?????? u":
	case "im mad??????? u":
	case "im mad u.":
	case "im mad u..":
	case "im mad u...":
	case "im mad u....":
	case "im mad u.....":
	case "im mad u......":
	case "im mad u.......":
	case "im mad u!":
	case "im mad u!!":
	case "im mad u!!!":
	case "im mad u!!!!":
	case "im mad u!!!!!":
	case "im mad u!!!!!!":
	case "im mad u!!!!!!!":
	case "im mad u?":
	case "im mad u??":
	case "im mad u???":
	case "im mad u????":
	case "im mad u?????":
	case "im mad u??????":
	case "im mad u???????":
	case "im mad":
	case "im mad u":
	case "im mad you":
	case "im mad. you":
	case "im mad.. you":
	case "im mad... you":
	case "im mad.... you":
	case "im mad..... you":
	case "im mad...... you":
	case "im mad....... you":
	case "im mad! you":
	case "im mad!! you":
	case "im mad!!! you":
	case "im mad!!!! you":
	case "im mad!!!!! you":
	case "im mad!!!!!! you":
	case "im mad!!!!!!! you":
	case "im mad? you":
	case "im mad?? you":
	case "im mad??? you":
	case "im mad???? you":
	case "im mad????? you":
	case "im mad?????? you":
	case "im mad??????? you":
	case "im mad you.":
	case "im mad you..":
	case "im mad you...":
	case "im mad you....":
	case "im mad you.....":
	case "im mad you......":
	case "im mad you.......":
	case "im mad you!":
	case "im mad you!!":
	case "im mad you!!!":
	case "im mad you!!!!":
	case "im mad you!!!!!":
	case "im mad you!!!!!!":
	case "im mad you!!!!!!!":
	case "im mad you?":
	case "im mad you??":
	case "im mad you???":
	case "im mad you????":
	case "im mad you?????":
	case "im mad you??????":
	case "im mad you???????":
	case "im mad":
	case "im mad u":
	case "im mad you":
	case "im mad. u?":
	case "im mad.. u?":
	case "im mad... u?":
	case "im mad.... u?":
	case "im mad..... u?":
	case "im mad...... u?":
	case "im mad....... u?":
	case "im mad! u?":
	case "im mad!! u?":
	case "im mad!!! u?":
	case "im mad!!!! u?":
	case "im mad!!!!! u?":
	case "im mad!!!!!! u?":
	case "im mad!!!!!!! u?":
	case "im mad? u?":
	case "im mad?? u?":
	case "im mad??? u?":
	case "im mad???? u?":
	case "im mad????? u?":
	case "im mad?????? u?":
	case "im mad??????? u?":
	case "im mad u.?":
	case "im mad u..?":
	case "im mad u...?":
	case "im mad u....?":
	case "im mad u.....?":
	case "im mad u......?":
	case "im mad u.......?":
	case "im mad u!?":
	case "im mad u!!?":
	case "im mad u!!!?":
	case "im mad u!!!!?":
	case "im mad u!!!!!?":
	case "im mad u!!!!!!?":
	case "im mad u!!!!!!!?":
	case "im mad u?":
	case "im mad u??":
	case "im mad u???":
	case "im mad u????":
	case "im mad u?????":
	case "im mad u??????":
	case "im mad u???????":
	case "im mad":
	case "im mad u?":
	case "im mad you?":
	case "im mad. you?":
	case "im mad.. you?":
	case "im mad... you?":
	case "im mad.... you?":
	case "im mad..... you?":
	case "im mad...... you?":
	case "im mad....... you?":
	case "im mad! you?":
	case "im mad!! you?":
	case "im mad!!! you?":
	case "im mad!!!! you?":
	case "im mad!!!!! you?":
	case "im mad!!!!!! you?":
	case "im mad!!!!!!! you?":
	case "im mad? you?":
	case "im mad?? you?":
	case "im mad??? you?":
	case "im mad???? you?":
	case "im mad????? you?":
	case "im mad?????? you?":
	case "im mad??????? you?":
	case "im mad you.?":
	case "im mad you..?":
	case "im mad you...?":
	case "im mad you....?":
	case "im mad you.....?":
	case "im mad you......?":
	case "im mad you.......?":
	case "im mad you!?":
	case "im mad you!!?":
	case "im mad you!!!?":
	case "im mad you!!!!?":
	case "im mad you!!!!!?":
	case "im mad you!!!!!!":
	case "im mad you!!!!!!!?":
	case "im mad you??":
	case "im mad you???":
	case "im mad you????":
	case "im mad you?????":
	case "im mad you??????":
	case "im mad you???????":
	case "im mad you????????":
	case "im mad??":
	case "im mad u?":
	case "im mad you?":
	case "im mad, u.":
	case "im mad, u..":
	case "im mad, u...":
	case "im mad, u....":
	case "im mad, u.....":
	case "im mad, u......":
	case "im mad, u.......":
	case "im mad, u!":
	case "im mad, u!!":
	case "im mad, u!!!":
	case "im mad, u!!!!":
	case "im mad, u!!!!!":
	case "im mad, u!!!!!!":
	case "im mad, u!!!!!!!":
	case "im mad, u?":
	case "im mad, u??":
	case "im mad, u???":
	case "im mad, u????":
	case "im mad, u?????":
	case "im mad, u??????":
	case "im mad, u???????":
	case "im mad, you.":
	case "im mad, you..":
	case "im mad, you...":
	case "im mad, you....":
	case "im mad, you.....":
	case "im mad, you......":
	case "im mad, you.......":
	case "im mad, you!":
	case "im mad, you!!":
	case "im mad, you!!!":
	case "im mad, you!!!!":
	case "im mad, you!!!!!":
	case "im mad, you!!!!!!":
	case "im mad, you!!!!!!!":
	case "im mad, you?":
	case "im mad, you??":
	case "im mad, you???":
	case "im mad, you????":
	case "im mad, you?????":
	case "im mad, you??????":
	case "im mad, you???????":
	case "im mad, u":
	case "im mad, you":
	case "im mad, u.?":
	case "im mad, u..?":
	case "im mad, u...?":
	case "im mad, u....?":
	case "im mad, u.....?":
	case "im mad, u......?":
	case "im mad, u.......?":
	case "im mad, u!?":
	case "im mad, u!!?":
	case "im mad, u!!!?":
	case "im mad, u!!!!?":
	case "im mad, u!!!!!?":
	case "im mad, u!!!!!!?":
	case "im mad, u!!!!!!!?":
	case "im mad, u?":
	case "im mad, u??":
	case "im mad, u???":
	case "im mad, u????":
	case "im mad, u?????":
	case "im mad, u??????":
	case "im mad, u???????":
	case "im mad, u?":
	case "im mad, you?":
	case "im mad, you.?":
	case "im mad, you..?":
	case "im mad, you...?":
	case "im mad, you....?":
	case "im mad, you.....?":
	case "im mad, you......?":
	case "im mad, you.......?":
	case "im mad, you!?":
	case "im mad, you!!?":
	case "im mad, you!!!?":
	case "im mad, you!!!!?":
	case "im mad, you!!!!!?":
	case "im mad, you!!!!!!":
	case "im mad, you!!!!!!!?":
	case "im mad, you??":
	case "im mad, you???":
	case "im mad, you????":
	case "im mad, you?????":
	case "im mad, you??????":
	case "im mad, you???????":
	case "im mad, you????????":
	case "im mad, u?":
	case "im mad, you?":
	$Moods = array("0|1|1|" . RandomLetter() .  "|" . RandomLetter() ."|Sad", "0|1|1| ". RandomLetter() . "|" . RandomLetter() . "|Happy" , "0|1|1|" . RandomLetter() .  " . |" . RandomLetter() ."|Annoyed with you!");
	$RandomMood  = $Moods[array_rand($Moods)];
	print $RandomMood;
	sleep(2);
	break;
}

	if($ServerData == '') // if you've waited 5 seconds and nothing has been said
	{
		$SleepingMoods = array("0|1|1|" . RandomLetter() .  " . |" . RandomLetter() ."|Do you like my hat... oh wait, I don't have one!", "0|1|1| ". RandomLetter() . "|" . RandomLetter() . "|I'm from outer space!" , "0|1|1|" . RandomLetter() .  " . |" . RandomLetter() ."|This is a test of the emergency broadcast system!");
		$RandSleep  = $Moods[array_rand($SleepingMoods)];
		printf($RandSleep); // ...say a random phrase
		sleep(15);
	}
	
	
	
	
?>