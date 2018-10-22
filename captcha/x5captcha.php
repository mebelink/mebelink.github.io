<?php
include("../res/x5engine.php");
$nameList = array("7al","duv","yc5","pgr","6fy","7sp","c7p","e7y","4yt","t56");
$charList = array("C","M","3","X","T","5","3","J","S","C");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
