<?php
include("../res/x5engine.php");
$nameList = array("x2t","z8y","6rp","zhv","3ln","mgk","gxm","rfx","vng","hld");
$charList = array("U","6","G","H","R","G","H","D","G","A");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
