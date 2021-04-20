<?php
include("../res/x5engine.php");
$nameList = array("dl6","rxc","xfd","447","jy5","fyn","2zh","maj","wgn","ghl");
$charList = array("Z","W","8","8","3","A","7","X","E","8");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
