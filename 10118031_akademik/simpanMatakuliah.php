<?php
include "koneksi.php";
$kodemk = $_POST['kodemk'];
$namamk = $_POST['namamk'];
$sks = $_POST['sks'];

$query = "INSERT INTO `matakuliah` (`Kode_MK`, `Nama_MK`, `SKS`) VALUES ('$kodemk', '$namamk', '$sks')";

$hasil = mysqli_query($db, $query);
header('location: tampilMatakuliah.php');
?>