<?php 
    include ("php/head.php");

    $data = invoice();
?>
    <div class="content-wrapper">
    <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Pembelian Pelanggan</h3>
              </div>
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap" id="shows_data">
                  <thead>
                    <tr class="table-primary text-center">
                        <th scope="col">#</th>
                        <th scope="col">Nama Film</th>
                        <th scope="col">Lokasi</th>
                        <th scope="col">Studio</th>
                        <th scope="col">Tanggal & Jam Tayang</th>
                        <th scope="col">Detail Pembelian Tiket</th>
                        <th scope="col">Dipesan tanggal</th>
                    </tr>
                  </thead>
                  <tbody>
                        <?php 
                            foreach($data as $row){
                        ?>
                            <tr class="text-center">
                                <th scope="row"><?php echo $row['id']; ?></th>
                                <td><?php echo $row['judul']; ?></td>
                                <td><?php echo $row['wilayah'].' - '.$row['nama_lokasi']; ?></td>
                                <td><?php echo $row['no_studio']; ?></td>
                                <td><?php echo $row['tanggal_tayang'].' - '.$row['jam_tayang']; ?></td>
                                <td>
                                <p style="max-width : 150px;">
                                    Total : <?php echo $row['jmlh_tiket']; ?>
                                    Detail : <span style="max-width : 150px;"><?php echo $row['detail_tiket']; ?></span>
                                </p>
                                </td>
                                <td><?php echo $row['tanggal_transaksi'] ;?></td>
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
    <script>
      $(function () {
        $('#shows_data').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": true,
          "ordering": true,
          "info": true,
          "autoWidth": false,
          "responsive": true,
        });
      });
    </script>
<?php include ("php/footer.php"); ?>