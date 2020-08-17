<?php
// include database connection file
include ("koneksi.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{   
        $Kode_MK = $_POST['Kode_MK'];
        $namamk = $_POST['Nama_MK'];
        $SKS = $_POST['SKS'];

    // update user data
    $result = mysqli_query($db, "UPDATE matakuliah SET Nama_MK='$namamk',SKS='$SKS' WHERE Kode_MK = $Kode_MK");

    // Redirect to homepage to display updated user in list
    header("Location: tampilMatakuliah.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$Kode_MK = $_GET['Kode_MK'];

// Fetech user data based on id
$result = mysqli_query($db, "SELECT * FROM matakuliah WHERE Kode_MK = $Kode_MK");

while($user_data = mysqli_fetch_array($result))
{
        $namamk = $user_data['Nama_MK'];
        $SKS = $user_data['SKS'];
}
?>
<html>
<head>  
    <title>Edit User Data</title>
     <link rel="stylesheet" type="text/css" href="style2.css">
</head>

    <a href="tampilMatakuliah.php">Home</a>

    <form name="update_user" method="post" action="editMatakuliah.php">
        <table border="0">
            <tr> 
                <td>Nama Matakuliah</td>
                <td><input type="text" name="Nama_MK" value=<?php echo $namamk;?>></td>
            </tr>
            <tr>
            <td>SKS</td>
                <td><input type="text" name="SKS" value=<?php echo $SKS;?>></td>
            </tr>

            <tr>
                <td><input type="hidden" name="Kode_MK" value=<?php echo $_GET['Kode_MK'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>

</html>