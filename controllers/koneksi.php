<?php
$host     = 'localhost';
$user     = 'root';
$password = '';  
$db       = 'dataUser';

$con = mysqli_connect($host, $user, $password, $db) or die(mysqli_error($con));