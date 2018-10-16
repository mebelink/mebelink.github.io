<?php
include("../res/x5engine.php");
$nameList = array("usj","8gx","yej","pxs","k8n","x8w","xua","ca6","rgz","nzc");
$charList = array("K","M","W","D","X","R","8","8","N","F");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
