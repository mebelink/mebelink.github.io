<?php
include("../res/x5engine.php");
$nameList = array("c34","z6z","c32","4zk","pj4","6kl","7cy","tj8","tc2","afn");
$charList = array("8","4","3","Z","S","U","N","J","V","Z");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
