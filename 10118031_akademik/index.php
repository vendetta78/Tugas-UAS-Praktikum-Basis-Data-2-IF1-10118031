<?php
session_start();
if(!isset($_SESSION['Username'])) {
   header('location:login.php'); 
} else { 
   $username = $_SESSION['Username']; 
}
?>
<html>
<head>
	<title>Data Akademik</title>
	<!-- menghubungkan dengan file css -->
	<link rel="stylesheet" type="text/css" href="style.css">
	<!-- menghubungkan dengan file jquery -->
	<script type="text/javascript" src="jquery.js"></script>
</head>
<body>
<!-- 
Author : diki alfarabi hadi 
Site : www.malasngoding.com
-->
<div class="content">
	<header>
		<h1 class="judul">Akademik</h1>
		<h3 class="deskripsi">Data - Data Akademik</h3>
	</header>
 
	<div class="menu">
		<ul>
			<li><a href="tampilMahasiswa.php">Data Mahasiswa</a></li>
			<li><a href="tampilDosen.php">Data Dosen</a></li>
			<li><a href="tampilMatakuliah.php">Data Mata Kuliah</a></li>
			<a href="logout.php"><b>Logout</b></a>
		</ul>
	</div>
 
	<div class="badan">	
 
	</div>
</div>
</body>
</html>