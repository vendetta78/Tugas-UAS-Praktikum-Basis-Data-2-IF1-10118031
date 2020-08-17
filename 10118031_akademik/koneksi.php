<?php

$server = "localhost";
$user = "root";
$password = "";
$nama_database = "10118031_akademik";

$db = mysqli_connect($server, $user, $password, $nama_database);

if( !$db ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

?>