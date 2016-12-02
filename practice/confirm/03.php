<?php

// make X and Y arrays
$xArray = range(1,9,1);
$yArray = range(1,9,1);

?>

<!doctype html>
<html lang="jp">
<head>
<meta charset="UTF-8" />
<title>九九表</title>
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
	<h1>九九表</h1>
	<table>

		<!-- Make the column header -->
		<tr>
			<th></th>
			<?php foreach ($xArray as $x):	?>
			<th><?php echo $x;?></th>
			<?php endforeach;?>
		</tr>
		<!-- Make the table body -->
		<?php foreach ($yArray as $y): ?>
		<tr>
			<!-- Make the row header -->
			<th><?php echo $y;?></th>
			<?php foreach ($xArray as $x): ?>
			<td><?php echo $x * $y; ?></td>
			<?php endforeach;?>
		</tr>
		<?php endforeach;?>

	</table>
</body>
</html>
