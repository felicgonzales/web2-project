<?php
  include ("php/head.php");

  $jadwal = cariJadwal();
?>
    <div class="content-wrapper">
      <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Data Jadwal Penayangan</h3>
                </div>
                <div class="card-body table-responsive p-0">
                  <table class="table table-hover text-nowrap" id="shows_data">
                    <thead class="table-primary">
                      <tr class="text-center">
                        <th>ID</th>
                        <th>Wilayah</th>
                        <th>Teater</th>
                        <th>Studio</th>
                        <th>Film</th>
                        <th>Tanggal Tayang</th>
                        <th>Jam Tayang</th>
                        <th>Tiket Terbeli</th>
                        <th>Tiket Tersedia</th>
                        <th>Harga Tiket</th>
                        <th>Kursi Terbeli</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php 
                          foreach($jadwal as $row){
                            ?>
                              <tr class="text-center">
                                <td><?php echo $row['id']; ?></td>
                                <td><?php echo $row['wilayah']; ?></td>
                                <td><?php echo $row['nama_lokasi']?></td>
                                <td><?php echo $row['no_studio']; ?></td>
                                <td><?php echo $row['judul']; ?></td>
                                <td><?php echo $row['tanggal_tayang']; ?></td>
                                <td><?php echo $row['jam_tayang']; ?></td>
                                <td><?php echo $row['tiket_terjual']; ?></td>
                                <td><?php echo $row['tiket_tersedia']; ?></td>
                                <td><?php echo $row['harga_tiket']; ?></td>
                                <td><?php echo $row['kursi_terjual']; ?></td>
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

      <?php include ("php/footer.php"); ?>
