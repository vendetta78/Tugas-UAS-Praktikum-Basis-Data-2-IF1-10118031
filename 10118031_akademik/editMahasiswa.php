<?php
// include database connection file
include ("koneksi.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{   
        $NIM = $_POST['NIM'];
        $Nama_Mhs = $_POST['Nama_Mhs'];
        $Tgl_Lahir = date('Y-m-d',strtotime($_POST['Tgl_Lahir']));
        $Jenis_Klmn = $_POST['Jenis_Klmn'];
        $Alamat = $_POST['Alamat'];

    // update user data
    $result = mysqli_query($db, "UPDATE mahasiswa SET Nama_Mhs='$Nama_Mhs',Tgl_Lahir='$Tgl_Lahir',Jenis_Klmn='$Jenis_Klmn',Alamat='$Alamat' WHERE NIM = $NIM");

    // Redirect to homepage to display updated user in list
    header("Location: tampilMahasiswa.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$NIM = $_GET['NIM'];

// Fetech user data based on id
$result = mysqli_query($db, "SELECT * FROM mahasiswa WHERE NIM = $NIM");

while($user_data = mysqli_fetch_array($result))
{
        $Nama_Mhs = $user_data['Nama_Mhs'];
        $Tgl_Lahir = $user_data['Tgl_lahir'];
        $Jenis_Klmn = $user_data['Jenis_Klmn'];
        $Alamat = $user_data['Alamat'];
}
?>
<html>
<head>  
    <title>Edit User Data</title>
    <link rel="stylesheet" type="text/css" href="style2.css">
</head>

    <a href="tampilMahasiswa.php">Home</a>

    <form name="update_user" method="post" action="editMahasiswa.php">
        <table border="0">
            <tr> 
                <td>Nama Mahasiswa</td>
                <td><input type="text" name="Nama_Mhs" value=<?php echo $Nama_Mhs;?>></td>
            </tr>
            <tr>
            <td>Tanggal Lahir</td>
                <td><input type="date" name="Tgl_Lahir" value=<?php echo $Tgl_Lahir;?>></td>
            </tr>
            <tr> 
                <td>Jenis Kelamin</td>
                <td><input type="radio" name="Jenis_Klmn" value="L"> 
        <label> Laki - laki</label><br>
        <input type="radio" name="Jenis_Klmn" value="P">
        <label>Perempuan</label><br></td>
            </tr>
            <tr> 
                <td>Alamat</td>
                <td><input type="text" name="Alamat" value=<?php echo $Alamat;?>
                ></td>
            </tr>
            <tr>
                <td><input type="hidden" name="NIM" value=<?php echo $_GET['NIM'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>

</html>