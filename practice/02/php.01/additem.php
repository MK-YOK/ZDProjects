<?php
// 商品をカートに追加する
setcookie("item","テレビ",time () + 86400*2);
setcookie("price",100000,time () + 86400*2);
?>

<p>ショッピングカートに商品を追加しました。</p>
<p><a href="cart.php">カートの中身を見る</a></p>
