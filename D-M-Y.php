<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="/bs5/__MACOSX/bs5/">
    <link href="bs5/css/bootstrap.min.css" rel="stylesheet">
    <script src="bs5/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container mt-3">
        <?php
        if (isset($_POST['btnShow'])) {
            $txtName = $_POST['txtName'];
            $cboGender = $_POST['cboGender'];
            $txtDoB = $_POST['txtDoB'];
            if ($cboGender == "F") echo '<h3>Hi Miss. ' . $txtName . '</h3>';
            else echo '<h3>Hi Mr. ' . $txtName . '</h3>';

            echo '<h3> Date of Birth: ' . $txtDoB . ' </h3>';

            $yearNow = date("Y");
            $yearDoB = date("Y", strtotime($txtDoB));
            $age = $yearNow - $yearDoB;
            echo '<h3> Age: ' . $age . ' </h3>';
            if ($age >= 18) echo '<h3>You are allowed to register.</h3>';
            else echo '<h3>You are not allow to register.</h3>';
        }
        ?>
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
                <label class="form-label">Date of Birth: </label>
                <input type="date" name="txtDoB" class="form-control" value="">
            </div>

            <div class="mb-3">
                <input type="submit" value="SHOW" name="btnShow" class="btn btn-success">

            </div>
        </form>
    </div><!-- end container -->
</body>

</html>