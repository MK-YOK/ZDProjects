<!doctype html>
<html lang="jp">
<head>
<meta charset="UTF-8" />
<title>form1.php</title>
</head>
<body>
	<form action="process1.php" method="post">
		<input type="hidden" name="id" value="1234" />
		<p>
			ユーザー名：<input type="text" name="user"/>
		</p>
		<p>
			パスワード：<input type="password" name="pass"/>
		</p>
		<p>
			<input type="submit" value="送信" />
		</p>
	</form>
</body>
</html>
