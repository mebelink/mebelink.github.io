<?php
include("../res/x5engine.php");
$nameList = array("8mj","8ll","5p8","d62","8xm","4ps","u5x","haa","sax","7dm");
$charList = array("6","2","3","Y","V","2","N","C","F","G");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
