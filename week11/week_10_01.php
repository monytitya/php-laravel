<?php include 'week_10_cn.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Student List</title>
</head>

<body>

    <?php include 'week_10_nav.php'; ?>

    <div class="container mt-4">
        <h1>Student List</h1>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>DoB</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Action</th> <!-- new column -->
                </tr>
            </thead>

            <tbody>
                <?php
                $sql = "SELECT * FROM `tbl_student` ORDER BY id DESC";
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
                    <td>
                        <a href="week_11_01.php?id=' . $row['id'] . '" class="btn btn-warning btn-sm">Edit</a>
                        <a href="week_10_02.php?id=' . $row['id'] . '" class="btn btn-primary btn-sm"
                        onclick="return confirm(\'Are you sure to delete?\')">Delete</a>
                    </td>
                </tr>
                ';
                }
                ?>
            </tbody>
        </table>

    </div>

</body>

</html>