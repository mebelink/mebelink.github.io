<?php
include("../res/x5engine.php");
$nameList = array("a3r","6d5","eah","6r2","ruu","edt","8tt","dsm","lj6","u2j");
$charList = array("Z","8","S","Y","A","N","P","4","G","N");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
