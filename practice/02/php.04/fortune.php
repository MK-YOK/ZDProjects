<?php

$fortunes = array("大吉", "中吉", "小吉", "吉", "末吉", "凶", "大凶");
$choice = rand(0,6);
echo "今日の運勢は{$fortunes[$choice]}です！";

?>
