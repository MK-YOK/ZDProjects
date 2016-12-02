<?php
error_reporting(E_ALL);
$cars = array(
		array(
				maker => "トヨタ",
				"model" => "プリウス",
				"year" => 2004,
				"price" => 1100000
		),
		array(
				"maker" => "ホンダ",
				"model" => "アコード",
				"year" => 2009,
				"price" => 2200000
		),
		array(
				"maker" => "日産",
				"model" => "マーチ",
				"year" => 2003,
				"price" => 580000
		),
		array(
				"maker" => "ポルシェ",
				"model" => "ボクスター",
				"year" => 2008,
				"price" => 4500000
		),
		array(
				"maker" => "BMW",
				"model" => "Z8",
				"year" => 2002,
				"price" => 12500000
		)
);

var_dump($cars);

?>