<?php
   session_start();
   require_once("koneksi.php");
   $username = $_POST['Username'];
   $password = $_POST['Password'];   
   $sql = "SELECT * FROM login WHERE Username = '$username'";
   $query = $db->query($sql);
   $hasil = $query->fetch_assoc();
   if($query->num_rows == 0) {
     echo "<div align='center'>Username Belum Terdaftar! <a href='login.php'>Back</a></div>";
   } else {
     if($password <> $hasil['Password']) {
       echo "<div align='center'>Password salah! <a href='login.php'>Back</a></div>";
     } else {
       $_SESSION['Username'] = $hasil['Username'];
       header('location:index.php');
     }
   }
?>