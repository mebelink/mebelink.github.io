<?php
include("../res/x5engine.php");
$nameList = array("k4s","lpm","85l","8eh","u2l","vec","e2r","trn","msg","6ms");
$charList = array("H","J","E","3","P","5","A","F","M","U");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
