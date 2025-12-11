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
    <div class="container">
        <h2> Total : </h2>
        <h2> Average : </h2>
        <h2> Result : </h2>
        <h2> Grade : </h2>
        <?php
        $txtword = 0;
        $txtexcel = 0;
        $txtaccess = 0;
        if (isset($_POST['btnshow'])) {
            $txtword  = $_POST['txtword'];
            $txtexcel = $_POST['txtexcel'];
            $txtaccess = $_POST['txtaccess'];
            $total = $txtword + $txtexcel + $txtaccess;
            $average = $total / 3;
            echo "<h1>Total : $total </h1>";
            echo "<h1>Average : $average </h1>";

            //Finding Grade
            if ($average >=  90) {
                echo "<h1>Grade : A</h1>";
            } else if ($average >= 80) {
                echo "<h1>Grade : B</h1>";
            } else if ($average >= 70) {
                echo "<h1>Grade : C</h1>";
            } else if ($average >= 50) {
                echo "<h1>Grade : D</h1>";
            } else {
                echo "<h1>Grade F</h1>";
            }
        }
        ?>
        <form method="post">
            <div class="mb-3">
                <label class="form-label">Microsoft Word</label>
                <input type="number" name="txtword" class="form-control" value="<?php echo $txtword; ?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Microsoft Excel</label>
                <input type="number" name="txtexcel" class="form-control" value="<?php echo $txtexcel; ?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Microsoft Access</label>
                <input type="number" name="txtaccess" class="form-control" value="<?php echo $txtaccess; ?>">
            </div>
            <div class="mb-3">
                <input type="submit" value="SHOW" name="btnshow" class="btn btn-success">

            </div>
        </form>
    </div>
</body>

</html>