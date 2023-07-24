<?php
  include ("php/head.php");

  $id = $_GET['id'];
  $film = filmById($id);
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6 col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Edit Akun Admin</h3>
                    </div>
                    <form method="POST" action="proses/edit-film.php" enctype="multipart/form-data">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="judul">Judul</label>
                                <input type="text" class="form-control" id="judul" name="judul" value="<?php echo $film['judul']; ?>" placeholder="Masukkan Judul" required>
                            </div>
                            <div class="form-group">
                                <label for="sutradara" style="position: relative; bottom: 20px;">Deskripsi</label>
                                <textarea name="desc" style="position: relative; left: 20px; width: 300px;"><?php echo $film['deskripsi']; ?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="film_pic">Gambar Film</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="film_pic" name="film_pic" required>
                                        <label class="custom-file-label" for="film_pic">Choose Film Photo</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-12">Film Category</label>
                                <div class="custom-control custom-radio col-lg-3 col-md-6 col-sm-6 mb-3 ml-2">
                                    <input class="custom-control-input" type="radio" id="customRadio1" name="category" value="now_showing" <?php if($film['kategori'] == 'now_showing'){ echo "checked"; } ?>>
                                    <label for="customRadio1" class="custom-control-label">Now Showing</label>
                                </div>
                                <div class="custom-control custom-radio col-lg-3 col-md-6 col-sm-6 mb-3 ml-2">
                                    <input class="custom-control-input" type="radio" id="customRadio2" name="category" value="coming_soon" <?php if($film['kategori'] == 'coming_soon'){ echo "checked"; } ?>>
                                    <label for="customRadio2" class="custom-control-label">Coming Soon</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="rilis">Tanggal Rilis</label>
                                <input type="date" class="form-control" id="rilis" name="rilis" value="<?php echo $film['tgl_rilis']; ?>" required>
                            </div>
                        </div>
                        <input type="hidden" value="<?php echo $id ?>" name="id">
                        <div class="card-footer">
                            <button type="submit" class="btn btn-success btn-block">Add</button>
                        </div>
                    </form>
                </div>
            <div class="col-lg-3"></div>
            </div>
        </div>
    </div>

<!-- /.content-wrapper -->
<?php include ("php/footer.php"); ?>