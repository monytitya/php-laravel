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
    <title>Add Data</title>
</head>

<body>
    <div class="container">
        <?php
        // function  addData($val1, $val2)
        // {
        //     echo $val1 + $val2;
        // }
        // addData(5, 10);
        // echo '</br>';
        function data($fullprice, $discount)
        {
            $discountAmount = $fullprice * ($discount / 100);
            $finalPrice = $fullprice - $discountAmount;
            echo "Full Price: $fullprice<br>";
            echo "Discount: $discount%<br>";
            echo "Final Price: $finalPrice";
        }
        data(100, 15);
        echo '</br></br></br></br>';

        //Bos cher
        function Discount($amount, $discount)
        {
            $total = $amount - (($amount * $discount) / 100);
            echo "Amount :$amount </br>";
            echo "discount :$discount% </br>";
            echo "Total :$total </br>";
        }
        Discount(100, 15);
        ?>

    </div>
</body>

</html>