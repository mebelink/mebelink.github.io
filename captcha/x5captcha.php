<?php
include("../res/x5engine.php");
$nameList = array("kh6","k2w","ran","z4w","zxg","jst","yss","mmd","wd5","dnt");
$charList = array("6","P","Z","W","S","4","L","R","U","S");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
