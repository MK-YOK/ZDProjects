<?php
// Set default lang
$lang = "ja";

// Get lang
if ($_SERVER["REQUEST_METHOD"] === "POST") {
	if (isset($_POST["lang"])) {
		$lang = $_POST["lang"];
	}
} elseif (isset($_COOKIE["lang"])) {
	$lang = $_COOKIE["lang"];
}

// Set name and message
if ($lang === 'ja') {
	$message = "ようこそ！";
}	elseif ($lang === 'en') {
	$message = "Welcome!";
} elseif ($lang === 'it') {
	$message = "Benvenuto!";
}

setcookie("lang",$lang, time() + 60 * 60 * 24 * 30);

?>

<!doctype html>
<html lang="jp">
<head>
<meta charset="UTF-8" />
<title>Welcome</title>
</head>
<body>
	<h1><?php echo $message; ?></h1>

	<form action="" method="post">
		<select name="lang">
			<option value="ja"<?php echo $lang === "ja" ? "selected" : ""; ?>>日本語</option>
			<option value="en"<?php echo $lang === "en" ? "selected" : ""; ?>>English</option>
			<option value="it"<?php echo $lang === "it" ? "selected" : "" ?>>Italiano</option>
		</select> <input type="submit" />
	</form>

</body>
</html>
