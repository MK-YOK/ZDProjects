<?php
session_start();

require_once "util.inc.php";
require_once "libs/qd/qdsmtp.php";
require_once "libs/qd/qdmail.php";

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
else {
  // 不正なアクセス
  // 入力ページへ戻る
  header("Location: contact");
  exit;
}

//--------------------
// メール設定
//--------------------
$from = "zd????@sim.zdrv.com";
$to = get_option('admin_email');

//--------------------
// 「送信」ボタン
//--------------------
if (isset($_POST["send"])) {
  // 管理者へメール送信
  $body = <<<EOT
■お名前
{$name}

■フリガナ
{$kana}

■メールアドレス
{$email}

■お問い合わせ内容
{$message}
EOT;
  $mail = new Qdmail();
  $mail->errorDisplay(false);
  $mail->smtpObject()->error_display = false;
  // 基本設定
  $mail->from($from, "東京観光ツーリスト");
  $mail->to($to, "東京観光ツーリスト 管理者");
  $mail->subject("東京観光ツーリスト 問い合わせ");
  $mail->text($body);
  // SMTP用設定
  $param = array(
    "host"     => "w1.sim.zdrv.com",
    "port"     => 25,
    "from"     => $from,
    "protocol" => "SMTP",
  );
  $mail->smtp(TRUE);
  $mail->smtpServer($param);
  // 送信
  $flag = $mail->send();
  if ($flag == TRUE) {
    // 送信成功
    // セッション変数を破棄
    unset($_SESSION["contact"]);
    // 完了画面へ移動
    header("Location: contact_done");
    exit;
  }
  else {
    // 送信失敗
    // エラー画面へ移動
    // セッション変数は破棄しない
    header("Location: contact_error");
    exit;
  }
}

//--------------------
// 「修正」ボタン
//--------------------
if (isset($_POST["back"])) {
  // 入力ページへ戻る
  header("Location: contact");
  exit;
}
?>
<?php get_header(); ?>
<section class="leader">
	<h2>お問い合わせ（内容確認）</h2>
	<p>お問い合わせ内容をご確認いただき、よろしければ「送信」してください。3営業日以内に担当者より返信させていただきます。</p>
</section>
<section class="inquiry">
	<table>
		<tr>
			<th>名前</th>
			<td><?php echo h($name); ?></td>
		</tr>
		<tr>
			<th>フリガナ</th>
			<td><?php echo h($kana); ?></td>
		</tr>
		<tr>
			<th>メールアドレス</th>
			<td><?php echo h($email); ?></td>
		</tr>
		<tr>
			<th>内容</th>
			<td><?php echo nl2br(h($message)); ?></td>
		</tr>
	</table>
	<form action="" method="post">
	<p>
		<input type="submit" name="back" value="修正する">
		<input type="submit" name="send" value="送信">
	</p>
	</form>
</section>
<?php get_footer(); ?>