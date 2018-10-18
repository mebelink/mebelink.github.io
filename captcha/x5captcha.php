<?php
include("../res/x5engine.php");
$nameList = array("lak","vzx","lwr","pey","zj2","ka6","d7d","8vh","2cz","3zd");
$charList = array("Y","4","H","J","4","S","7","P","5","8");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
