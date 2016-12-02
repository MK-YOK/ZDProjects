<?php

ageHantei("太郎", 21);
ageHantei("次郎", 18);

function ageHantei($name, $age){
	printf("<p>%sさんは %d 歳で %s です。</p>",$name,$age, $age >= 20 ? "成人" : "未成年" );
}

?>