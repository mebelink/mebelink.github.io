<?php
include("../res/x5engine.php");
$nameList = array("a36","x6v","mdn","xrw","fjt","vtl","sr7","mgs","fcx","gne");
$charList = array("4","G","L","R","E","N","U","R","Y","E");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
