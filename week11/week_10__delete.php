<?php

include 'week_10_cn.php';

$id = $_GET['id'];

$sql = "DELETE FROM tbl_student WHERE id=$id";

if ($myCon->query($sql) === TRUE) {
    header("Location: week_10_list.php");
} else {
    echo "Delete Failed";
}