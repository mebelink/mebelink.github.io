<?php
include("../res/x5engine.php");
$nameList = array("3mr","s6s","7nt","vru","ptm","xtz","dj3","dl3","cr4","wpc");
$charList = array("V","3","U","T","Z","L","T","A","N","J");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
