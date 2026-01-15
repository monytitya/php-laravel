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
    <div class="container mt-4">
        <form method="post">
            <div class="row">
                <div class="col-md-8">
                    <div class="mb-3">
                        <label class="form-label" for="txtSMS">Write sth: </label>
                        <input type="text" name="txtSMS" id="txtSMS" class="form-control">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label class="form-label" for="txtLoop">Number of loop: </label>
                        <input type="number" name="txtLoop" id="txtLoop" class="form-control">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label class="form-label">Choose Loop Type: </label>
                    <input type="radio" name="txtType" value="for" class="form-check-input"> For
                    <input type="radio" name="txtType" value="while" class="form-check-input"> While
                    <input type="radio" name="txtType" value="dowhile" class="form-check-input"> Do While
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <input type="submit" value="SHOW" name="btnShow" class="btn btn-success">
                </div>
            </div>

        </form>
    </div><!-- end container -->
    <?php
    $txtSMS = '';
    $txtLoop = '';
    $txtType = '';
    if (isset($_POST['btnShow'])) {

        $txtSMS = $_POST['txtSMS'];
        $txtLoop = $_POST['txtLoop'];
        $txtType = $_POST['txtType'];

        if ($txtType == 'for') {
            for ($i = 1; $i <= $txtLoop; $i++) {
                echo "<h1>$i. $txtSMS.Forloop </h1>";
            }
        } else if ($txtType == 'while') {
            $i = 1;
            for ($i = 1; $i <= $txtLoop; $i++) {
                echo "<h1>$i. $txtSMS. Whileloop </h1>";
            }
        } else if ($txtType == 'dowhile') {
            $i = 1;
            for ($i = 1; $i <= $txtLoop; $i++) {
                echo "<h1>$i. $txtSMS. DoWhileloop </h1>";
            }
        }
    }

    ?>
</body>

</html>