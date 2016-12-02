<?php
$date = new DateTime();
$date->modify('-10 days');
echo $date->format('Y-m-d');

?>