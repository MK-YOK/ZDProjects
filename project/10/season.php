<?php
// 好きな季節のグラフの表示
// Chartクラスを定義したファイルの読み込み
require_once "Chart.class.php";
require_once "util.inc.php";

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
<html>
<body>
<h1>集計結果入力</h1>
<form action="" method="post">
	<p>春<input type="text"  size="5" name="spring" value="<?php echo h($spring); ?>"/>人</p>
	<p>夏<input type="text"  size="5" name="summer" value="<?php echo h($summer); ?>"/>人</p>
	<p>秋<input type="text"  size="5" name="autumn" value="<?php echo h($autumn); ?>"/>人</p>
	<p>冬<input type="text"  size="5" name="winter" value="<?php echo h($winter); ?>"/>人</p>
	<p><input type="submit" /></p>
</form>
<?php if (!is_null($data)): ?>
<?php
 $c->addData($data);
$c->printBarChart();
?>
<?php endif?>
</body>
</html>
