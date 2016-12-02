<?php
// フォームで送信された値を使って計算をする
$value1 = $_POST["value1"];
$value2 = $_POST["value2"];
$result = $value1 + $value2;

var_dump($_POST);

?>

<html>
<body>
	<form action="" method="post">
		<p>
			<input type="text" name="value1" value="<?php echo $value1; ?>" /> +
			<input type="text" name="value2" value="<?php echo $value2; ?>" /> =
			<?php echo $result;?>
		</p>
		<p>
			<input type="submit" value="計算" />
		</p>
	</form>
</body>

</html>

