<?php

echo "Hello AzSharpers!";
echo $_SERVER['SERVER_ADDR'];
$realIP = file_get_contents("http://ipecho.net/plain");
echo $realIP

?>
