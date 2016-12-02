<?php
require_once 'tax.inc.php';
$price = calcPriceWithTax(48000);
require_once 'header.inc.php';
?>
<main>
<h2>常夏のビーチで夏休みを延長！</h2>
<p>
	料金：
	<?php echo $price ?>
	円
</p>
</main>
