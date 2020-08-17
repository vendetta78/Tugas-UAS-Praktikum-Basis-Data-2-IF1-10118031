<?php
include ('koneksi.php');
?>

<fieldset>
	<form action="simpanMahasiswa.php" method="POST">
		<label>NIM</label><br>
		<input type="text" name="nim"><br>
		<label>Nama Mahasiswa</label><br>
		<input type="text" name="nama"><br>
		<label>Tanggal Lahir</label><br>
		<input type="date" name="tanggallahir"><br>
		<label>Jenis Kelamin</label><br>
		<input type="radio" name="jeniskelamin" value="L"> 
  		<label> Male</label><br>
 		<input type="radio" name="jeniskelamin" value="P">
 		<label>Female</label><br>
		<label>Alamat</label><br>
		<input type="text" name="alamat"><br>
		<input type="submit" name="Submit" value="Simpan Data">
	</form>


</fieldset>