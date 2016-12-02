<?php
// 会員のリストを作成する
$member = array(
		array(
				"name" => "山田太郎",
				"birthday" => "1990-06-27",
				"address" => "東京都",
				"points" => 500
				),
		array(
				"name" => "鈴木次郎",
				"birthday" => "1972-02-24",
				"address" => "大阪府",
				"points" => 1200
				)
		);

$member[1]["address"] = "奈良県";

// 配列の内容をvar_dumpで表示する
var_dump($member);

?>