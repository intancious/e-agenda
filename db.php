<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

define('DS', DIRECTORY_SEPARATOR);

$database = 'agenda';
$user = 'root';
$pass = '';
$host = 'localhost';
$dir = dirname(__FILE__) . DS . 'agenda.sql';

$mysqlDir = 'C:\xampp\mysql\bin';    // Paste your mysql directory here and be happy
// $mysqlDir = 'C:\laragon\bin\mysql\mysql-5.7.33-winx64\bin';    // PC INTAN

// print_r($argv);
// die();

if ($argv[1] == 'export') {
	$mysqldump = $mysqlDir . DS . 'mysqldump';
	echo "\nBacking up database to {$dir} ";
	echo "\n...\n";
	exec("{$mysqldump} --user={$user} --host={$host} {$database} --result-file={$dir} 2>&1", $output);

	foreach ($output as $echo) {
		echo "\n";
		echo $echo;
	}
}

if ($argv[1] == 'import') {
	$mysqldump = $mysqlDir . DS . 'mysql';
	echo "\nImporting database from {$dir} to {$database} ";
	echo "\n...\n";
	exec("{$mysqldump} --user={$user} --host={$host} {$database} < {$dir} ", $output);

	foreach ($output as $echo) {
		echo "\n";
		echo $echo;
	}
}
