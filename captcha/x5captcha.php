<?php
include("../res/x5engine.php");
$nameList = array("y5n","pm3","v75","r6v","cr5","7t3","pma","krf","ju8","g5t");
$charList = array("A","U","4","D","Y","S","Y","W","8","P");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
