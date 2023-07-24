<?php 
    include ("php/head.php");
?>
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Menambahkan Film</h3>
                    </div>
                    <form method="POST" action="proses/tambah-film.php" enctype="multipart/form-data">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="judul">Judul</label>
                                <input type="text" class="form-control" id="judul" name="judul" placeholder="Masukkan Judul" required>
                            </div>
                            <div class="form-group">
                                <label for="sutradara" style="position: relative; bottom: 20px;">Deskripsi</label>
                                <textarea name="desc" style="position: relative; left: 20px; width: 300px;"></textarea>
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
                                    <input class="custom-control-input" type="radio" id="customRadio1" name="category" value="now_showing" checked="">
                                    <label for="customRadio1" class="custom-control-label">Now Showing</label>
                                </div>
                                <div class="custom-control custom-radio col-lg-3 col-md-6 col-sm-6 mb-3 ml-2">
                                    <input class="custom-control-input" type="radio" id="customRadio2" name="category" value="coming_soon">
                                    <label for="customRadio2" class="custom-control-label">Coming Soon</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="rilis">Tanggal Rilis</label>
                                <input type="date" class="form-control" id="rilis" name="rilis" required>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-success btn-block">Add</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php include ("php/footer.php"); ?>