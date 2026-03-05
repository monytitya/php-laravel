<?php include 'week_10_cn.php';

$id = $_GET['id'];

$sql = "SELECT * FROM tbl_student WHERE id=$id";
$result = $myCon->query($sql);
$row = $result->fetch_assoc();

if (isset($_POST['btnUpdate'])) {

    $name = $_POST['txtName'];
    $gender = $_POST['cboGender'];
    $dob = $_POST['txtDoB'];
    $phone = $_POST['txtPhone'];
    $address = $_POST['txtAddress'];

    $update = "UPDATE tbl_student
SET name='$name',
gender='$gender',
dob='$dob',
address='$address',
phone='$phone'
WHERE id=$id";

    if ($myCon->query($update) === TRUE) {
        header("Location: week_10_list.php");
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Edit Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container mt-4">

        <h2>Edit Student</h2>

        <form method="post">

            <label>Name</label>
            <input type="text" name="txtName" class="form-control" value="<?php echo $row['name']; ?>">

            <label class="mt-3">Gender</label>
            <select name="cboGender" class="form-select">

                <option value="M" <?php if ($row['gender'] == "M") echo "selected"; ?>>Male</option>
                <option value="F" <?php if ($row['gender'] == "F") echo "selected"; ?>>Female</option>

            </select>

            <label class="mt-3">DOB</label>
            <input type="date" name="txtDoB" class="form-control" value="<?php echo $row['dob']; ?>">

            <label class="mt-3">Phone</label>
            <input type="text" name="txtPhone" class="form-control" value="<?php echo $row['phone']; ?>">

            <label class="mt-3">Address</label>
            <input type="text" name="txtAddress" class="form-control" value="<?php echo $row['address']; ?>">

            <button class="btn btn-primary mt-3" name="btnUpdate">Update</button>

        </form>

    </div>

</body>

</html>