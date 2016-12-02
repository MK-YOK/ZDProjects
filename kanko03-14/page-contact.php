<?php
session_start();

require_once "util.inc.php";

//--------------------
// 変数の初期化
//--------------------
$name    = "";
$kana    = "";
$email   = "";
$message = "";

//--------------------
// セッション変数が登録されている場合は読み出す
//--------------------
if (isset($_SESSION["contact"])) {
  $contact = $_SESSION["contact"];
  $name    = $contact["name"];
  $kana    = $contact["kana"];
  $email   = $contact["email"];
  $message = $contact["message"];
}

//--------------------
// 「確認する」ボタン
//--------------------
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $isValidated = TRUE;

  // 入力データの取得
  $name    = $_POST["_name"];
  $kana    = $_POST["_kana"];
  $email   = $_POST["_email"];
  $message = $_POST["_message"];

  // 名前のバリデーション
  if ($name === "") {
    $errorName = "お名前を入力してください";
    $isValidated = FALSE;
  }

  // フリガナのバリデーション
  if ($kana === "") {
    $errorKana = "フリガナを入力してください";
    $isValidated = FALSE;
  }
  elseif (!preg_match("/^[ァ-ヶー 　]+$/u", $kana)) {
    $errorKana = "全角カタカナで入力してください";
    $isValidated = FALSE;
  }

  // メールアドレスのバリデーション
  if ($email === "") {
    $errorEmail = "メールアドレスを入力してください";
    $isValidated = FALSE;
  }
  elseif (!preg_match("/^[^@]+@[^@]+\.[^@]+$/", $email)) {
    $errorEmail = "メールアドレスの形式が正しくありません";
    $isValidated = FALSE;
  }

  // 問い合わせ内容のバリデーション
  if ($message === "") {
    $errorMessage = "お問い合わせ内容を入力してください";
    $isValidated = FALSE;
  }

  // エラーが無ければ確認画面へ移動
  if ($isValidated == TRUE) {
    $contact = array(
      "name"    => $name,
      "kana"    => $kana,
      "email"   => $email,
      "message" => $message,
    );
    $_SESSION["contact"] = $contact;
    header("Location: contact_conf");
    exit;
  }
}
?>
<?php get_header(); ?>
			<section class="leader">
				<h2>お問い合わせ</h2>
				<p>お問い合わせ内容をご入力ください。3営業日以内に担当者より返信させていただきます。</p>
			</section>
			<section class="inquiry">
				<p class="required">* 入力必須項目</p>
				<form action="" method="post">
					<p <?php if (isset($errorName)) echo 'class="error"'; ?>>
						<label for="name">名前<span>*<?php if (isset($errorName)) echo h($errorName); ?></span></label>
						<input type="text" id="name" name="_name" value="<?php echo h($name); ?>" required>
					</p>
					<p <?php if (isset($errorKana)) echo 'class="error"'; ?>>
						<label for="kana">フリガナ<span>*<?php if (isset($errorKana)) echo h($errorKana); ?></span></label>
						<input type="text" id="kana" name="_kana" value="<?php echo h($kana); ?>" placeholder="全角カタカナでご入力ください" required>
					</p>
					<p <?php if (isset($errorEmail)) echo 'class="error"'; ?>>
						<label for="email">メールアドレス<span>*<?php if (isset($errorEmail)) echo h($errorEmail); ?></span></label>
						<input type="email" id="email" name="_email" value="<?php echo h($email); ?>" required>
					</p>
					<p <?php if (isset($errorMessage)) echo 'class="error"'; ?>>
						<label for="message">お問い合わせ内容<span>*<?php if (isset($errorMessage)) echo h($errorMessage); ?></span></label>
						<textarea id="message" name="_message" required><?php echo h($message); ?></textarea>
					</p>
					<p>
						<input type="submit" value="確認する">
					</p>
				</form>
			</section>
<?php get_footer(); ?>