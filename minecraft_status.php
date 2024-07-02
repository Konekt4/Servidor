<?php
$url = 'https://api.mcsrvstat.us/2/bonkers-rasp.duckdns.org';
$response = file_get_contents($url);
echo $response;
?>
