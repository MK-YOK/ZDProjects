<?php
require_once 'C:\Users\zd2A13\pleiades\xampp\htdocs\miki\libs\common.php';

// セッションを完全に破棄する
session_start();

$_SESSION = array();
$params = session_get_cookie_params();
setcookie(session_name(), "", time() - 36000,
		$params["path"], $params["domain"],
		$params["secure"], $params["httponly"]);
session_destroy();
?>

<!doctype html>
<html lang="jp">
<head>
<meta charset="UTF-8" />
<title>ログアウトページ</title>
</head>
<body>
	<p>グアウトしました</p>
	<a href="07_login.php">ログインページへ</a>
</body>
</html>
