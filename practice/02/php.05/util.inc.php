<?php

// Return escaped string
function h($string)
{
	return (htmlspecialchars($string, ENT_QUOTES));
}

// Convert an A.D. year to a Wareki year
function getWareki($adYear)
{
	$warekiYear = null;

	if (1868 <= $adYear && $adYear <= 1911){
		$warekiYear = "明治" . ($adYear - 1867);
	} elseif (1912 <= $adYear && $adYear <= 1925) {
		$warekiYear = "大正" . ($adYear - 1911);
	} elseif (1926 <= $adYear && $adYear <= 1988) {
		$warekiYear = "昭和" . ($adYear - 1925);
	} elseif (1989 <= $adYear) {
		$warekiYear = "平成" . ($adYear - 1988);
	} else {
		$warekiYear = "未対応";
	}

	// Convert year "1" to "元"
	$warekiYear = preg_replace('[^0-9](1)$','$1,元', $warekiYear);

	return($warekiYear);
}