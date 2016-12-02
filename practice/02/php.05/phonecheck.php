<?php
$number = isset($_POST['number']) ? $_POST['number']: NULL;

if (!is_null($number)){
	if (preg_match('/^0[09]0\d{8}$/', $number)){
		$result = '携帯電話です';
	} else {
		$result = '携帯電話ではありません';
	}
}
?>

<!doctype html>
<html lang="jp">
<head>
<meta charset="UTF-8" />
<title>電話番号チェッカー</title>
</head>
<body>
	<form action="" method="post">
		<p>
			電話番号： <input type="tel" name="number" value="<?php echo $number?>" />
		</p>
		<p>
			<input type="submit" value='チェック' />
		</p>
	</form>
	<?php if(!is_null($number)):?>
	<p>結果</p>
	<?php echo $result; ?>
	<?php endif; ?>
</body>
</html>
