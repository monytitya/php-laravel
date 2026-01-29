<?php
$conn = new mysqli("localhost", "root", "mony2024**2000", "cmu_test", 3307);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "✅ Database connected successfully!";
