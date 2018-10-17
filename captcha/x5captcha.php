<?php
include("../res/x5engine.php");
$nameList = array("sk4","2nc","sss","6hk","ujt","ruj","ccd","265","4wk","wys");
$charList = array("T","K","Y","F","7","K","7","P","6","H");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
