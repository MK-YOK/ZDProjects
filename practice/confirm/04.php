<?php

// No.1
$sum1 = 0;
for ($i = 1; $i <= 30; $i++){
	$sum1 += $i;
}

// No.2
for ($i = 1; $i <= 100; $i++){
	$arrNums[$i] = $i;
}
$sum2 = 0;
foreach ($arrNums as $num){
	$sum2 += $num;
}

?>
<p>No.1: 合計は <?php echo $sum1;?>です。</p>
<p>No.2: 合計は <?php echo $sum2;?>です。</p>

