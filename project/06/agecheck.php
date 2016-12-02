<?php
// Get age
if ( isset($_POST["age"]) ) {
	$age = $_POST["age"];
}else {
	$age = NULL;
}

// Judge
if (!is_numeric($age)) {
	$message = "数値を入力してください。";
} elseif ($age < 0){
	$message = "0以上の数字を入力してください。";
} elseif ($age < 20) {
	$message = "お酒を飲んではいけません！";
} else {
	$message = "お酒を飲んでも大丈夫です！";
}

?>

<!doctype html>
<html lang="jp">
<head>
<meta charset="UTF-8" />
<title>年齢確認</title>
</head>
<body>
	<h1>年齢確認</h1>
	<form action="" method="post">
		<p>年齢を入力して「チェック！」ボタンを押してください。</p>
		<p>
			年齢：<input type="text" name="age" value="<?php echo htmlspecialchars($age,ENT_QUOTES);?>" />&nbsp;<input
				type="submit" value="チェック！" />
		</p>
	</form>
	<?php if (!is_null($age)): ?>
	<p>
		判定：
		<?php echo $message; ?>
	</p>
	<?php endif;?>
</body>
</html>
