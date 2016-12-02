<?php
// メンバーのリストを<table>で表示する
// +----------+----------+
// | 名前 | 年齢 |
// +----------+----------+
// |太郎 |32 |
// +----------+----------+
// |次郎 |21 |
// +----------+----------+
// |三郎 |15 |
// +----------+----------+

$memberList = array(
		array("name" => "太郎", "age" => 32),
		array("name" => "次郎", "age" => 21),
		array("name" => "三郎", "age" => 15)
);
echo '<table border="1">';
echo '<tr><th>名前</th><th>年齢</th></tr>';
foreach ($memberList as $member) {
	echo '<tr>';
	echo '<td>' . $member["name"] . "</td>";
	echo '<td>' . $member["age"] . "</td>";
	echo '</tr>';
}
echo "</table>";
?>