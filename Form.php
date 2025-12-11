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
        <h1>Get Value from Form</h1>

        <?php
        $total = 0;
        $val1 = 0;
        $val2 = 0;
        if (isset($_POST['btnAdd'])) {
            $val1 = $_POST['txtVal1'];
            $val2 = $_POST['txtVal2'];
            $total = $val1 + $val2;
            echo "<h1> $total </h1>";
        } else if (isset($_POST['btnDiv'])) {
            $val1 = $_POST['txtVal1'];
            $val2 = $_POST['txtVal2'];
            $total = $val1 - $val2;
            echo "<h1> $total </h1>";
        } else if (isset($_POST['btnSum'])) {
            $val1 = $_POST['txtVal1'];
            $val2 = $_POST['txtVal2'];
            $total = $val1 / $val2;
            echo "<h1> $total </h1>";
        } else if (isset($_POST['btnMul'])) {
            $val1 = $_POST['txtVal1'];
            $val2 = $_POST['txtVal2'];
            $total = $val1 * $val2;
            echo "<h1> $total </h1>";
        } else {
            $total = 0;
        }
        ?>
        <form method="post">
            <div class="mb-3">
                <label class="form-label">Value 1</label>
                <input type="number" name="txtVal1" class="form-control" value="<?php echo $val1; ?>">
            </div>

            <div class="mb-3">
                <label class="form-label">Value 2</label>
                <input type="number" name="txtVal2" class="form-control" value="<?php echo $val2; ?>">
            </div>

            <div class="mb-3">
                <label class="form-label">Total</label>
                <input type="text" value="<?php echo $total; ?>" name="txtVal3" class="form-control" disabled>
            </div>
            <div class="mb-3">
                <input type="submit" value="+" name="btnAdd" class="btn btn-danger">
                <input type="submit" value="-" name="btnDiv" class="btn btn-primary">
                <input type="submit" value="*" name="btnMul" class="btn btn-success">
                <input type="submit" value="/" name="btnSum" class="btn btn-info">
            </div>
        </form>
    </div>
</body>

</html>