<?php
  include ("php/head.php");

  $admin = cariAdmin($_SESSION['role']);
  
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Data Admin</h3>
          <a href="add-admin.php" class="but-admin">Tambah Akun</a>
        </div>
        <div class="card-body table-responsive p-0">
          <table class="table table-hover text-nowrap" id="shows_data">
            <thead class="table-primary">
              <tr class="text-center">
                <th>ID</th>
                <th>Username</th>
                <th>No Telpon</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <?php
                foreach ($admin as $value) { ?>
                  <tr class="text-center">
                    <td>
                      <?php echo $value['id']; ?>
                    </td>
                    <td>
                      <?php echo $value['username']; ?>
                    </td>
                    <td>
                      <?php echo $value['no_telp']; ?>
                    </td>
                    <td>
                      <a href="edit-admin.php?id=<?php echo $value['id']; ?>" class="but-admin">Edit</a>
                      <a href="#" data-toggle="modal" data-target="#hapus" class="but-admin">Hapus</a>
                    </td>
                  </tr>
              <?php
                } ?>
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
            <form action="proses/hapus-admin.php" method="POST">
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