<?php
// 自分自身に送信するフォーム
$user = $_POST["user"];
?>
<html>
<body>
	<p>
		こんにちは
		<?php echo $user; ?>
		さん！
	</p>
	<form action="" method="post">
		<p>名前：
			<input type="text" name="user" value="<?php echo $user; ?>"/>
		</p>
		<p>
			<input type="submit" value="送信"/>
		</p>
	</form>

</body>
</html>
