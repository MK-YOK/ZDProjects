<?php
require_once 'util.inc.php';

if (isset($_POST["adYear"])) {
	$adYear = $_POST["adYear"];
	$wareki = getWareki($adYear);
} else {
	$adYear = null;
	$wareki = null;
}

?>

<!doctype html>
<html lang="jp">
<head>
<meta charset="UTF-8" />
<title>西暦⇒和暦変換</title>
</head>
<body>
	<h1>西暦⇒和暦変換</h1>
	<p>西暦を入力し、「計算」ボタンを押してください。</p>
	<form target="" method="post">
		<p>
			西暦：<input type="text" size="4" name="adYear"
				value="<?php echo h($adYear); ?> " />年
		</p>
		<p>
			<input type="submit" value="計算" />
		</p>
	</form>
	<?php if ( !is_null($adYear) ): ?>
	<p>
		西暦
		<?php echo h($adYear); ?>
		は、
		<?php echo h($wareki); ?>
		です。
	</p>
	<?php endif; ?>
</body>
</html>
