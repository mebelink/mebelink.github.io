<?php
include("../res/x5engine.php");
$nameList = array("3er","4ue","h2g","e55","ndu","eg6","5hy","k7a","p4k","k6y");
$charList = array("Y","5","X","8","2","F","A","X","7","2");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
