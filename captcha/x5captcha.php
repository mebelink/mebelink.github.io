<?php
include("../res/x5engine.php");
$nameList = array("hup","c5a","vrv","3me","5p3","4uf","xlu","gfm","n2l","3p3");
$charList = array("A","8","X","5","3","Z","M","X","S","J");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
