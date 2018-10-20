<?php
include("../res/x5engine.php");
$nameList = array("2ux","4yd","uym","2jc","t5z","424","zgn","zye","emh","5hc");
$charList = array("A","C","F","F","X","Z","3","L","S","A");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
