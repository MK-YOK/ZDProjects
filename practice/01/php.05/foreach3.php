<?php
// 値段の合計を計算して表示する
$priceList = array(100, 200, 50);
$total = 0;
foreach( $priceList as $price){
	$total = $total + $price;
}
echo $total . "円";
?>