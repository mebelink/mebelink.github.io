<?php
include("../res/x5engine.php");
$nameList = array("ueu","zg8","gv7","unn","5eg","saw","anr","z6l","2w5","w85");
$charList = array("J","P","S","Z","L","S","N","3","W","R");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
