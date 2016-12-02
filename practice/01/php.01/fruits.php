<?php
// 果物リスト（配列）を作る
$fruits = array("リンゴ","バナナ","ぶどう");

// 配列の内容を表示する
//echo $fruits[0] . "<br>";
//echo $fruits[1] . "<br>";
//echo $fruits[2] . "<br>";

// インデックス番号２番の内容を上書きする
$fruits[2] = "イチゴ";

// インデックス番号３番の内容を追加する
$fruits[3] = "メロン";

var_dump($fruits);
?>