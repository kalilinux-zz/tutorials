<?php
$myFile = "ip.html";
$fh = fopen($myFile, 'a+') or die("can't open file");
$stringData ="Date:".date('Y-m-d H:i:s')."<br/>Ip:".$_SERVER['REMOTE_ADDR']."<br/>Browser:".$_SERVER['HTTP_USER_AGENT']."<br />\n" ;
fwrite($fh, $stringData);
fclose($fh);
?>
