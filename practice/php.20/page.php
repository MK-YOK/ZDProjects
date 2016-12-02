<?php
try {
	// Connect to DB
	$pdo = new PDO("mysql:host=localhost;dbname=mydb", "sysuser", "secret");
	// Set error mode
	$pdo->setAttribute(PDO::ATTR_ERRMODE, pdo::ERRMODE_EXCEPTION);
	// Set character code
	$pdo->exec("SET NAMES utf8");

	// Get count of all data
	$sql = "select count(*) as hits from members";
	$stmt = $pdo->query($sql);
	$res = $stmt->fetch();
	$hits = $res["hits"];

	// Calculate page count
	$numPages = ceil($hits / 3);

	// Get page number
	if (isset($_GET["p"])) {
		$page = $_GET["p"];
	} else {
		$page = 1;
	}

	// Calculate LIMIT offset
	$offset = ($page - 1) * 3;

	// Get member list
	$sql = "select * from members limit {$offset},3";
	$stmt = $pdo->query($sql);
	$memberList = $stmt->fetchAll();
}
catch (PDOException $e) {
	echo $e->getMessage();
	exit;
}
?>
<!doctype html>
<html lang="ja">
<head>
<meta charset="UTF-8" />
<title>会員管理システム</title>
</head>
<body>
	<p>
		件数：
		<?php echo $hits; ?>
	</p>
	<p>
		ページ数：
		<?php echo $numPages; ?>
	</p>
	<p>
		<?php for ($i = 1; $i <= $numPages; $i++): ?>
		<a href="?p=<?php echo $i; ?>"><?php echo $i; ?> </a> |
		<?php endfor; ?>
	</p>
	<table>
		<tr>
			<th>会員</th>
			<th>氏名</th>
			<th>年齢</th>
			<th>住所</th>
			<th>登録日時</th>
		</tr>
		<?php foreach ($memberList as $member): ?>
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
