<?php
  include ("php/head.php");

  $id = $_GET['id'];
  $admin = akunAdminbyId($id);
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
                    <form method="POST" action="proses/edit-admin.php">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" id="username" class="form-control" name="username" value="<?php echo $admin['username']; ?>" placeholder="Masukkan Username anda">
                            </div>
                            <div class="form-group">
                                <label for="no_telp">No Telpon</label>
                                <input type="number" id="no_telp" class="form-control no_telp" name="no_telpon" value="<?php echo $admin['no_telp']; ?>" placeholder="Masukkan No Telpon anda">
                            </div>
                        </div>
                        <input type="hidden" value="<?php echo $id; ?>" name="id">
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