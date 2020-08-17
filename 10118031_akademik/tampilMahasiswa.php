<?php
include 'koneksi.php';

?><title>Form Mahasiswa</title>
<link rel="stylesheet" type="text/css" href="style2.css">
    <table width='80%'>

<table border=1>
	<h1>Form Mahasiswa</h1>
	<tr>
		<th>NIM</th>
		<th>Nama Mahasiswa</th>
		<th>Tanggal Lahir</th>
		<th>Jenis kelamin</th>
		<th>Alamat</th>
	</tr>
	<?php
	$read = "SELECT * FROM `mahasiswa`"; 
	 $query = mysqli_query($db, $read);
	 $a = 0;
	 while($row = mysqli_fetch_array($query)){
	 	$nim = $row['NIM'];
	 	$nama = $row['Nama_Mhs'];
	 	$tgl = $row['Tgl_lahir'];
	 	$jk = $row['Jenis_Klmn'];
	 	$alamat = $row['Alamat'];
    ?>

    <tr>
    	<td><?php print($nim);?></td>
    	<td><?php print($nama);?></td>
    	<td><?php print($tgl);?></td>
    	<td><?php print($jk);?></td>
    	<td><?php print($alamat);?></td>
    	<td><a href="deleteMahasiswa.php?NIM=<?php print($nim);?>">Delete</a></td>
    	<td><a href="editMahasiswa.php?NIM=<?php print($nim);?>">Edit</a></td>
    </tr>


    <?php
    $a++;
   	}
   	?>
</table><br>
<br>
<br>
<br>
<form action="forminputMahasiswa.php" method="POST">
<button class="tombol">Tambah Mahasiswa</button>
</form>
<form action="index.php" method="POST">
<button class="tombol">Home</button>
</form>