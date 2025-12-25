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
        $txtDay = 1;
        if (isset($_POST['btnShow'])) {
            $txtDay = $_POST['txtDay'];
        }

        switch ($txtDay) {
            case 1:
                echo '<h1>' . $txtDay . ' : Is Monday </h1>';
                break;
            case 2:
                echo '<h1>' . $txtDay . ' : Is Tuesday </h1>';
                break;
            case 3:
                echo '<h1>' . $txtDay . ' : Is Wednesday </h1>';
                break;
            case 4:
                echo '<h1>' . $txtDay . ' : Is Thurday </h1>';
                break;
            case 5:
                echo '<h1>' . $txtDay . ' : Is Friday </h1>';
                break;
            case 6:
                echo '<h1>' . $txtDay . ' : Is Saturday </h1>';
                break;
            case 7:
                echo '<h1>' . $txtDay . ' : Is Sunday </h1>';
                break;
            default:
                echo '<h1>' . $txtDay . ' : Is Unknown </h1>';
        }
        ?>
        <form method="post">
            <div class="mb-3">
                <label class="form-label">Day: </label>
                <input type="radio" name="txtDay" value="1" class="form-check-input"
                    <?php if ($txtDay == 1) echo 'checked'; ?>> 1
                <input type="radio" name="txtDay" value="2" class="form-check-input"
                    <?php if ($txtDay == 2) echo 'checked'; ?>> 2
                <input type="radio" name="txtDay" value="3" class="form-check-input"
                    <?php if ($txtDay == 3) echo 'checked'; ?>> 3
                <input type="radio" name="txtDay" value="4" class="form-check-input"
                    <?php if ($txtDay == 4) echo 'checked'; ?>> 4
                <input type="radio" name="txtDay" value="5" class="form-check-input"
                    <?php if ($txtDay == 5) echo 'checked'; ?>> 5
                <input type="radio" name="txtDay" value="6" class="form-check-input"
                    <?php if ($txtDay == 6) echo 'checked'; ?>> 6
                <input type="radio" name="txtDay" value="7" class="form-check-input"
                    <?php if ($txtDay == 7) echo 'checked'; ?>> 7
            </div>


            <div class="mb-3">
                <input type="submit" value="SHOW" name="btnShow" class="btn btn-success">

            </div>
        </form>
    </div><!-- end container -->
</body>

</html>