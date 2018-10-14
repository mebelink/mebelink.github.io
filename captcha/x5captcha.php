<?php
include("../res/x5engine.php");
$nameList = array("eep","d23","hpt","3vh","hcl","wdm","5a6","pd3","m8l","5fu");
$charList = array("R","D","E","3","H","N","7","U","T","V");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
