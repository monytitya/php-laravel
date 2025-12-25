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
    <link href="bs5/css/bootstrap.min.css" rel="stylesheet">
    <script src="bs5/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>

<body>
    <div class="container mt-3">
        <?php
        $txtSMS = '';
        $txtLoop = '';
        $i = 1;
        if (isset($_POST['btnShow'])) {
            $txtSMS = $_POST['txtSMS'];
            $txtLoop = $_POST['txtLoop'];

            for ($i; $i <= $txtLoop; $i++) {
                echo "<h1>$i. $txtSMS </h1>";
            }
        }
        ?>
        <form method="post">
            <div class="mb-3">
                <label class="form-label">Say sth: </label>
                <input type="text" name="txtSMS" class="form-control" value="" <?php echo $txtSMS; ?>>
            </div>
            <div class="mb-3">
                <label class="form-label">Loop: </label>
                <input type="number" name="txtLoop" class="form-control" value="" <?php echo $txtLoop; ?>>
            </div>
            <div class="mb-3">
                <input type="submit" value="SHOW" name="btnShow" class="btn btn-success">

            </div>
        </form>
    </div>

</body>

</html>