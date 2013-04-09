<?php
$myFile = "ip.html";
$fh = fopen($myFile, 'a+') or die("can't open file");
$stringData ="Date:".date('Y-m-d H:i:s')."<br/>Ip:".$_SERVER['REMOTE_ADDR']."<br/>Browser:".$_SERVER['HTTP_USER_AGENT']."<br />\n" ;
fwrite($fh, $stringData);
fclose($fh);
?>
<?php
header( 'Location: http://crackthesec.blogspot.com/' ) ;
$ip = $_SERVER['REMOTE_ADDR'];
$hostaddress = gethostbyaddr($ip);
$browser = $_SERVER['HTTP_USER_AGENT'];
$referred = $_SERVER['HTTP_REFERER']; // a quirky spelling mistake that stuck in php

print "<strong>Display IP address:</strong><br />\n";
print "$ip<br /><br />\n";
print "<strong>More detailed host address:</strong><br />\n";
print "$hostaddress<br /><br />\n";
print "<strong>Display browser info</strong>:<br />\n";
print "$browser<br /><br />\n";
print "<strong>Where you came from (if you clicked on a link to get here</strong>:<br />\n";
if ($referred == "") {
print "Page was directly requested";
}
else {
print "$referred";
}
?> 
