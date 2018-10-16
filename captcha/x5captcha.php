<?php
include("../res/x5engine.php");
$nameList = array("43j","dnz","fcp","vzs","t45","gft","p75","4xm","2ep","sw2");
$charList = array("K","R","C","F","Z","5","S","X","8","G");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
