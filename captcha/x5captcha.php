<?php
include("../res/x5engine.php");
$nameList = array("pnh","vte","h83","czs","8hm","cap","y7r","spz","epe","uuh");
$charList = array("M","C","R","R","U","T","Z","K","E","C");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
