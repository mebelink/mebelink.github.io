<?php
include("../res/x5engine.php");
$nameList = array("n5j","fyf","gy4","z2h","vtr","flc","res","v5h","m45","jzn");
$charList = array("7","X","U","Y","F","6","D","8","U","U");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
