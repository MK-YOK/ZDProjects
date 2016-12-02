<?php
require_once 'util.inc.php';

if ($_SERVER["REQUEST_METHOD"] === 'POST'){
	$isValid = true;

	$userName = $_POST["userName"];
	$userNameKana = $_POST["userNameKana"];
	$phone = $_POST["phone"];

	if ($userName === '') {
		$nameErorr = '氏名を入力してください';
		$isValid = false;
	} else {
		$nameErorr = '';
	}

	if ($userNameKana === '') {
		$nameKanaErorr = 'フリガナを入力してください';
		$isValid = false;
	} elseif  (!preg_match('/^[ァ-ヶー 　]+$/', $userNameKana)) {
		$nameKanaErorr = 'フリガナの形式が正しくありません';
		$isValid = false;
	} else {
		$nameKanaErorr = '';
	}

	if ($phone === '') {
		$phoneErorr = '電話番号を入力してください';
		$isValid = false;
	} elseif  (!preg_match('/^0[0-9]{9}[0-9]?$/', $phone)) {
		$phoneErorr = '電話番号の形式が正しくありません';
		$isValid = false;
	} else {
		$phoneErorr = '';
	}
} else {
	$userName = '';
	$userNameKana = '';
	$phone = '';

	$nameErorr = '';
	$nameKanaErorr = '';
	$phoneErorr = '';
	$isValid = false;
}

?>

<!doctype html>
<html lang="jp">
<head>
<meta charset="UTF-8" />
<title>ユーザ情報入力</title>
<style>
table {
	border: 1px solid #666;
	border-collapse: collapse;
	width: 450px;
}

th {
	border: 1px solid #666;
	background-color: #ddd;
	padding: 4px;
	width: 100px;
}

td {
	border: 1px solid #666;
	padding: 4px;
}

input {
width: 120px;
}

.error {
	font-weight: bold;
	color: #f00;
	font-size: 11px;
}
</style>
</head>
<body>
	<h1>ユーザ情報入力</h1>
	<p>下のフォームに記入して「送信」ボタンを押してください。</p>


	<?php  if ($isValid): ?>
	<table>
		<tr>
			<th>氏名</th>
			<td><?php echo $userName;?></td>
		</tr>
		<tr>
			<th>フリガナ</th>
			<td><?php echo $userNameKana;?></td>

		</tr>
		<tr>
			<th>電話番号</th>
			<td><?php echo $phone;?></td>
		</tr>
	</table>
	<p>入力ありがとうございました。</p>
	<p>
		<a href="">戻る</a>
	</p>

	<?php else:?>
	<form target="" method="post">
		<table>
			<tr>
				<th>氏名</th>
				<td><input type="text" name="userName"
					value="<?php echo h($userName);?>" />
					<span class="error">
						<?php echo $nameErorr; ?>
					</span></td>
			</tr>
			<tr>
				<th>フリガナ</th>
				<td><input type="text" name="userNameKana"
					value="<?php echo h($userNameKana);?>" />
					<span class="error">
						<?php echo $nameKanaErorr; ?>
					</span></td>
			</tr>
			<tr>
				<th>電話番号</th>
				<td><input type="tel" name="phone" value="<?php echo h($phone);?>" />
					<span class="error">
						<?php echo $phoneErorr; ?>
					</span></td>
			</tr>
		</table>
		<p>
			<input type="submit" value="送信" />
		</p>
	</form>
	<?php endif;?>

</body>
</html>
