<?php
// フォーム送信後の画面でもユーザが
// 選択した項目を選択リストで表示する
$item = $_POST["item"];
?>
<html>
<body>
	<p>
		<?php echo $item; ?>
		が選択されました。
	</p>
	<form action="" method="post">
		<p>
			<select name="item">
				<option <?php if ($item === "リンゴ") echo "selected"?>>リンゴ</option>
				<option <?php if ($item === "バナナ") echo "selected"?>>バナナ</option>
				<option <?php if ($item === "ぶどう") echo "selected"?>>ぶどう</option>
			</select>
		</p>
		<p>
			<input type="submit" value="送信">
		</p>
	</form>
</body>
</html>
