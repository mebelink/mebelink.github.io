<?php
include("../res/x5engine.php");
$nameList = array("lnp","td2","vp3","w5l","zht","6gv","nm6","8sw","4xd","jhj");
$charList = array("C","D","D","C","N","8","A","5","H","K");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
