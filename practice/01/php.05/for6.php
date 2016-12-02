<?php
// 値段の合計を計算して表示する
$priceList = array(100, 200, 50);
echo count($priceList) . "<br>";
$total = 0;
for( $i = 0; $i < count($priceList); $i++){
	$total = $total + $priceList[$i];
}
echo $total . "円";
?>