<?php
include("../res/x5engine.php");
$nameList = array("4nc","tdl","rg8","8g5","c6t","4z4","pxj","xp6","ven","ylh");
$charList = array("W","R","G","K","D","V","4","J","D","A");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
