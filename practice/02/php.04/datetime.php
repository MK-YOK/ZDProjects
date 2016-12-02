<?php
$weekday = array("日","月","火","水","木","金","土");

$date = new DateTime();
$index = $date->format('w');
$w = $weekday[$index];

echo $date->format('Y年n月j日');
echo "({$w})";
?>