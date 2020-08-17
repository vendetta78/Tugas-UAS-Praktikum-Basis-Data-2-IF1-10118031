<?php
include ('koneksi.php');
?>
<fieldset>
	<form action="simpanDosen.php" method="POST">
		<label>NIP</label><br>
		<input type="text" name="nip"><br>
		<label>Nama Dosen</label><br>
		<input type="text" name="nama"><br>
		<input type="submit" name="Submit" value="Simpan Data">
	</form>


</fieldset>