<?php
include "../../miki/common/common.php";

echo "------------<br>";

echo a('こんにちは') . "!"
;
function a ($b){
	return $b . "太郎です";
}

function testIsset($var)
{
	return isset($var);
}

echo testIsset(nai);

?>

