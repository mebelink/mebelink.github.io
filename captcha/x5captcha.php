<?php
include("../res/x5engine.php");
$nameList = array("nwu","zfx","kdx","2de","hlm","cn6","6sa","85n","hrt","y48");
$charList = array("3","U","R","T","3","4","H","7","H","6");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
