<?php

if (isset($_POST['month'])) {
	$month = $_POST['month'];
} else {
	$month = NULL;
}

$birthstoneTable = array(
		1 => "ガーネット",
		2 => "アメジスト",
		3 => "アクアマリン",
		4 => "ダイヤモンド",
		5 => "エメラルド",
		6 => "パール",
		7 => "ルビー",
		8 => "ペリドット",
		9 => "サファイア",
		10 => "オパール",
		11 => "	トパーズ",
		12 => "ターコイズ"
				);
?>

<!doctype html>
<html lang="jp">
<head>
<meta charset="UTF-8" />
<title>誕生石</title>
</head>
<body>
	<h1>誕生石</h1>
	<p><?php
	 if (is_null($month) == False){
	 	echo $month.'月の誕生石は'.$birthstoneTable[$month].'です！';
	 }

	 ?></p>
	<form action=""  method="post">
		<p>
			誕生石を選んでください： <select name="month">
				<?php
				for ($i = 1; $i <= 12; $i++) {
					if ($i == $month){
						// Selected month
						echo '<option value = '.$i.' selected>'.$i.'月</option>';
					} else {
						// Other Months
						echo '<option value = '.$i.'>'.$i.'月</option>';
					}
				}
				?>

			</select>
			<input type="submit" value="送信">
		</p>
		</form>
</body>
</html>
