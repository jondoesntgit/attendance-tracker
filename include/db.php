<?php

$ini = parse_ini_file(__DIR__ . '/../config.ini');

$db_folder = __DIR__ . '/../db/';
$db_name = $ini['db_name'];
$db_file = $db_folder . $db_name;

@unlink($db_file);


if (!file_exists($db_file)) {
	include __DIR__ . '/setup.php';
}

$db = new SQLite3($db_file);


?>