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
    <div class="container mt-3">
        <form method="post">
            <div class="mb-3">
                <label class="form-label">Name: </label>
                <input type="text" name="txtName" class="form-control" value="">
            </div>
            <div class="mb-3">
                <label class="form-label">Gender: </label>
                <select name="cboGender" class="form-select">
                    <option value="F"> Female </option>
                    <option value="M"> Male </option>
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">Age: </label>
                <input type="text" name="txtAge" class="form-control" value="">
            </div>

            <div class="mb-3">
                <input type="submit" value="SHOW" name="btnShow" class="btn btn-info">

            </div>
        </form>
        <?php
        if (isset($_POST['btnShow'])) {
            $name =  $_POST['txtName'];
            $gender = $_POST['cboGender'];
            $age = $_POST['txtAge'];

            // echo "<h3>Name: $name</h3>";
            // echo "<h3>Gender: " . ($gender == 'F' ? 'Female' : 'Male') . "</h3>";
            // echo "<h3>Age: $age</h3>";

            if ($gender == 'F') {
                echo "<h2>Hi Mrr, $name</h2>";
            } else {
                echo "<h2>Hi Miss, $name</h2>";
            }
            if ($age >= 18) {
                echo "<h2>$age You are allowed to register</h2>";
            } else {
                echo "<h2> You are not allowed to register</h2>";
            }
        }
        ?>
    </div>
</body>

</html>