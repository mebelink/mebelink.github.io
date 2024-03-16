<?php
include("../res/x5engine.php");
$nameList = array("scc","fv2","gwj","kea","2su","g7y","dcd","2lc","aj6","4cm");
$charList = array("A","W","R","T","T","L","N","G","T","D");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
