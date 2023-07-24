<?php
  include ("php/head.php");
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6 col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Menambahkan Lokasi</h3>
                    </div>
                    <form method="POST" action="proses/tambah-lokasi.php">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="username">Wilayah</label>
                                <input type="text" id="username" class="form-control" name="wilayah" placeholder="Masukkan Wilayah anda">
                            </div>
                            <div class="form-group">
                                <label for="lokasi">Nama Lokasi</label>
                                <input type="text" id="lokasi" class="form-control" name="lokasi" placeholder="Masukkan Nama Lokasi anda">
                            </div>
                        </div>
                        <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            <div class="col-lg-3"></div>
            </div>
        </div>
    </div>

<!-- /.content-wrapper -->
<?php include ("php/footer.php"); ?>