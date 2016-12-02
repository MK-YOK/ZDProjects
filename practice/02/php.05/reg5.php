<?php
// メールアドレスの形式かどうかチェックする
// ⇒（@以外の繰り返し）@（@以外の繰り返し）.（@以外の繰り返し）
$text = 'taro@example.com';
if (preg_match("/^[^@]+@[^@]+\.[^@]+$/", $text)) {
	echo 'YES';
} else {
	echo 'NO';
}

?>