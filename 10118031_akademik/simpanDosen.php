<?php
include "koneksi.php";
$nip = $_POST['nip'];
$nama = $_POST['nama'];

$query = "INSERT INTO `dosen` (`NIP`, `Nama_Dosen`) VALUES ('$nip', '$nama')";

$hasil = mysqli_query($db, $query);
header('location: tampilDosen.php');
?>