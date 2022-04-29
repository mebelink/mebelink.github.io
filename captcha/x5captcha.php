<?php
include("../res/x5engine.php");
$nameList = array("36j","4ul","mnn","hyt","ekz","zlw","655","sul","t8v","t2h");
$charList = array("J","T","4","W","3","H","R","L","4","R");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
