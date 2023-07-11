<?php
include("../res/x5engine.php");
$nameList = array("ph7","5se","h4e","zpz","scp","tzm","mfz","st2","3tx","hvc");
$charList = array("R","A","U","X","7","W","6","8","L","3");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
