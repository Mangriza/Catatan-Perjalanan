<?php

$id_user = $_GET['id_user'];

include'../koneksi.php';
$sql = "DELETE FROM user WHERE id_user='$id_user'";
$query = mysqli_query($koneksi, $sql);

if($query){ ?>
    <script>
        alert("Data user Sudah Terhapus");
        window.location.assign("admin.php?url=data_user");
    </script>
<?php

}else{ ?>
    <script>
        alert("Data Tidak Terhapus!!");
        window.location.assign("admin.php?url=data_user");
    </script>
<?php 
}