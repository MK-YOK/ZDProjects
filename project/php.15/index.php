<?php
require_once 'C:\Users\zd2A13\pleiades\xampp\htdocs\miki\libs\common.php';


if ($_SERVER["METHOD"] === "POST") {

	// Get POST values
	$name = $_POST["name"];
	$message = $_POST["message"];

	// Validate POST values
	$valid = true;

	// name
	if ($name === "") {
		$nameError = "なまえを入力してください";
		$valid = false;
	} elseif (mb_strlen($name,"utf8") > 20 ) {
		$nameError = "なまえは20文字以内にしてください";
		$valid = false;
	}

	// message
	if ($message === "") {
		$nameError = "メッセージを入力してください";
		$valid = false;
	}

	// insert into DB
	if($valid === true){
		try {
			// MySQL への接続
			$pdo = new PDO("mysql:host=localhost;dbname=mybbs","bbsuser","abcd");

			// 文字コードの設定
			$pdo->exec("SET NAMES utf8");

			// 記事のデータを取得
			$stmt = $pdo->query("
					select name, message, created
					from posts
					order by created desc
					limit 10
					;");
			$posts = $stmt->fetchAll(PDO::FETCH_ASSOC);
		}
		catch (PDOException $e) {
			echo $e->getMessage();
			exit;
		}
	}
}


try {
	// MySQL への接続
	$pdo = new PDO("mysql:host=localhost;dbname=mybbs","bbsuser","abcd");

	// 文字コードの設定
	$pdo->exec("SET NAMES utf8");

	// 記事のデータを取得
	$stmt = $pdo->query("
			select name, message, created
			from posts
			order by created desc
			limit 10
			;");
	$posts = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
catch (PDOException $e) {
	echo $e->getMessage();
	exit;
}

?>

<!doctype html>
<html lang="ja">
<head>
<meta charset="UTF-8" />
<link rel="stylesheet"
	href="https://necolas.github.io/normalize.css/5.0.0/normalize.css" />
<link rel="stylesheet" href="./common.css" />
<title>ひとこと掲示板</title>
</head>
<body>
	<h1>ひとこと掲示板</h1>
	<h2>メッセージの投稿</h2>
	<form action="" method="post">
		<p class="error">なまえを入力してください</p>
		<p>
			なまえ：<input type="text" name="name" />
		</p>
		<p>


		<p class="error">メッセージを入力してください</p>
		<p>
			<textarea name="message" cols="30" rows="10">
			</textarea>
		</p>
		<p>
			<input type="submit" />
		</p>
	</form>
	<table>
		<?php foreach($posts as $post) :?>
		<tr>
			<td>
				<h2>
					<?php echo $post["name"] ;?>
					[
					<?php echo $post["created"];?>
					]
				</h2>
				<p>
					<?php echo $post["message"]; ?>
				</p>
			</td>
		</tr>
		<?php endforeach;?>
	</table>
</body>
</html>
