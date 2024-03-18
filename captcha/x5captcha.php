<?php
include("../res/x5engine.php");
$nameList = array("xlu","hwf","32n","5dv","sv2","lfp","68a","xal","4lz","6en");
$charList = array("8","G","A","3","4","V","K","V","A","2");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
