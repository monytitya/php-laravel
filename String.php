<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $str = "Wellocome";
    $sName = "mekong university";

    echo "<h1> $str  $sName </h1>";
    // echo '<h1>' . $str . '</h1>';
    echo '<h1>' . $str . 'to' . strtoupper($sName) . '</h1>';
    echo '<h1>' . strtoupper($str), 'to' . $sName . '</h1>';
    ?>

    <?php
    $a = "Hello world!!";
    $a = str_replace("world", "Kiki", $a); //Change locations of word
    echo '<h1>' . $a . '</h1>';

    ?>

</body>

</html>