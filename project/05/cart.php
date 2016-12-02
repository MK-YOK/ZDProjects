<?php
error_reporting(E_ALL | E_STRICT);

$goods = array(
		array("name" => "和風柄レターセット","unitPrice" => 980),
		array("name" => "毛筆ペン","unitPrice" => 240)
);

$count = $_POST["count"];

//var_dump($count);

?>
<!doctype html>
<html lang="jp">
<head>
<meta charset="UTF-8" />
<title>ショッピングカート</title>
<style>
table {
	border: 1pxsolid #666666;
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
	<h1>ショッピングカート</h1>
	<form action="" method="post">
		<table>
			<tr>
				<th>商品名</th>
				<th>単価</th>
				<th>数量</th>
				<th>小計</th>
			</tr>
			<?php
			$i = 0;
			$totalPrice = 0;
			foreach ($goods as $target){
				//			var_dump($target);
				echo '<tr>';
				echo '<td>'.$target["name"].'</td>';
				echo '<td>'.$target["unitPrice"].'</td>';
				echo '<td><input type="text" name="count[]" value = "'.htmlspecialchars($count[$i],ENT_QUOTES).'"></td>';
				$price = $target["unitPrice"] * $count[$i];
				echo '<td>'.htmlspecialchars($price,ENT_QUOTES).'</td>';
				$totalPrice += $price;
				$i++;
				echo "</tr>";
			}
			echo '<tr>';
			echo '<th colspan="3">合計</th>';
			echo '<td>'.htmlspecialchars($totalPrice,ENT_QUOTES).'</td>';
			echo '</tr>';

			?>
		</table>
		<br> <input type="submit" value="送信" />
	</form>
</body>
</html>
