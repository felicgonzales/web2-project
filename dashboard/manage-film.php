<?php
  include ("php/head.php");

  $film = semuaFilm();
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Data Film</h3>
          <a href="add-film.php" class="but-admin">Tambah Film</a>
        </div>
        <div class="card-body table-responsive p-0">
          <table class="table table-hover text-nowrap" id="shows_data">
            <thead class="table-primary">
              <tr class="text-center">
                <th>ID</th>
                <th>Judul</th>
                <th>Deskripsi</th>
                <th>Foto</th>
                <th>Trailer</th>
                <th>Kategori</th>
                <th>Sutradara</th>
                <th>Aktor</th>
                <th>Tanggal Rilis</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($film as $value) { ?>
                        <tr class="text-center">
                          <td>
                            <?php echo $value['id']; ?>
                          </td>
                          <td>
                            <?php echo $value['judul']; ?>
                          </td>
                          <td>
                            <?php echo $value['deskripsi']; ?>
                          </td>
                          <td>
                            <?php echo "<img src='../".$value['foto']."' width=50px>"; ?>
                          </td>
                          <td>
                            <?php echo $value['trailer']; ?>
                          </td>
                          <td>
                            <?php echo $value['kategori']; ?>
                          </td>
                          <td>
                            <?php echo $value['sutradara']; ?>
                          </td>
                          <td>
                            <?php echo $value['aktor']; ?>
                          </td>
                          <td>
                            <?php echo $value['tgl_rilis']; ?>
                          </td>
                          <td>
                            <a href="edit-film.php?id=<?php echo $value['id']; ?>" class="but-admin">Edit</a>
                            <a href="#" data-toggle="modal" data-target="#hapus" class="but-admin">Hapus</a>
                          </td>
                        </tr>
                    <?php
                      } 
                ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="hapus" tabindex="-1" aria-labelledby="logoutLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="logoutLabel">Konfirmasi Hapus</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="proses/hapus-film.php" method="POST">
                <div class="alert alert-danger">
                    Apakah anda yakin ingin menghapus ? 
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-success">Yes</button>
              </div>
              <input type="hidden" value="<?php echo $value['id']; ?>" name="id">
          </form>
      </div>
    </div>
</div>

<!-- /.content-wrapper -->
<?php include ("php/footer.php"); ?>