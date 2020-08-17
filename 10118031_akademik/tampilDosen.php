<?php
include 'koneksi.php';

?>
    <table width='80%' border=1>

<table border="1">
	<h1>Form Dosen</h1>
	<tr>
		<th>NIP</th>
		<th>Nama Dosen</th>
	</tr>
	<?php
	$read = "SELECT * FROM `dosen`"; 
	 $query = mysqli_query($db, $read);
	 $a = 0;
	 while($row = mysqli_fetch_array($query)){
	 	$nip = $row['NIP'];
	 	$nama = $row['Nama_Dosen'];
	 ?>
<title>Form Dosen</title>
<link rel="stylesheet" type="text/css" href="style2.css">
    <tr>
    	<td><?php print($nip);?></td>
    	<td><?php print($nama);?></td>
    	<td><a href="deleteDosen.php?NIP=<?php print($nip);?>">Delete</a></td>
    	<td><a href="editDosen.php?NIP=<?php print($nip);?>">Edit</a></td>
    </tr>

    <?php
    $a++;
   	}
   	?>
</table>
<br>
<br>
<br>
<form action="forminputDosen.php" method="POST">
<button class="tombol">Tambah Dosen</button>
</form>
<form action="index.php" method="POST">
<button class="tombol">Home</button>
</form>