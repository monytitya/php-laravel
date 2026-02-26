<?php
$servername = "localhost";
$username = "root";
$password = "mony2024**2000";
$dbname = "IS310_2026";
$myCon = new mysqli($servername, $username, $password, $dbname, 3307);
if ($myCon->connect_error) {
    die("Connection Failed. " . $myCon->connect_error);
}