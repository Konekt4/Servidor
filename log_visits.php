<?php
// Registrar la visita
$file = 'visitas.txt';
$ip = $_SERVER['REMOTE_ADDR'];
$date = date('Y-m-d H:i:s');
$entry = "$date - $ip\n";

file_put_contents($file, $entry, FILE_APPEND);
?>
