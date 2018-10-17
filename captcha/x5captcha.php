<?php
include("../res/x5engine.php");
$nameList = array("3g5","5gw","8kt","rmp","jez","cjr","kuw","hmz","4uu","w7w");
$charList = array("N","4","Y","3","C","C","6","L","P","C");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
