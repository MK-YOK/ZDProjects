<?php



?>

<!doctype html>
<html lang="jp">
<head>
<meta charset="UTF-8" />
<title>生年月日の入力</title>
</head>
<body>
	<h1>生年月日の入力</h1>

	<form action="birthDay">
		<p>
			<select name="year">
				<?php for ($y = 1910; $y <= 2010; $y++): ?>
				<option value="<?php echo $y ?>">
					<?php echo $y ?>
				</option>
				<?php endfor; ?>
			</select>年 <select name="month">
				<?php for ($m = 1; $m <= 12; $m++): ?>
				<option value="<?php echo $m ?>">
					<?php echo $m ?>
				</option>
				<?php endfor; ?>
			</select>月 <select name="day">
				<?php for ($d = 1; $d <= 31; $d++): ?>
				<option value="<?php echo $d ?>">
					<?php echo $d ?>
				</option>
				<?php endfor; ?>
			</select>日
		</p>
	</form>

</body>

</html>
