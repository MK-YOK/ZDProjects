<?php
// 果物の値段リストを作成する
$priceList = array(
  "リンゴ" => 100,
  "バナナ" => 200,
  "ぶどう" => 300
);

// イチゴ（400円）を追加する
$priceList["イチゴ"] = 400;

// リンゴの値段を80円に変更する
$priceList["リンゴ"] = 80;

// 配列の内容をvar_dumpで表示する
var_dump($priceList);
?>