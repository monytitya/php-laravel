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
    <title>Document</title>
</head>

<body>
    <form method="post">
        <?php
        function Discount($txtPrice, $txtDiscount)
        {
            $total = $txtPrice - (($txtPrice * $txtDiscount) / 100);
            return $total;
        }
        $finalPrice = "";
        if (isset($_POST['btnCal'])) {
            $txtPrice = $_POST['txtPrice'];
            $txtDiscount = $_POST['txtDiscount'];
            if ($txtPrice && $txtDiscount) {
                $finalPrice = Discount($txtPrice, $txtDiscount);
            }
        }
        ?>

        <div class="row">
            <div class="col-md-6">
                <div class="mb-4">
                    <label class="form-label" for="txtPrice">Price: </label>
                    <input type="text" name="txtPrice" id="txtPrice" class="form-control">
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-3">
                    <label class="form-label" for="txtDiscount"> Discount %: </label>
                    <input type="number" name="txtDiscount" id="txtDiscount" class="form-control" value="15">
                </div>
            </div>
            <div class="col-md-8">
                <div class="mb-3">
                    <label class="form-label" for="txtLoop">Price after Discount: </label>
                    <input type="number" class="form-control" value="<?php echo $finalPrice; ?>">
                </div>
            </div>

            <div class="col-md-6">
                <div class="mb-3">
                    <label class="form-label" for="">. </label>
                    <input type="submit" value="CALCULATE" name="btnCal" class="btn btn-success">
                </div>
            </div>
        </div>

    </form>
</body>

</html>