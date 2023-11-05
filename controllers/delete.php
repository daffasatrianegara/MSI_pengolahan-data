<?php
include 'koneksi.php';

$id   = $_GET['id'];

if ($id != NULL) {
    $query = "DELETE from data_user where id='$id'";
    mysqli_query($con, $query);
    header("location:./../datauser.php");
}