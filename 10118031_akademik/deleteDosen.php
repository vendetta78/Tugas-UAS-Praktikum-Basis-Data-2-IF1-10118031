<?php
// include database connection file
include ("koneksi.php");

// Get id from URL to delete that user
$NIP = $_GET['NIP'];

// Delete user row from table based on given id
$result = mysqli_query($db, "DELETE FROM dosen WHERE NIP=$NIP");

// After delete redirect to Home, so that latest user list will be displayed.
header("Location:tampilDosen.php");
?>