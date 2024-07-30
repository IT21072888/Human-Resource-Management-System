<?php

$dbhost = "sql104.infinityfree.com";
$dbuser = "if0_37000771";
$dbpass = "EO21KJXUHO2";
$dbname = "if0_37000771_hr_management";

$conn = mysqli_connect($dbhost , $dbuser , $dbpass , $dbname);

if(!isset($conn)){
    echo die("Database connection failed");
}
?>