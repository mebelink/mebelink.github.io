<?php
include("../res/x5engine.php");
$nameList = array("t3k","3c7","h56","nsj","8ds","c8h","wlh","g7d","euj","n3a");
$charList = array("S","N","F","P","H","J","J","3","7","W");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
