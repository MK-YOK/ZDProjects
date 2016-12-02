<?php
//require_once 'util.inc.php';
require_once 'C:\Users\zd2A13\pleiades\xampp\htdocs\miki\libs\common.php';

// Start session
session_start();

// Already logged in?
if (isset($_SESSION['authenticated']) &&
		$_SESSION['authenticated'] = TRUE)
{
	// Go to the member page
	header("Location: 07_member.php");
}

// Check ID and password
if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
	// Save ID and pasword
	$loginid = $_POST['loginid'];
	$password = $_POST['password'];

	if(	$loginid === 'taro' &&
			$password === 'abcd')
	{
		// Save ID and pasword to the session
		$_SESSION['loginid'] = $loginid;
		$_SESSION['password'] = $password;

		$_SESSION['authenticated'] = TRUE;

		// Go to the member page
		header("Location: 07_member.php");

		exit;
	} else {
		$loginError = 'ユーザーIDかパスワードが正しくありません';
	}
} else {
	$loginid = NULL;
	$password = NULL;
	$loginError = NULL;
}

?>
<html>
<head>
<style>
.error {
	color: red;
}
</style>
</head>
<body>
	<h1>ログイン</h1>
	<?php if ($loginError != NULL):?>
	<p class="error">
		<?php echo h($loginError); ?>
	</p>
	<?php endif;?>
	<p>ユーザーIDとパスワードを入力して「ログイン」ボタンを押してください</p>
	<form target='' method='post'>
		<p>
			ユーザID&nbsp;&nbsp;<input type="text" name="loginid"
				value="<?php echo $loginid; ?>" />
		</p>
		<p>
			パスワード<input type="text" name='password' />
		</p>
		<p>
			<input type='submit' value='ログイン' />
		</p>
	</form>
</body>
</html>
