<?php
include("../res/x5engine.php");
$nameList = array("he7","mca","lzr","pc6","axa","f5p","w6c","ruf","a4c","rsl");
$charList = array("6","2","Y","N","N","E","V","2","X","N");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
