<?php
$user = $_POST["user"];
$pass = $_POST["pass"];
$id = $_POST["id"];
?>
<html>
<body>
	<p><?php echo $user; ?>さん、こんにちは！</p>
	<p>あなたのパスワードは「<?php echo $pass; ?>」です。</p>
	<p>ID: <?php echo $id; ?></p>
</body>
</html>