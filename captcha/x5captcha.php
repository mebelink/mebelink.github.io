<?php
include("../res/x5engine.php");
$nameList = array("xyp","lum","nft","nct","ws3","8jt","u2z","6hn","rwp","485");
$charList = array("X","3","N","E","4","8","X","T","2","Z");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
