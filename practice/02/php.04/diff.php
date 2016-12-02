<?php
$d1 = new DateTime('2020-08-03');
$d2 = new DateTime('2020-08-03');

$interval = $d1->diff($d2);
//var_dump($interval);
$days = $interval->days;
$invert = $interval->invert;

if ($days == 0) {
	echo '日付は同じです';
}else{
	if($invert == 1) {
		echo 'd1の方が「' . $days . '日」新しいです';
	} else {
		echo 'd2の方が「' . $days . '日」新しいです';
	}
}


?>
