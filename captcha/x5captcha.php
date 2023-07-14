<?php
include("../res/x5engine.php");
$nameList = array("jsy","ldf","mtf","fn4","hv7","c4j","cty","38c","ad4","8zd");
$charList = array("8","A","V","W","7","L","V","4","Y","L");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
