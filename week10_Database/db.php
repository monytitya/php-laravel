 <?php
    $servername = "localhost";
    $username = "root";
    $password = "mony2024**2000";
    $dbname = "testdb_cmu";
    $port = 3307;
    $myConn = new mysqli($servername, $username, $password, $dbname, $port);
    if ($myConn->connect_error) {
        die("Connection failed:" . $myConn->connect_error);
    }
    ?>