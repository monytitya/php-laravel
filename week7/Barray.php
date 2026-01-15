<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Array </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <?php
    $colors = array("Red", "Green", "Blue", "Yellow");
    echo '<h1> ' . $colors[0] . ' </h1>'; // Output: Red
    echo "<h2> $colors[0] </h2>";
    echo "<h2> $colors[1] </h2>";
    echo "<h2> $colors[2] </h2>";
    echo "<h2> $colors[3] </h2>";
    echo '<hr>';


    foreach ($colors as $color) {
        echo "<h3> $color </h3>";
    }
    echo '<hr>';
    for ($i = 0; $i < 4; $i++) {
        echo "<h4> $colors[$i] </h4>";
    }
    echo '<hr>';

    $students = array("Mony" => "M", "Sokra" => "M", "Daveth" => "M", "Vichea" => "M");
    foreach ($students as $key => $value) {
        echo "<h3> $key : $value </h3>";
    }
    ?>


</body>

</html>