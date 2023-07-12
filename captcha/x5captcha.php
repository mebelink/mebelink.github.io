<?php
include("../res/x5engine.php");
$nameList = array("mru","axs","tkr","k7g","yjf","3um","wyx","pv4","pd6","hxt");
$charList = array("H","R","5","Y","N","X","X","J","7","C");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
