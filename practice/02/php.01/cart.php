<?php
// 商品情報の取得
$item = $_COOKIE["item"];
$price = $_COOKIE["price"];
?>

<table border="1" cellspacing="0">
	<tr>
		<th>商品</th>
		<th>価格</th>
	</tr>
	<tr>
		<td><?php echo $item; ?></td>
		<td><?php echo $price; ?></td>
	</tr>
</table>

<p>
	<a href="#"">購入手続きに進む</a>
</p>
