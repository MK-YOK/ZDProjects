<?php
session_start();

// Check session
if ($_SESSION['authenticated'] != TRUE)
{
	header('Location: login.php');
	exit;
}

// Get use name and password
$loginid = $_SESSION['loginid'];
$password = $_SESSION['password'];

?>

<!doctype html>
<html lang="jp">
<head>
	<meta charset="UTF-8" />
	<title>会員専用ページ</title>
</head>
<body>
	<h1>会員専用ページへようこそ</h1>
	<p>あなたのユーザIDは<?php echo $loginid?>です。</p>
	<p>このページでは会員専用の情報が閲覧できます。</p>
	<a href="logout.php">ログアウトする</a>
</body>
</html>