<div class="card mb-4">
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between" style="background-color: #3ea99f;">
        <h4 style="color: #fff">Data Catatan Perjalanan</h4>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>User</th>
                        <th>Tanggal</th>
                        <th>Waktu</th>
                        <th>Lokasi</th>
                        <th>Suhu</th>
                        <th>Hapus</th>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    include'../koneksi.php';
                    $sql = "SELECT * FROM `catatan` WHERE 1";
                    $query = mysqli_query($koneksi, $sql);
                    foreach($query as $value) {
                    ?>
                    <tr>
                        <td><?= $no++; ?> </td>
                        <td><?= $value['nama_lengkap'] ?></td>
                        <td><?= $value['tanggal'] ?></td>
                        <td><?= $value['waktu'] ?></td>
                        <td><?= $value['lokasi'] ?></td>
                        <td><?= $value['suhu'] ?>°C</td>
                        <td>
                            <a onclick="return confirm('Apakah anda yakin untuk Menghapus Data?')" href="hapus_catatan.php?id_catatan=<?= $value['id_catatan'] ?>" class="btn btn-danger mb-1">
                                <i class="fa fa-trash"></i>  Hapus
                            </a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>