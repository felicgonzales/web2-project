<?php 
    require_once "../lib/lib-db-film.php";
    $filmHitung = hitungFilm();
    $filmData = semuaFilm();
    $studioHitung = hitungStudio();
    $studioData = cariStudio();

    $message="";
    if (isset($_SESSION['jadwalError'])) {
        $message = $_SESSION['jadwalError'];
        unset($_SESSION['jadwalError']);
    }
?>
<div class="modal fade" id="add_shows" tabindex="-1" aria-labelledby="add_showsLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="add_showsLabel">Penambahan Jadwal Tayang</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="proses/tambah-jadwal.php" method="POST">
                <label for="message"><?php echo $message; ?></label>
                <div class="form-group">
                    <label for="shows_date">Tanggal Tayang</label>
                    <input type="date" class="form-control" id="shows_date" name="shows_date" value="<?php echo date('Y-m-d');?>">                   
                </div>
                <div class="form-group">
                    <label for="film">Pilih Film : </label>
                    <select class="custom-select rounded-0" id="film" name="film" required>
                        <?php 
                            if($filmHitung > 0){
                                foreach($filmData as $row){
                                    ?>
                                        <option value="<?php echo $row['id']; ?>"><?php echo $row['judul'];?></option>
                                    <?php
                                }
                            }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="studio">Pilih Studio : </label>
                    <select class="custom-select rounded-0" id="studio" name="studio_no" required>
                        <?php 
                            if($studioHitung > 0){
                                foreach($studioData as $row){
                                    ?>
                                        <option value="<?php echo $row['id']; ?>"><?php echo $row['nama_lokasi'].' - '. $row['wilayah'].' - Studio : '.$row['no_studio'];?></option>
                                    <?php
                                }
                            }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="jam_tayang">Pilih Jam Tayang : </label>
                    <div class="form-row">
                        <div class="col">
                            <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="time1" value="12:15" name="jam_tayang[]" checked>
                            <label for="time1" class="custom-control-label">12 : 15</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="time2" value="13:50" name="jam_tayang[]">
                            <label for="time2" class="custom-control-label">13 : 50</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="time3" value="15:05" name="jam_tayang[]">
                            <label for="time3" class="custom-control-label">15 : 05</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                    <div class="col">
                        <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="time4" value="16:35" name="jam_tayang[]">
                        <label for="time4" class="custom-control-label">16 : 35</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="time5" value="17:40" name="jam_tayang[]">
                        <label for="time5" class="custom-control-label">17 : 40</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="time6" value="19:30" name="jam_tayang[]">
                        <label for="time6" class="custom-control-label">19 : 30</label>
                        </div>
                    </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="time7" value="20:50" name="jam_tayang[]">
                            <label for="time7" class="custom-control-label">20 : 50</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="time8" value="22:20" name="jam_tayang[]">
                            <label for="time8" class="custom-control-label">22 : 20</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="time9" value="00:10" name="jam_tayang[]">
                            <label for="time9" class="custom-control-label">00 : 10</label>
                            </div>
                        </div>
                    </div>
    
                </div>
                <div class="form-group">
                    <label>Harga Tiket : </label>
                    <div class="custom-control custom-radio">
                        <div class="form-row">
                            <div class="col">
                                <input class="custom-control-input" type="radio" id="price" name="price" value="35000" required>
                                <label for="price" class="custom-control-label">Rp. 35,000</label>
                            </div>
                            <div class="col">
                                <input class="custom-control-input" type="radio" id="price2" name="price" value="50000" required>
                                <label for="price2" class="custom-control-label">Rp. 50,000</label>
                            </div>
                        </div>
                    </div>                    
                </div>
                <div class="alert alert-primary">
                    Jumlah Tiket akan digenerate otomatis oleh sistem berdasarkan jumlah kursi yang terdapat di studio.
                </div>
                <button type="submit" class="btn btn-success btn-block">Submit</button>
            </form>
        </div>
      </div>
    </div>
</div>
