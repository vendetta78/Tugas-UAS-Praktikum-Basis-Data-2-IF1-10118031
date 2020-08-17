<?php
include 'koneksi.php';

?>
    <table width='80%' border=1>

<table border=1>
	<h1>Form Mata Kuliah</h1>
	<tr>
		<th>Kode Matakuliah</th>
		<th>Nama Matakuliah</th>
		<th>SKS</th>
		<th>Aksi</th>
	</tr>
	<?php
	$read = "SELECT * FROM `matakuliah`"; 
	 $query = mysqli_query($db, $read);
	 $a = 0;
	 while($row = mysqli_fetch_array($query)){
	 	$kodemk = $row['Kode_MK'];
	 	$namamk = $row['Nama_MK'];
	 	$sks = $row['SKS'];
	 
    ?>
<title>Form Mata Kuliah</title>
<link rel="stylesheet" type="text/css" href="style2.css">

    <tr>
    	<td><?php print($kodemk);?></td>
    	<td><?php print($namamk);?></td>
    	<td><?php print($sks);?></td>
    	<td><a href="deleteMatakuliah.php?Kode_MK=<?php print($kodemk);?>">Delete</a></td>
    	<td><a href="editMatakuliah.php?Kode_MK=<?php print($kodemk);?>">Edit</a></td>
    </tr>


    <?php
    $a++;
   	}
   	?>
</table>
<br>
<br>
<br>
<br>
<form action="forminputMatakuliah.php" method="POST">
<button class="tombol">Tambah Matakuliah</button>
</form>
<form action="index.php" method="POST">
<button class="tombol">Home</button>
</form>