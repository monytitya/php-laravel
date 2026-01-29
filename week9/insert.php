<?php
// Database connection
$servername = "localhost";
$username   = "root";
$password   = "";
$dbname = "cmu_test";
$conn = new mysqli("localhost", "root", "mony2024**2000", "cmu_test", 3307);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id    = $_POST['id'];
    $name      = $_POST['name'];
    $gender    = $_POST['gender'];
    $dob       = $_POST['dob'];
    $address   = $_POST['address'];
    $phone_num = $_POST['phone_num'];

    // SQL Insert Query
    $sql = "INSERT INTO entry (id,name, gender, dob, address, phone_num)
            VALUES (?, ?, ?, ?, ?,?)";



    $stmt->bind_param($id, $name, $gender, $dob, $address, $phone_num);

    if ($stmt->execute()) {
        echo "<script>
                alert('Data inserted successfully!');
                window.location.href='index.php';
              </script>";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();