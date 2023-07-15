<?php
include("../res/x5engine.php");
$nameList = array("3vr","4tp","8l2","nfs","g6w","agc","7aj","25f","tnh","h3d");
$charList = array("P","A","N","H","K","7","S","E","P","Y");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
