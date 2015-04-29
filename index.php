<?php
$ip=$_SERVER['SERVER_ADDR'];
$host=gethostbyaddr($ip);
echo "My IP=".$ip." And ";
echo "My Host=".$host;
?>
