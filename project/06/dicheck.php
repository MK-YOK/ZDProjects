<?php

// Define judge table
$judgeTable = array(
		array("lower_h" => null, "higher_h" => 55, "judge" => "寒い"),
		array("lower_h" => 55, "higher_h" => 60, "judge" => "肌寒い"),
		array("lower_h" => 60, "higher_h" => 65, "judge" => "何も感じない"),
		array("lower_h" => 65, "higher_h" => 70, "judge" => "快い"),
		array("lower_h" => 70, "higher_h" => 75, "judge" => "暑くない"),
		array("lower_h" => 75, "higher_h" => 80, "judge" => "やや暑い"),
		array("lower_h" => 80, "higher_h" => 85, "judge" => "暑くて汗が出る"),
		array("lower_h" => 85, "higher_h" => null, "judge" => "暑くてたまらない"),
);

// Function: Compare lower value in the talbe
function compLower($value, $def){
	if (is_null($def) || $value >= $def) {
		return (true);
	} else {
		return (false);
	}
}

// Function: Compare higher value in the talbe
function compHigher($value, $def){
	if (is_null($def) || $value < $def) {
		return (true);
	} else {
		return (false);
	}
}

// Function: Calculate di from templature and humidity
function calcDI($t, $h){
	// Input error check
	// - Numeric?
	if (!is_numeric($t) || !is_numeric($h)) return ("エラー");

	// - h positive?
	if ($h < 0) return ("エラー");

	return (0.81 * $t + 0.01 * $h * (0.99 * $t - 14.3) + 46.3);
}

// Function: Answer di result from di
function ansDIresult($di, $judgeTable){
	// If DI is null return error result
	if  ($di === "エラー") return("入力値が正しくありません。");

	// Loop for judge table: Start
	foreach ($judgeTable as $definition){
		// Inside scope?
		if (compLower($di, $definition["lower_h"])  && compHigher($di, $definition["higher_h"])){
			// Return the defined result
			return ($definition["judge"]);
		}
	} // Loop for judge table: End

	// Assert ** Wrong table definition. Must not come here. **
	asert(false, "Impossible path!! Check The Definition table!!");
}

// Get post values
if($_SERVER["REQUEST_METHOD"] === "POST") {
	$h = $_POST["h"];
	$t = $_POST["t"];
} else {
	$h = null;
	$t = null;
}

// Calculate di
$di = calcDI($t , $h);

// Set di result
$result = ansDIresult($di, $judgeTable);

var_dump($result);

?>

<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<title>不快指数チェック</title>
</head>
<body>
	<h1>不快指数チェック</h1>
	<form action="" method="post">
		<p>気温と湿度を入力して「判定」ボタンを押してください。</p>
		<p>
			気温：<input type="text" name="t"  value="<?php echo htmlspecialchars($t, ENT_QUOTES); ?>"/>℃
		</p>
		<p>
			湿度：<input type="text" name="h"  value="<?php echo htmlspecialchars($h, ENT_QUOTES); ?>"/>％
		</p>
		<p>
			<input type="submit" value="判定" />
		</p>
		<p>不快指数：<?php echo $di;?></p>
		<p>判定：<?php echo $result;?></p>
	</form>
</body>
</html>
