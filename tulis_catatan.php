<div class="card mb-4">
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between" style="background-color: #3ea99f;">
    <h4 style="color: #fff">Tulis Catatan</h4>

    <a href="user.php" class="btn btn-info btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-arrow-left"></i>
                                        </span>
                                        <span class="text">Kembali</span>
                                        
                                    </a> 
                                    <?php
             $today = date('d-m-y');    
             ?>                 

    </div>
    <div class="card-body">
        <form method="post" action="simpan_catatan.php">
            <div class="form-group ">
                <label class="col-sm-2 col-form-label" style="color: #000000">Tanggal Perjalanan</label>
                <div class="col-sm-9">
                    <input type="date" name="tanggal" class="form-control" placeholder="Pilih Tanggal" 
                    value="<?php echo date("Y-m-d") ; ?>" required>
                </div>
            <div class="form-group">
                <label class="col-sm-2 col-form-label" style="color: #000000">Waktu Perjalanan</label>
                 <?php 
                   $jam = date("H") + 5;
                 ?>
                    <input type="text" name="waktu" class="form-control" placeholder="Pilih Waktu"
                    value="<?php echo date("$jam:i") ; ?>" required>
                </div>
            <div class="form-group ">
                <label class="col-sm-2 col-form-label" style="color: #000000">Lokasi Perjalanan</label>
                <div class="col-sm-9">
                    <input type="varchar" name="lokasi" class="form-control" placeholder=" Lokasi" required>
                </div>
            </div>
            <div class="form-group ">
                <label class="col-sm-2 col-form-label" style="color: #000000">Suhu Tubuh</label>
                <div class="col-sm-9">
                    <input type="varchar" name="suhu" class="form-control" placeholder=" Suhu Tubuh" required>
                </div>
            </div>
            <div class="form-group ">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-info mb-1"><i class="fa fa-save"></i> SIMPAN</button>
                    <button type="reset" class="btn btn-danger mb-1"><i class="fa fa-trash"></i> RESET</button>
                </div>
            </div>
        </form>
    </div>
</div>