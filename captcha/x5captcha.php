<?php
include("../res/x5engine.php");
$nameList = array("8wx","22y","6lf","vtn","cee","rev","8av","l7s","fpj","8uw");
$charList = array("6","F","N","A","P","L","C","M","K","L");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
