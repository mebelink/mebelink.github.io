<?php
include("../res/x5engine.php");
$nameList = array("p8e","re6","77a","g8d","p3r","svf","aat","4cr","vd6","g4h");
$charList = array("Y","G","N","P","W","M","4","D","D","T");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
