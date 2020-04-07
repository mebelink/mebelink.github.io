<?php
include("../res/x5engine.php");
$nameList = array("5df","6dv","aj3","mau","xsj","hk7","8lh","acx","w56","u7l");
$charList = array("7","M","M","4","7","Y","P","Z","L","M");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
