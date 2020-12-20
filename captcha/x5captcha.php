<?php
include("../res/x5engine.php");
$nameList = array("7gm","2ss","76w","d6e","4rl","kmn","3fn","gxc","pzs","4mv");
$charList = array("X","N","4","V","8","D","D","6","X","J");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
