<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IF ELSE STEMENT</title>
</head>

<body>
    <?php
    $word = 1000;
    $excel = 40;
    $powerpoint = 30;
    $total = $word + $excel + $powerpoint;
    $average = $total / 3;
    '<h1> Totalecho  : ' . $total . '</h1>';
    echo '<h1> Average : ' . $average . '</h1>';
    echo '<h1> Result : ' . $result . '</h1>';

    //If else stement
    if ($average >= 90) echo '<h1> Grand : A</h1>';
    else if ($average >= 80) echo  '<h1> Grande : B</h1>';
    else if ($average >= 70) echo  '<h1> Grande : C</h1>';
    else if ($average >= 60) echo  '<h1> Grande : E</h1>';
    else echo  '<h1> Grande : F</h1>';

    if ($average >= 50) {
        echo "<h1>  Pass hz</h1>";
    } else {
        echo "<h1>Fail hz</h1>";
    }
    ?>

</body>

</html>