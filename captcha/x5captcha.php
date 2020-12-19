<?php
include("../res/x5engine.php");
$nameList = array("lll","xyt","477","756","e2d","ucp","tt3","sh6","e8u","gmn");
$charList = array("X","H","V","L","C","E","H","W","W","H");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
