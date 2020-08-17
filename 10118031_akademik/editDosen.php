<?php
// include database connection file
include ("koneksi.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{   
        $NIP = $_POST['NIP'];
        $Nama_Dosen = $_POST['Nama_Dosen'];
          $result = mysqli_query($db, "UPDATE dosen SET Nama_Dosen='$Nama_Dosen' WHERE NIP = $NIP");

           header("Location: tampilDosen.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$NIP = $_GET['NIP'];

// Fetech user data based on id
$result = mysqli_query($db, "SELECT * FROM dosen WHERE NIP = $NIP");

while($user_data = mysqli_fetch_array($result))
{
        $Nama_Dosen = $user_data['Nama_Dosen'];
}
?>
<html>
<head>  
    <title>Edit User Data</title>
     <link rel="stylesheet" type="text/css" href="style2.css">
</head>

    <a href="tampilDosen.php">Home</a>

    <form name="update_user" method="post" action="editDosen.php">
        <table border="0">
            <tr> 
                <td>Nama Dosen</td>
                <td><input type="text" name="Nama_Dosen" value=<?php echo $Nama_Dosen;?>></td>
            </tr>
             <tr>
                <td><input type="hidden" name="NIP" value=<?php echo $_GET['NIP'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>

</html>
