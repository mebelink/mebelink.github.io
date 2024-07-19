<?php
include("../res/x5engine.php");
$nameList = array("gtx","2nh","d7a","7wt","ezv","6y8","slu","8uh","zrp","uc8");
$charList = array("D","F","4","S","8","W","3","K","E","U");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
