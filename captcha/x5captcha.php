<?php
include("../res/x5engine.php");
$nameList = array("rgx","tfe","p5z","vte","ck8","7xv","za6","7tw","7zg","daj");
$charList = array("Z","F","K","L","T","7","E","U","S","6");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
