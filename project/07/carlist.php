<?php
$cars = array(
		array(
				"maker" => "トヨタ",
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
?>

<!doctype html>
<html lang="jp">
<head>
<meta charset="UTF-8" />
<title>Document</title>
<style>
table {
	border: 1px solid #666666;
	border-collapse: collapse;
	width: 600px;
}

th,td {
	border: 1px solid #666666;
	padding: 4px;
}

th {
	background-color: #dddddd;
}
</style>

</head>
<body>
	<table>
		<caption>forを使ったテーブル</caption>
		<tr>
			<th>メーカー</th>
			<th>モデル</th>
			<th>年式</th>
			<th>価格</th>
		</tr>
		<?php for($i=0; $i < count($cars); $i++) :?>
		<tr>
			<td><?php echo $cars[$i]["maker"]?></td>
			<td><?php echo $cars[$i]["model"]?></td>
			<td><?php echo $cars[$i]["year"]?></td>
			<td><?php echo $cars[$i]["price"]?></td>
		</tr>
		<?php endfor;?>
	</table>
	<table>
		<caption>foreachを使ったテーブル</caption>
		<tr>
			<th>メーカー</th>
			<th>モデル</th>
			<th>年式</th>
			<th>価格</th>
		</tr>
		<?php foreach($cars as $car) :?>
		<tr>
			<td><?php echo $car["maker"]?></td>
			<td><?php echo $car["model"]?></td>
			<td><?php echo $car["year"]?></td>
			<td><?php echo $car["price"]?></td>
		</tr>
		<?php endforeach;?>
	</table>

</body>

</html>

