<?php
require_once 'Member.class.php';

$m1 = new Member("山田太郎");
$m1->age = 21;
$m1->address = "東京都";

$m2 = new Member("鈴木次郎");
$m2->age = 34;
$m2->address = "大阪府";

$m1->showInfo();
$m2->showInfo();
?>

