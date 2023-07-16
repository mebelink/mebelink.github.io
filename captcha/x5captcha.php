<?php
include("../res/x5engine.php");
$nameList = array("lp3","asa","gv2","a4h","g2r","4y2","wyr","7wu","88k","z84");
$charList = array("L","W","L","Z","W","L","D","W","W","4");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
