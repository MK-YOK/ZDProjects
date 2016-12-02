<?php
$a = array(10, 20, 5 => 50);
$a[3] = 30;
$a[] = "10";
$a[] = "20";
$a[5] = "30";
unset($a[7]);
$a["4"] = 10;

var_dump($a);

$b = array(10, 20, 5);
var_dump($b);
?>