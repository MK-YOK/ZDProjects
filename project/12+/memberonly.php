<?php
require_once '.\Chart.class.php';
//require_once "..\..\miki\common\common.php";
require_once 'C:\Users\zd2A13\pleiades\xampp\htdocs\miki\common\common.php';

session_start();

// Check session
if ($_SESSION['authenticated'] != TRUE)
{
	header('Location: login.php');
	exit;
}

// Get use name and password
$loginid = $_SESSION['loginid'];
$password = $_SESSION['password'];

// データの準備
if ($_SERVER["REQUEST_METHOD"] === "POST") {
	$spring = $_POST["spring"];
	$summer = $_POST["summer"];
	$autumn = $_POST["autumn"];
	$winter = $_POST["winter"];
	$data = array($spring, $summer, $autumn, $winter);
} else {
	$spring = null;
	$summer = null;
	$autumn = null;
	$winter = null;
	$data = null;
}

// ラベルの準備
$label = array("春", "夏", "秋", "冬");
// グラフの準備
$c = new Chart();
$c->setTitle("好きな季節アンケート結果");
$c->setXLabel($label);
$c->setYAxisName("（人）");
$c->setXAxisName("季節");
$c->setSize(300, 200);
$c->setShowLegend(false);

?>

<!doctype html>
<html lang="jp">
<head>
<meta charset="UTF-8" />
<title>会員専用ページ</title>
</head>
<body>
	<h1>会員専用ページへようこそ</h1>
	<p>
		あなたのユーザIDは
		<?php echo $loginid?>
		です。
	</p>
	<p>このページでは会員専用の情報が閲覧できます。</p>

	<h1>集計結果入力</h1>
	<form action="" method="post">
		<p>
			春<input type="text" size="5" name="spring"
				value="<?php echo h($spring); ?>" />人
		</p>
		<p>
			夏<input type="text" size="5" name="summer"
				value="<?php echo h($summer); ?>" />人
		</p>
		<p>
			秋<input type="text" size="5" name="autumn"
				value="<?php echo h($autumn); ?>" />人
		</p>
		<p>
			冬<input type="text" size="5" name="winter"
				value="<?php echo h($winter); ?>" />人
		</p>
		<p>
			<input type="submit" />
		</p>
	</form>

	<?php if (!is_null($data)): ?>
	<?php
	$c->addData($data);
	$c->printBarChart();
	?>
	<?php endif?>
	<p>
		<?php echo '1984年は' . getWareki(1984) . "年です。" ?>
	</p>
	<a href="logout.php">ログアウトする</a>
</body>
</html>
