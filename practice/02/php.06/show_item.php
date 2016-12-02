<?php
// セッションに保存されている商品名を表示する
session_start();

$item = $_SESSION['item'];
?>
<p>
	保存されている商品は
	<?php echo $item; ?>
	です。
</p>
<p>
	<a href="add_item.php">商品を記録する</a>
</p>
<p>
	<a href="delete_item.php">商品の記録を削除する</a>
</p>
