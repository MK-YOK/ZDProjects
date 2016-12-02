<?php
// 金額を入力として受け取り、消費税(8%)込みの
// 金額を計算して結果を返す関数
function calcPriceTax($price)
{
	$result = $price * 1.08;

	return ($result);
}

function calcPriceWithTax($price, $taxRate=8)
{
	$result = $price * (1 + $taxRate/100);
	return ($result);
}

echo calcPricewithtax(1000);
echo "<br>";
echo calcPriceWithTax(500,10);



?>