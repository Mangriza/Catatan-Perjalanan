<?php

$nik       =$_POST['nik'];
$nama_lengkap = $_POST['nama_lengkap'];
$password = $_POST['password'];


include'koneksi.php';

$quey = mysqli_query($koneksi, "SELECT*FROM user WHERE nik='$nik' AND password='$password'");
if(mysqli_num_rows($quey)==0){ ?>
    <script>
        alert("NIK dan Nama Anda tidak ditemukan.");
        window.location.assign("index.php");
    </script>
<?php
}else{
    foreach($quey as $value){
       
        $nama_lengkap = $value['nama_lengkap'];
        $level =$value['level'];
    }
    session_start();
    $_SESSION['nik'] = $nik;
    $_SESSION['nama_lengkap'] = $nama_lengkap;
    $_SESSION['password'] = $password;
    $_SESSION['level'] = $level;

    if($_SESSION['level'] == 'user'){
        header("Location:user.php");
    }else{
        header("Location:admin/admin.php");
    }


}