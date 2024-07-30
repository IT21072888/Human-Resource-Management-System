<?php

// Load environment variables from .env file
require 'vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$host = $_ENV['MYSQLHOST'];
$username = $_ENV['MYSQLUSER'];
$password = $_ENV['MYSQLPASSWORD'];
$dbname = $_ENV['MYSQLDATABASE'];
$port = $_ENV['MYSQLPORT'];

$con = mysqli_connect($host, $username, $password, $dbname, $port);

if (!$con) {
    die("Database connection failed: " . mysqli_connect_error());
}
?>
