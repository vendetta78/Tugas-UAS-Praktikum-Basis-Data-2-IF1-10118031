
<?php
// include database connection file
include ("koneksi.php");

// Get id from URL to delete that user
$NIM = $_GET['NIM'];

// Delete user row from table based on given id
$result = mysqli_query($db, "DELETE FROM mahasiswa WHERE NIM=$NIM");

// After delete redirect to Home, so that latest user list will be displayed.
header("Location:tampilMahasiswa.php");
?>