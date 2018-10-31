<?php
include("../res/x5engine.php");
$nameList = array("fly","cpp","ffx","al6","zdw","wzy","82k","u5h","vxf","uk4");
$charList = array("6","H","2","4","3","C","5","4","H","U");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
