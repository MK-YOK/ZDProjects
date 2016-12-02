<?php
$products = array(
		"テレビ",
		"パソコン",
		"携帯電話",
		"冷蔵庫",
		"洗濯機");

$id = $_GET["id"];

$product = $products[$id];

?>
<p><?php echo $product?>が選択されました。</p>
<p><a href="index.php"></a></p>