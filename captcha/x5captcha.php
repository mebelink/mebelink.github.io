<?php
include("../res/x5engine.php");
$nameList = array("d53","6ek","5r7","xsf","xrw","aze","zdh","dcv","v4j","a3w");
$charList = array("G","T","6","5","D","2","N","5","F","G");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
