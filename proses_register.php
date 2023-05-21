<?php

$nik       =$_POST['nik'];
$nama_lengkap = $_POST['nama_lengkap'];
$password = $_POST['password'];
$level ='level';

include'koneksi.php';
$query_validasi = "SELECT*FROM user WHERE nik='$nik'";
$query = mysqli_query($koneksi, $query_validasi);

if(mysqli_num_rows($query)==0){
    $query_register = mysqli_query($koneksi, "INSERT INTO user(nik,nama_lengkap,password,level) VALUES('$nik','$nama_lengkap','$password','user')");
    if($query_register){ ?>
        <script>
            alert("Data Register Berhasil Dilakukan, Silahkan Login");
            window.location.assign("index.php");
        </script>
    <?php } 
}else{ ?>
    <script>
        alert("NIK YANG ANDA MASUKAN SUDAH TERDAFTAR!!");
        window.location.assign("register.php");
    </script>
<?php 
}