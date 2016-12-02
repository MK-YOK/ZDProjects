<?php
// MySQL への接続
$pdo = new PDO("mysql:host=localhost;dbname=mydb","sysuser","secret");
// 文字コードの設定
$pdo->exec("SET NAMES utf8");
// 会員のリストを取得
$stmt = $pdo->query("select * FROM members");
$memberList = $stmt->fetchAll(PDO::FETCH_ASSOC);
// 会員リストの表示
//var_dump($memberList);
?>
<!doctype html>
<html lang="ja">
<head>
	<meta charset="UTF-8" />
	<title>会員管理システム</title>
</head>
<body>
<h1>会員リスト</h1>
<table>
	<tr>
		<th>会員</th>
		<th>氏名</th>
		<th>年齢</th>
		<th>住所</th>
		<th>登録日時</th>
	</tr>
<?php foreach ($memberList as $member) :?>
<tr>
	<td><?php echo $member["id"]; ?></td>
	<td><?php echo $member["name"]; ?></td>
	<td><?php echo $member["age"]; ?></td>
	<td><?php echo $member["address"]; ?></td>
	<td><?php echo $member["created"]; ?></td>
</tr>
<?php endforeach; ?>
</table>
</body>
</html>
