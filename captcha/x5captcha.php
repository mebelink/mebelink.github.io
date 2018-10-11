<?php
include("../res/x5engine.php");
$nameList = array("m6y","3my","nyt","6ce","zwy","73p","p54","t7s","ztm","y3e");
$charList = array("N","N","H","T","Y","W","G","W","E","T");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
