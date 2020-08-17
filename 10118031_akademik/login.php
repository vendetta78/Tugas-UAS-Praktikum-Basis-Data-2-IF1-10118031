<?php
   session_start();
   if(isset($_SESSION['Username'])) {
   header('location:index.php'); }
   require_once("koneksi.php");
?>

<html>
<head>
  <title>Form Login</title>
  <link rel="stylesheet" type="text/css" href="styleLogin.css">
</head>
<body>
 
  <div class="kotak_login">
    <p class="tulisan_login">Silahkan login</p>
 
    <form action="index_login.php" method="post">
      <label>Username</label>
      <input type="text" name="Username" class="form_login" placeholder="Username atau email ..">
 
      <label>Password</label>
      <input type="text" name="Password" class="form_login" placeholder="Password ..">
 
      <input type="submit" class="tombol_login" value="LOGIN">
 
      <br/>
      <br/>
    </form>
    
  </div>
 
 
</body>
</html>