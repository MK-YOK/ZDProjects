<?php
define ("HOST","localhost");
define ("DBNAME","cresent");
define ("DBUSER","sysuser");
define ("DBPASS","secret");

function db_init()
{

	// MySQL への接続
	$pdo = new PDO("mysql:host=" . HOST . ";dbname=" . DBNAME,DBUSER,DBPASS);

	// 文字コードの設定
	$pdo->exec("SET NAMES utf8");

	return ($pdo);
}

?>
