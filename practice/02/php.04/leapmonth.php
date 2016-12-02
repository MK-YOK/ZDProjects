<?php
$date = new DateTime();
$date->modify('last day of February 2020');
echo $date->format('Y-m-d');


?>
