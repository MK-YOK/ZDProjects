<?php
// 配列の要素を<table border="1">で表示する
// +----------+
// |リンゴ |
// +----------+
// |バナナ |
// +----------+
// |ぶどう |
// +----------+
$fruits = array("リンゴ","バナナ","ぶどう");
echo '<table border ="1">';
foreach ($fruits as $a) {
	echo "<tr><td>" . $a . "</td></tr>";
}
echo "</table>";
?>