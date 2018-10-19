<?php
include("../res/x5engine.php");
$nameList = array("8tf","2xr","587","3rd","27l","z7l","mxj","wm5","s75","3td");
$charList = array("4","2","N","X","A","P","E","7","P","R");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
