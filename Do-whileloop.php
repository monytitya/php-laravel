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
    <title>Do while loop</title>
</head>

<body>

    <?php

    //While loop 
    $i = 1;
    while ($i <= 5) {
        echo "<h2> $i world </h2>";
        $i++;
    }


    // Do while loop
    //
    $a = 1;
    do {
        echo "<h1> $a Helloo </h1>";
        $a++;
    } while ($a <= 5);

    ?>
</body>

</html>