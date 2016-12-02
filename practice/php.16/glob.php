<?php
$list = glob('*.php');

?>
<!doctype html>
<html lang="jp">
<head>
	<meta charset="UTF-8" />
	<title>ファイルリスト</title>
</head>
<body>
<h1>ファイルリスト</h1>
<ul>
<?php foreach ($list as $file): ?>
<li><?php echo $file; ?></li>
<?php endforeach;?>
</ul>
</body>
</html>