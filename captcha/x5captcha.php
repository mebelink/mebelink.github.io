<?php
include("../res/x5engine.php");
$nameList = array("yjd","wa2","5vm","yvx","lep","emu","h4p","tne","dkk","m5c");
$charList = array("D","4","A","W","3","T","6","Y","N","Y");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
