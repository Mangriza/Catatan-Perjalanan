<?php

$id_catatan = $_GET['id_catatan'];
include'koneksi.php';
$sql = "SELECT*FROM catatan WHERE id_catatan='$id_catatan'";
$query = mysqli_query($koneksi, $sql);
$value = mysqli_fetch_array($query);
?>

<div class="card mb-4">
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between" style="background-color: #3ea99f;">
        <h4 style="color: #fff">Tulis Catatan</h4>
    </div>
    <div class="card-body">
        <form method="post" action="simpan_edit_catatan.php">
            <input type="hidden" name="id_catatan" value="<?= $id_catatan ?>">
            <div class="form-group ">
                <label class="col-sm-2 col-form-label" style="color: #000000"> Tanggal Perjalanan</label>
                <div class="col-sm-9">
                    <input value="<?= $value['tanggal'] ?>" type="date" name="tanggal" class="form-control" placeholder="Pilih Tanggal" required>
                </div>
            </div>
            <div class="form-group ">
                <label class="col-sm-2 col-form-label" style="color: #000000"> Waktu Perjalanan</label>
                <div class="col-sm-9">
                    <input value="<?= $value['waktu'] ?>" type="time" name="waktu" class="form-control" placeholder="Pilih Waktu" required>
                </div>
            </div>
            <div class="form-group ">
                <label class="col-sm-2 col-form-label" style="color: #000000">Lokasi Perjalanan</label>
                <div class="col-sm-9">
                    <input value="<?= $value['lokasi'] ?>" type="varchar" name="lokasi" class="form-control" placeholder="Masukan Lokasi" required>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 col-form-label" style="color: #000000">Suhu Tubuh</label>
                <div class="col-sm-9">
                    <input value="<?= $value['suhu'] ?>" type="varchar" name="suhu" class="form-control" placeholder="Masukan Suhu Tubuh" required>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-success mb-1"><i class="fa fa-save"></i> SIMPAN</button>
                    <button type="submit" class="btn btn-danger mb-1"><i class="fa fa-trash"></i> RESET</button>
                </div>
            </div>
        </form>
    </div>
</div>