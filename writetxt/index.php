<?php

echo $data = 'Today is '.date('D, d - M - Y H:i:s').' and default time zone is: '.date_default_timezone_get();

$data = PHP_EOL.$data.PHP_EOL;

$my_file = 'write.txt';
$handle = fopen($my_file, 'a') or die('Cannot open file:  '.$my_file);
fwrite($handle, $data);
fclose($handle);
