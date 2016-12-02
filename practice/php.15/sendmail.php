<?php
// Qdmailを使ったメール送信
require_once 'libs/qd/qdsmtp.php';
require_once 'libs/qd/qdmail.php';

// SMTPの設定
$param = array(
		'host' => 'w1.sim.zdrv.com',
		'port' => 25,
		'from' => 'zd2A13@sim.zdrv.com',
		'protocol' => 'SMTP'
);

// メールの送信
$mail = new Qdmail();
//$mail->errorDisplay(FALSE);
//$mail->smtpObject()->error_display = FALSE;
$mail->from('zd2A13@sim.zdrv.com','株式会社○○サポート係');
$mail->to('zd2A13@sim.zdrv.com','山田太郎様');
$mail->subject('PHPからメール送信のテスト');
$mail->text('こんにちは！
		このメールはPHPのプログラムから送信しています。');
$mail->smtp(TRUE);
$mail->smtpServer($param);
$flag = $mail->send();
if ($flag == TRUE)
{
	echo "メールを送信しました。";
}	else {
	echo "メールの送信に失敗しました。";
}

?>
