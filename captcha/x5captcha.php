<?php
include("../res/x5engine.php");
$nameList = array("kxv","w5s","8w4","mec","wd4","mm8","hcw","lcx","2cl","5fx");
$charList = array("7","U","X","L","W","X","X","Z","V","V");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
