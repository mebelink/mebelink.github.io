<?php
include("../res/x5engine.php");
$nameList = array("4up","ppv","zaj","kkx","kd6","rpx","vhh","x7y","fdd","cga");
$charList = array("F","D","D","Y","S","T","A","A","Z","7");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
