<?php
include("../res/x5engine.php");
$nameList = array("7ej","53w","etv","dzv","6us","xgg","t3a","63c","4rl","ng8");
$charList = array("E","W","K","J","F","V","G","X","4","X");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
