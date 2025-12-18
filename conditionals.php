<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="/bs5/__MACOSX/bs5/">
    <title>Document</title>
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-header bg-primary text-white text-center">
                        <h4>User Registration Form</h4>
                    </div>
                    <div class="card-body">
                        <form method="post">
                            <div class="mb-3">
                                <label for="txtName" class="form-label fw-bold">Name:</label>
                                <input type="text" id="txtName" name="txtName" class="form-control"
                                    placeholder="Enter your full name" required>
                            </div>
                            <div class="mb-3">
                                <label for="cboGender" class="form-label fw-bold">Gender:</label>
                                <select id="cboGender" name="cboGender" class="form-select" required>
                                    <option value="">Select Gender</option>
                                    <option value="F">Female</option>
                                    <option value="M">Male</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="txtDoB" class="form-label fw-bold">Date of Birth:</label>
                                <input type="date" id="txtDoB" name="txtDoB" class="form-control" required>
                            </div>
                            <div class="d-grid">
                                <input type="submit" value="SHOW" name="btnShow" class="btn btn-success btn-md">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php
        if (isset($_POST['btnShow'])) {
            $name =  $_POST['txtName'];
            $gender = $_POST['cboGender'];
            $txtDoB = $_POST['txtDoB'];
            // echo "<h3>Name: $name</h3>";
            // echo "<h3>Gender: " . ($gender == 'F' ? 'Female' : 'Male') . "</h3>";
            // echo "<h3>Age: $age</h3>";
            if ($gender == 'F') {
                echo "<h2>Hi Mrr, $name</h2>";
            } else {
                echo "<h2>Hi Miss, $name</h2>";
            }
            //Think for age
            $yearNow = date("Y");
            $yearDoB = date("Y", strtotime($txtDoB));
            $age = $yearNow - $yearDoB;
            echo "<h3> Age : $age </h3>";
            //Output of age registration
            if (($age >= 18)) {
                echo "<h2>You are allowed to register</h2>";
            } else {
                echo "<h2>You are not allowed to register</h2>";
            }
        }
        echo "<h2> DOb: $txtDoB</h2>";
        ?>
    </div>
</body>

</html>