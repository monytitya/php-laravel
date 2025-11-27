<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Type</title>
</head>

<body>
    <?php
    $val1 = 40;
    $val2 = 10;
    $total = $val1 + $val1;


    $val3 = 40;
    $val4 = 10;
    $total1 = $val3 + $val4;

    echo '<h1>' . $total . '</h1>';
    echo "<h2> $total </h2>";

    //Contact string into php
    echo  '<h1>' . $val1 . ' + ' . $val2 . '=' . $total . '</h1>';
    echo  '<h1>' . $val3 . ' + ' . $val4 . '=' . $total1 . '</h1>';
    ?>
</body>

</html>