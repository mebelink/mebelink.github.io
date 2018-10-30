<?php
include("../res/x5engine.php");
$nameList = array("fv5","ua7","tja","3a7","lhf","v54","s5a","j8r","py5","4p5");
$charList = array("6","6","S","Y","P","M","M","K","X","E");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
