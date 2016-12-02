<?php
require_once 'C:\Users\zd2A13\pleiades\xampp\htdocs\miki\libs\common.php';

session_start();

// Check session
if ($_SESSION['authenticated'] != TRUE)
{
	header('Location: 07_login.php');
	exit;
}

// Get use name and password
$loginid = $_SESSION['loginid'];
$password = $_SESSION['password'];

// Initial UI selections
$num = 3;
$size = 100;

// Method POST?
if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
	// ** File Upload **
	// Upload ok?
	if ($_FILES['userfile']['error'] === UPLOAD_ERR_OK)
	{
		// Get file name and temp file path
		$name = $_FILES['userfile']['name'];
		$temp = $_FILES['userfile']['tmp_name'];

		// Move the file to the upload folder
		$result = move_uploaded_file($temp,"uploads/" . $name);
		// Move failed?
		if ($result !== TRUE)
		{
			$message = "ファイルの移動に失敗しました";
		}
	}
	// No file?
	elseif ($_FILES['userfile']['error'] === UPLOAD_ERR_NO_FILE)
	{
		;
	} else {
		// Other error
		$message = "ファイルのアップロードに失敗しました";
	}

	// ** UI Selection **
	$num = intval($_POST["num"]);
	$size = intval($_POST["size"]);

}

// Get uploaded files
$files = glob("uploads/*.jpg");

?>

<!doctype html>
<html lang="jp">
<head>
	<meta charset="UTF-8" />
	<title>会員専用ページ</title>
<style>
table {
	border: 1px solid #666666;
	border-collapse: collapse;
	width: 600px;
}

th {
	border: 1px solid #666666;
	background-color: #dddddd;
	padding: 4px;
}

td {
	border: 1px solid #666666;
	padding: 4px;
}

.error {
	color: #ff0000;
}
</style>

	</head>
<body>
	<h1>会員専用ページへようこそ</h1>
	<p>あなたのユーザIDは<?php echo $loginid?>です。</p>
	<p>このページでは会員専用の情報が閲覧できます。</p>

	<h1>画像ギャラリー</h1>
	<form action="" target="" method="post" enctype="multipart/form-data">
		<p>
			ファイル：<input type="file" value="ファイルを選択" name="userfile" /> <input
				type="submit" value="送信" />
		</p>
		<p>
			列数：
			<input type="radio" name="num" value="3" <?php echo ($num === 3 ? "checked":""); ?>/>3
			<input type="radio"	name="num" value="4" <?php echo ($num === 4 ? "checked":""); ?>/>4
			<input type="radio" name="num" value="5" <?php echo ($num === 5 ? "checked":""); ?>/>5
			<input type="radio" name="num" value="6" <?php echo ($num === 6 ? "checked":""); ?>/>6
		</p>
		<p>
			画像幅：
			<select name="size">
				<option value="100" <?php echo ($size === 100 ? "selected":""); ?>>100 px</option>
				<option value="150" <?php echo ($size === 150 ? "selected":""); ?>>150 px</option>
				<option value="200" <?php echo ($size === 200 ? "selected":""); ?>>200 px</option>
			</select>
		</p>
	</form>
	<?php if (isset($message)) :	echo $message; endif; ?>
	<table>
		<tr>
			<th>画像一覧</th>
		</tr>
		<?php if (count($files) > 0): ?>
		<?php $counter = 1; ?>
		<?php foreach($files as $file): ?>
		<?php $file = mb_convert_encoding($file, "utf8","SJIS"); ?>
		<?php if (($counter % $num) === 1): ?>
		<tr>
			<?php endif; ?>
			<td><img src="<?php echo $file; ?>" alt="<?php echo $file; ?>"
				width="<?php echo $size; ?>" /></td>
			<?php if (($counter % $num) === 0): ?>
		</tr>
		<?php endif; ?>
		<?php $counter++;?>
		<?php endforeach;?>
		<?php if (($counter % $num) !== 0): ?>
		</tr>
		<?php endif; ?>
		<?php else: ?>
		<tr>
			<td>アップロードされたファイルはありません。</td>
		</tr>
		<?php endif; ?>
	</table>




	<a href="07_logout.php">ログアウトする</a>
</body>
</html>