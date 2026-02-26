<?php include 'week_10_cn.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js"
        integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous">
    </script>
</head>

<body>
    <?php include 'week_10_nav.php'; ?>
    <div class="container mt-4">
        <h1> Form Student</h1>
        <?php
        if (isset($_GET['sms'])) {
            $sms = $_GET['sms'];

            if ($sms == 1) {
                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                Student added successfully!
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
              </div>';
            } else if ($sms == 2) {
                echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Failed to add student!
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
              </div>';
            }
        }
        if (isset($_POST['btnADD'])) {
            $txtname = $_POST['txtName'];
            $cboGender = $_POST['cboGender'];
            $txtDoB = $_POST['txtDoB'];
            $txtPhone = $_POST['txtPhone'];
            $txtAddress = $_POST['txtAddress'];

            $sql = "INSERT INTO tbl_student(name, gender, dob, address, phone) VALUES('$txtname', '$cboGender', '$txtDoB', '$txtAddress', '$txtPhone')";
            if ($myCon->query($sql) === TRUE) {
                header("Location: week_11_01.php?sms=1");
            } else {
                header("Location: week_11_01.php?sms=2");
            }
        }
        ?>
        <form method="post">
            <div class="row">
                <div class="col-md-6 mt-3">
                    <label for="txtName">Name </label>
                    <input type="text" name="txtName" id="txtName" class="form-control" placeholder="Input Name">
                </div>
                <div class="col-md-6 mt-3">
                    <label for="cboGender">Gender </label>
                    <select name="cboGender" id="cboGender" class="form-select">
                        <option value="M"> Male </option>
                        <option value="F"> Female </option>
                    </select>
                </div>
                <div class="col-md-6 mt-3">
                    <label for="txtDoB">Date of Birth </label>
                    <input type="date" name="txtDoB" id="txtDoB" class="form-control">
                </div>
                <div class="col-md-6 mt-3">
                    <label for="txtPhone">Phone Number</label>
                    <input type="text" name="txtPhone" id="txtPhone" class="form-control"
                        placeholder="Input Phone Number">
                </div>
                <div class="col-md-12 mt-3">
                    <label for="txtAddress">Address</label>
                    <input type="text" name="txtAddress" id="txtAddress" class="form-control"
                        placeholder="Input Phone Number">
                </div>
                <div class="col-md-12 mt-3 text-end">
                    <input type="submit" value="ADD" class="btn btn-primary" name="btnADD">
                </div>
            </div><!-- end row -->
        </form>
    </div><!-- end container -->

</body>

</html>