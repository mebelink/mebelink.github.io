<?php
include("../res/x5engine.php");
$nameList = array("lr3","2un","pgr","4su","fvp","phm","wff","z47","lc8","ewa");
$charList = array("P","R","Y","2","X","X","Z","H","2","N");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
