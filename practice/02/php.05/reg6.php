<?php
$text = '山田';
if (preg_match('/田/u', $text)) {
	echo 'YES';
} else {
	echo 'NO';
}


?>