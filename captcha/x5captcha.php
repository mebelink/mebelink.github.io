<?php
include("../res/x5engine.php");
$nameList = array("hzc","53u","txz","rue","5g5","vx2","y6w","tju","s68","27f");
$charList = array("L","R","R","K","J","8","L","U","E","5");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
