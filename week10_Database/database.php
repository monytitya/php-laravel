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
    <title>Database Form</title>
</head>

<body>
    <!-- Use for include and add page -->
    <?php include 'db.php'; ?>
    <div class="container mt-4">
        <!-- Use for include and add page -->
        <?php include 'navbar.php'; ?>
        <h1>student</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Address</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM `db_test`";
                $qr = $myConn->query($sql);
                while ($row = $qr->fetch_assoc()) {
                    echo '
                    <tr>
                      <td>' . $row['id'] . '</td>
                      <td>' . $row['name'] . '</td>
                      <td>' . $row['gender'] . '</td>
                      <td>' . $row['address'] . '</td>
                    </tr>
                    ';
                }

                ?>
            </tbody>
        </table>

    </div>
</body>

</html>