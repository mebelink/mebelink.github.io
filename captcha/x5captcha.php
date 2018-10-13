<?php
include("../res/x5engine.php");
$nameList = array("5uw","t8j","lj2","fht","4tp","t5f","74d","ft6","hf4","nf5");
$charList = array("8","R","Z","H","5","S","6","Y","T","J");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
