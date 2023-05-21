<?php

$id_catatan = $_GET['id_catatan'];

include'../koneksi.php';
$sql = "DELETE FROM catatan WHERE id_catatan='$id_catatan'";
$query = mysqli_query($koneksi, $sql);

if($query){ ?>
    <script>
        alert("Data catatan Sudah Terhapus");
        window.location.assign("admin.php?url=riwayat_catatan_user");
    </script>
<?php

}else{ ?>
    <script>
        alert("Data Tidak Terhapus!!");
        window.location.assign("admin.php?url=riwayat_catatan_user");
    </script>
<?php 
}