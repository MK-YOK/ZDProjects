<?php
// 配列の要素をリストとして表示する
// <ul>
// <li>リンゴ</li>
// <li>バナナ</li>
// <li>ぶどう</li>
// </ul>
$fruits = array("リンゴ","バナナ","ぶどう");
echo "<ul>";
foreach ($fruits as $a){
	echo "<li>" . $a . "</li>";
}
echo "</ul>";
?>