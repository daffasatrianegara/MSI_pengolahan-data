<?php
require('koneksi.php');

if (isset($_POST["tambah"])) {
    $nama = stripslashes($_POST['nama']);
    $nama = mysqli_real_escape_string($con, $nama);
    $umur = stripslashes($_POST['umur']);
    $umur = mysqli_real_escape_string($con, $umur);
    $jk = stripslashes($_POST['jk']);
    $jk = mysqli_real_escape_string($con, $jk);
    $telp = stripslashes($_POST['telepon']);
    $telp = mysqli_real_escape_string($con, $telp);
    $olrg = stripslashes($_POST['olahraga']);
    $olrg = mysqli_real_escape_string($con, $olrg);
    if (!empty(trim($nama)) && !empty(trim($umur)) && !empty(trim($jk)) && !empty(trim($telp))) {
        $query = "INSERT INTO data_user (nama , umur, jenis_kelamin, hp, olahraga) VALUES ('$nama','$umur','$jk', '$telp', '$olrg')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            $message = "data anda berhasil terinput!!";
            echo "<script type='text/javascript'>alert('$message');
                    window.location.href='../inputdata.php';</script>";
        } else {
            $message = "data anda tidak dapat didaftarkan!!";
            echo "<script type='text/javascript'>alert('$message');
            window.location.href='../inputdata.php';</script>";
        }
    } else {
        $message = "Data yang diinputkan tidak boleh ada yang kosong!!";
        echo "<script type='text/javascript'>alert('$message');
        window.location.href='../inputdata.php';</script>";
    }
}
