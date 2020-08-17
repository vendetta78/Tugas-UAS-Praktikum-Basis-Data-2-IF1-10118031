
<?php
// include database connection file
include ("koneksi.php");

// Get id from URL to delete that user
$kodemk = $_GET['Kode_MK'];

// Delete user row from table based on given id
$result = mysqli_query($db, "DELETE FROM matakuliah WHERE Kode_MK=$kodemk");

// After delete redirect to Home, so that latest user list will be displayed.
header("Location:tampilMatakuliah.php");
?>