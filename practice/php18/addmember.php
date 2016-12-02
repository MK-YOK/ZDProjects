<?php
// フォームが送信された時のみデータを登録する
if ($_SERVER["REQUEST_METHOD"] === "POST") {
	// バリデーションフラグ
	$isValidated = TRUE;

	// 入力値の取得
	$name = $_POST["name"];
	$age =  $_POST["age"];
	$address =  $_POST["address"];

	// 氏名のバリデーション
	if ($name === "") {
		$nameError = "※氏名を入力してください";
		$isValidated = FALSE;
	}
	elseif (mb_strlen($name,"utf8") > 10) {
		$nameError = "※氏名は 10 文字以内で入力してください";
		$isValidated = FALSE;
	}

	// 年齢のバリデーション
	if ($age === "") {
		$age = NULL;
	}elseif (!is_numeric($age) or $age < 0) {
		$ageError = "※年齢は 0 以上の数値を入力してください";
		$isValidated = FALSE;
	}

	// バリデーションで問題がなければデータベースに登録
	if ($isValidated === TRUE){
		try {
			// MySQL への接続
			$pdo = new PDO("mysql:host=localhost;dbname=mydb", "sysuser", "secret");
			//エラーモードを例外モードに設定
			$pdo->setAttribute(PDO::ATTR_ERRMODE, pdo::ERRMODE_EXCEPTION);
			// 文字コードの設定
			$pdo->exec("SET NAMES utf8");
			// 会員情報の登録
			$stmt = $pdo->prepare("insert into members
					(name, age, address, created)
					values
					(?, ?, ?, NOW())");
			$stmt->execute(array($name, $age, $address));
		}
		catch (PDOException $e) {
			echo $e->getMessage();
			exit;
		}
	} else {
		$isValidated = FALSE;
	}
}
else {
	$isValidated = FALSE;
}
?>
<!doctype html>
<html lang="ja">
<head>
<meta charset="UTF-8" />
<title>会員管理システム</title>
<style type="text/css">
.error {
	color: #f00;
}
</style>
</head>
<body>
	<h1>会員登録</h1>
	<?php if ($isValidated === TRUE): ?>
	<p>登録完了しました。</p>
	<p>
		<a href="">登録画面へ戻る</a>
	</p>
	<?php else: ?>
	<form action="" method="post">
		<?php if (isset($nameError)): ?>
		<p class="error">
			<?php echo $ageError; ?>
		</p>
		<?php endif;?>
		<p>
			氏名：<input type="text" name="name" value="" <?php echo $name; ?> />
		</p>
		<?php if(isset($ageError)): ?>
		<p class="error">
			<?php echo $ageError; ?>
		</p>
		<?php endif; ?>
		<p>
			年齢：<input type="text" name="age" />
		</p>
		<p>
			住所：<input type="text" name="address" />
		</p>
		<p>
			<input type="submit" value="送信" />
		</p>
	</form>
	<?php endif;?>
</body>
</html>
