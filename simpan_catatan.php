<?php

session_start();
$nama_lengkap = $_SESSION['nama_lengkap'];
$tanggal = $_POST['tanggal'];
$waktu   = $_POST['waktu'];
$lokasi  = $_POST['lokasi'];
$suhu    = $_POST['suhu'];

include'koneksi.php';
$sql = "INSERT INTO catatan(nama_lengkap,tanggal,waktu,lokasi,suhu) VALUES('$nama_lengkap','$tanggal','$waktu','$lokasi','$suhu')";
$query = mysqli_query($koneksi, $sql);

if($query){ ?>
    <script>
        alert("Data catatan Sudah Tersimpan");
        window.location.assign("user.php");
    </script>
<?php

}else{ ?>
    <script>
        alert("Data Tidak Tersimpan!!");
        window.location.assign("user.php?url=tulis_catatan");
    </script>
<?php 
}



