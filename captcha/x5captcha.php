<?php
include("../res/x5engine.php");
$nameList = array("l88","jyl","vkr","zyh","ucw","tgn","67l","hf2","er6","6pm");
$charList = array("L","Y","4","H","A","S","5","8","Z","L");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
