<?php
require_once 'C:\Users\zd2A13\pleiades\xampp\htdocs\miki\libs\common.php';

// Initialize variables
$name = null;
$age = null;
$mail = null;
$showTable = false;

// Get variables
if ($_SERVER["REQUEST_METHOD"] === "POST"){
	$name = $_POST["name"];
	$age = $_POST["age"];
	$mail = $_POST["mail"];
	$showTable = true;
}

?>

<!doctype html>
<html lang="jp">
<head>
<meta charset="UTF-8" />
<title>06.php</title>
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
	<form action="" method="post">
		【名 前】<input type="text" name="name" value="<?php echo h($name);?>"><br />
		 【年 齢】<input type="text" 	name="age" value="<?php echo h($age);?>"><br />
		 【メール】<input type="text" name="mail" value="<?php echo h($mail);?>"><br />
		 <input  type="submit" value="送信">
	</form>
	<?php if($showTable === True): ?>
	<table>
		<tr>
			<th>名前</th>
			<th>年齢</th>
			<th>メール</th>
		</tr>
		<tr>
			<td><?php echo $name; ?></td>
			<td><?php echo $age; ?></td>
			<td><?php echo $mail; ?></td>
		</tr>
	</table>
	<?php endif;?>
</body>
</html>
