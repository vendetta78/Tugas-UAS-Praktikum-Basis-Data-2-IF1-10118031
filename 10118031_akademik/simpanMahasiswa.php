<?php
include "koneksi.php";
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$tanggallahir = $_POST['tanggallahir'];
$jeniskelamin = $_POST['jeniskelamin'];
$alamat = $_POST['alamat'];

$query = "INSERT INTO `mahasiswa` (`NIM`, `Nama_Mhs`, `Tgl_lahir`, `Jenis_Klmn`, `Alamat`) VALUES ('$nim', '$nama', '$tanggallahir', '$jeniskelamin', '$alamat')";

$hasil = mysqli_query($db, $query);
header('location: tampilMahasiswa.php');
?>