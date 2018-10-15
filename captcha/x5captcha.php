<?php
include("../res/x5engine.php");
$nameList = array("5tz","7x6","7me","vvv","cls","e4u","h83","ev7","3vf","em5");
$charList = array("3","W","R","U","S","W","D","V","3","V");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
