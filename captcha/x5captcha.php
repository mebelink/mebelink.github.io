<?php
include("../res/x5engine.php");
$nameList = array("knr","hcs","kns","3n6","d55","vc6","zd2","pmz","aja","ls4");
$charList = array("L","C","H","V","8","8","V","7","P","D");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
