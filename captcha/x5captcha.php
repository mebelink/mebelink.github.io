<?php
include("../res/x5engine.php");
$nameList = array("u83","fjc","hs5","xye","lna","jax","hjr","yap","46k","5s5");
$charList = array("T","N","A","A","4","J","5","D","8","4");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
