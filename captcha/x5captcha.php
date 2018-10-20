<?php
include("../res/x5engine.php");
$nameList = array("ajr","vmg","zhf","a6p","m8y","zc6","mwy","gdc","x5a","fm8");
$charList = array("L","V","C","P","N","D","V","C","8","Y");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
