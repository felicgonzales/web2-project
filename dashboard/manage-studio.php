<?php
    include ("php/head.php");

    $data = cariStudio();
    $hitung = hitungStudio();
?>
    <div class="content-wrapper">
        <div class="row">
            <?php 
                if($hitung > 0){
                    foreach ($data as $row) {
            ?>
                <div class="col-lg-3">
                    <div class="card card-warning">
                        <div class="card-header">
                            <h3 class="card-title">Studio Information</h3>
                        </div>
                        <form action="proses/hapus-studio.php" method="POST">
                            <div class="card-body">
                                <input type="text" class="form-control" name="id" value="<?php echo $row['id'];?>" hidden>
                                <div class="form-group">
                                    <label for="lokasi">Lokasi : </label>
                                    <input type="text" class="form-control" id="lokasi" value="<?php echo $row['nama_lokasi'];?>" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="studio_no">Studio No : </label>
                                    <input type="text" class="form-control" id="studio_no" value="<?php echo $row['no_studio'];?>" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="studio_no">Jumlah Kursi : </label>
                                    <?php 
                                        $arr_kursi = explode(';',$row['pattern_kursi']);
                                        $jlh = (int) $arr_kursi[0] * (int) $arr_kursi[1];
                                    ?>
                                    <input type="text" class="form-control" id="studio_no" value="<?php echo $jlh ;?>" readonly>
                                </div>
                            </div>
                            <div class="card-footer text-center">
                                <button type="submit" class="btn btn-danger">Delete This Studio</button>
                            </div>
                        </form>
                    </div>
                </div>
            <?php
                    }
                }
            ?>
        </div>
    </div>
    <?php include ("php/footer.php"); ?>