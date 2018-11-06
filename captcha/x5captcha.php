<?php
include("../res/x5engine.php");
$nameList = array("3ry","l2p","cpy","rah","rrd","7a5","hjk","5rh","4gt","e3w");
$charList = array("K","F","N","S","C","P","W","D","E","C");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
