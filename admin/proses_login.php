<?php

$username =$_POST['username'];
$password = $_POST['password'];

include'../koneksi.php';
$quey = mysqli_query($koneksi, "SELECT * FROM admin WHERE username='$username' AND password='$password'");
if(mysqli_num_rows($quey) == 0){ ?>
    <script>
        alert("Username dan Password Anda tidak ditemukan.");
        window.location.assign("login.php");
    </script>
<?php
}else{
    session_start();
    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;

    header("Location:admin.php"); 
}