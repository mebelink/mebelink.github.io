<?php
include("../res/x5engine.php");
$nameList = array("ruy","76c","rmy","e5c","prp","v3p","v24","xcv","3l4","j7h");
$charList = array("D","L","8","R","C","X","D","7","E","D");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
