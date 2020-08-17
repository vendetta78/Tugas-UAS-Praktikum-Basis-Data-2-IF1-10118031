<?php
include ('koneksi.php');
?>
<fieldset>
	<form action="simpanMatakuliah.php" method="POST">
		<label>Kode Matakuliah</label><br>
		<input type="text" name="kodemk"><br>
		<label>Nama Matakuliah</label><br>
		<input type="text" name="namamk"><br>
		<label>SKS</label><br>
		<input type="text" name="sks"><br>
		<input type="submit" name="Submit" value="Simpan Data">

	</form>

</fieldset>