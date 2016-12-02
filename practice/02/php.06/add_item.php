<?php
require_once 'common.php';
// 商品をセッションに保存する
session_start();

$_SESSION['item'] = 'テレビ';
?>

<p>商品を記録しました。</p>
<p>
	<a href="show_item.php">記録した商品を見る</a>
</p>
