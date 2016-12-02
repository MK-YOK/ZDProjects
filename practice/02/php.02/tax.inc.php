<?php
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
