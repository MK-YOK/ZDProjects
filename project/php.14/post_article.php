<?php

try {
	// MySQL への接続
	$pdo = new PDO("mysql:host=localhost;dbname=blog", "sysuser", "secret");
	//エラーモードを例外モードに設定
	$pdo->setAttribute(PDO::ATTR_ERRMODE, pdo::ERRMODE_EXCEPTION);
	// 文字コードの設定
	$pdo->exec("SET NAMES utf8");

	// Get category data
	// 記事のデータを取得
	$stmt = $pdo->query("
			select id, name
			from categories
			order by id;");
	$categoryList = $stmt->fetchAll(PDO::FETCH_ASSOC);

	$categoryNameConv = array_column($categoryList, 'name', 'id');

	// フォームが送信された時のみデータを登録する
	if ($_SERVER["REQUEST_METHOD"] === "POST") {

		// バリデーションフラグ
		$isValidated = TRUE;

		// 入力値の取得
		$title = $_POST["title"];
		$article =  $_POST["article"];
		$category =  $_POST["category"];

		// タイトルのバリデーション
		if ($title === "") {
			$titleError = "※タイトルを入力してください";
			$isValidated = FALSE;
		}
		elseif (mb_strlen($title,"utf8") > 100) {
			$titleError = "※タイトルは 100 文字以内で入力してください";
			$isValidated = FALSE;
		}

		// 記事のバリデーション
		if ($article === "") {
			$articleError = "※記事を入力してください";
			$isValidated = FALSE;
		}
		elseif (mb_strlen($article,"utf8") > 1000) {
			$articleError = "※記事は 1000 文字以内で入力してください";
			$isValidated = FALSE;
		}

		// カテゴリーのバリデーション
		if (!is_numeric($category) or $category < 0) {
			$categoryError = "※カテゴリーは 0 以上の数値を選択してください";
			$isValidated = FALSE;
		}

		// バリデーションで問題がなければデータベースに登録
		if ($isValidated === TRUE){
			// 会員情報の登録
			$stmt = $pdo->prepare("insert into articles
					(category_id, title, article, created)
					values
					(?, ?, ?, NOW())");
			$stmt->execute(array($category, $title, $article));
		} else {
			$isValidated = FALSE;
		}
	}
	else {
		$isValidated = FALSE;
	}
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
<title>Taro's Blog | 記事の投稿</title>
<link href="common.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<div id="container">
		<div id="header">
			<h1>記事の投稿</h1>
		</div>

		<div id="postform">
			<p class="right">
				<a href="index.php">記事の一覧に戻る</a>
			</p>

			<!-- 完了画面のHTML：始まり -->
			<?php if($_SERVER["REQUEST_METHOD"] === "POST"): ?>
			<p>以下の内容で記事を保存しました。</p>
			<table>
				<tr>
					<th>カテゴリ</th>
					<td><?php echo $categoryNameConv[$category]; ?></td>
				</tr>
				<tr>
					<th>タイトル</th>
					<td><?php echo $title; ?></td>
				</tr>
				<tr>
					<th>記事</th>
					<td><?php echo $article; ?></td>
				</tr>
			</table>
			<p>
				<a href="post_article.php">続けて投稿する</a>
			</p>
			<!-- 完了画面のHTML：終わり -->
			<?php else:?>
			<!-- フォーム画面のHTML：始まり -->
			<p>記事を入力し、送信ボタンを押してください。</p>
			<form action="" method="post">
				<table>
					<tr>
						<th>カテゴリ</th>
						<td><p class="error">
								<?php if (isset($titleError)) echo $titleError; ?>
							</p> <select name="category">
							<?php foreach($categoryList as $category): ?>
								<option value="<?php echo $category["id"]; ?>"><?php echo $category["name"]; ?></option>
								<?php endforeach;?>
						</select>
						</td>
					</tr>
					<tr>
						<th>タイトル</th>
						<td>
							<p class="error">
								<?php if (isset($titleError)) echo $titleError; ?>
							</p> <input type="text" name="title" size="60" value="" />
						</td>
					</tr>
					<tr>
						<th>記事</th>
						<td>
							<p class="error">
								<?php if (isset($articleError)) echo $articleError; ?>
							</p> <textarea name="article" cols="60" rows="5"></textarea>
						</td>
					</tr>
				</table>
				<p>
					<input type="submit" value="送信" />
				</p>
			</form>
			<!-- フォーム画面のHTML：終わり -->
			<?php endif; ?>

		</div>

	</div>
</body>
</html>
