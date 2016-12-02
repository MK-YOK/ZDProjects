<?php
$text = '07012345678';
if (preg_match('/^0[89]0/', $text)) {
	echo "YES";
} else {
	echo "NO";
}
?>