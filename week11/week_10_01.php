<?php include 'week_10_cn.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>

</head>

<body>
    <?php include 'week_10_nav.php'; ?>
    <div class="container mt-4">
        <h1> Student List</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>DoB</th>
                    <th>Address</th>
                    <th>Phone</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM `tbl_student`";
                $qr = $myCon->query($sql);
                while ($row = $qr->fetch_assoc()) {
                    echo '
                <tr>
                    <td>' . $row['id'] . '</td>
                    <td>' . $row['name'] . '</td>
                    <td>' . $row['gender'] . '</td>
                    <td>' . $row['dob'] . '</td>
                    <td>' . $row['address'] . '</td>
                    <td>' . $row['phone'] . '</td>
                </tr>
                ';
                }
                ?>
            </tbody>
        </table>
    </div><!-- end container -->
</body>

</html>