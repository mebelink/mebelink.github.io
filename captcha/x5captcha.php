<?php
include("../res/x5engine.php");
$nameList = array("kj4","vuy","r7z","p6m","ldz","kg5","xcw","vha","s8t","vy6");
$charList = array("A","7","T","6","U","7","W","P","E","V");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
