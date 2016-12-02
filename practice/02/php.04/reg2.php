<?php
$text = '123-4516';
if (preg_match('/^\d{3}-\d{4}$/', $text)) {
	echo "YES";
} else {
	echo "NO";
}
?>