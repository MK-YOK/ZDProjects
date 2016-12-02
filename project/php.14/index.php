<?php
require_once 'C:\Users\zd2A13\pleiades\xampp\htdocs\miki\libs\common.php';

try {
	// MySQL への接続
	$pdo = new PDO("mysql:host=localhost;dbname=blog","sysuser","secret");

	// 文字コードの設定
	$pdo->exec("SET NAMES utf8");

	// 記事のデータを取得
	$stmt = $pdo->query("
			select a.title, a.created, c.name as category_name, a.article
			from articles a join categories c
			on a.category_id = c.id
			order by a.created;");
	$articleList = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
catch (PDOException $e) {
	echo $e->getMessage();
	exit;
}

?>

<!doctype html>
<html lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Taro's Blog</title>
<link href="common.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<div id="container">
		<div id="header">
			<h1>
				<a href="index.html">Taro's Blog</a>
			</h1>
		</div>
		<div id="main">
			<?php foreach($articleList as $article): ?>
			<div class="article">
				<div class="title">
					<h2>
						<?php echo h($article["title"]); ?>
					</h2>
					<h3>
						<?php echo h($article["created"]); ?>
						|
						<?php echo $article["category_name"]; ?>
					</h3>
				</div>
				<div class="text">
					<?php echo h($article["article"]); ?>
				</div>
			</div>
			<?php endforeach; ?>
		</div>
		<div id="side">
			<div class="sidebox">
				<h2>カテゴリ</h2>
				<ul>
					<li><a href="?c=1">カテゴリ1</a></li>
					<li><a href="?c=2">カテゴリ2</a></li>
				</ul>
			</div>
			<p class="right">
				<a href="post_article.php">記事の投稿</a>
			</p>
		</div>
	</div>
</body>
</html>
