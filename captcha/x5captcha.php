<?php
include("../res/x5engine.php");
$nameList = array("rdn","c5n","yud","j2g","7v6","cs2","lxg","tfd","gjd","dvw");
$charList = array("H","Y","U","4","H","Y","7","S","5","6");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
