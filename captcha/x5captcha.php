<?php
include("../res/x5engine.php");
$nameList = array("6st","pmk","t53","44t","urd","37y","n7d","dv8","pue","uea");
$charList = array("2","6","J","J","4","6","L","M","X","K");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
