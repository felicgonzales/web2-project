<?php
  include ("php/head.php");

  $id = $_GET['id'];
  $lokasi = lokasiById($id);
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6 col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Edit Lokasi</h3>
                    </div>
                    <form method="POST" action="proses/edit-lokasi.php" enctype="multipart/form-data">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="username">Wilayah</label>
                                <input type="text" id="username" class="form-control" name="wilayah" value="<?php echo $lokasi['wilayah']; ?>" placeholder="Masukkan Wilayah anda">
                            </div>
                            <div class="form-group">
                                <label for="lokasi">Nama Lokasi</label>
                                <input type="text" id="lokasi" class="form-control" name="lokasi" value="<?php echo $lokasi['nama_lokasi']; ?>" placeholder="Masukkan Nama Lokasi anda">
                            </div>
                        </div>
                        <input type="hidden" value="<?php echo $id ?>" name="id">
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