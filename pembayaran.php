<?php
 require_once "lib/lib-db-film.php";
  if(isset($_POST)){
    $stud_id = $_POST['studio_id'];
    $film_id = $_POST['film_id'];
    $jam_tayang = $_POST['jam_tayang'];
    $date = $_POST['date'];
    $booked = $_POST['chair_list'];
    $arr_book = str_replace(',',';',$booked).';'; #E7;E8 [E7,E8]
    $arr_kursi_pesan = explode(',',$booked);
    $count_jlh = count($arr_kursi_pesan);
    $result_get = mCariJdwl($stud_id,$date,$film_id,$jam_tayang);
    $id_shows = $result_get['id'];
    $result_info_shows = criJdwl($id_shows);
    $result_film = filmById($film_id);

    $flag = 0;
    foreach($arr_kursi_pesan as $kursi){
        if(strpos($result_get['kursi_terjual'],$kursi) != ''){
            $flag = 1;
            break;
        }
    }
    if($flag == 0){
        if($result_get['kursi_terjual'] != ''){
            $arr_book .= $result_get['kursi_terjual'];
        }
        $sold = $result_get['tiket_terjual'] + $count_jlh;
        $left = $result_get['tiket_tersedia'] - $count_jlh; 
        $id = $result_get['id'];
        $result = perbaharuiJadwal($id, $arr_book, $sold, $left);
        if(isset($result)){
          echo "Error";
          die();
        }else{
          
        }
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/pembayaran.css" />
    <title>Pembayaran</title>
  </head>
  <body>
    <div class="pembayaran-container">
      <div class="titel">
        <h1>f-tix</h1>
        <hr size="" width="100%" color="white" />
        <h2>Pembayaran Tiket</h2>
      </div>
      <div class="rekap">
     
              <div class="col-lg-4">
                <img src="<?php echo $result_film['foto'];?>" alt="" class="img-fluid">
              </div>
        <div class="rekap1">
          <h2>Judul Film</h2>
          
          <h2>Tempat Duduk</h2>
          <h2>Studio</h2>
          <h2>Jam Tayang</h2>
          <h2>Harga Per Tiket</h2>
          <h2>Lokasi</h2>
        </div>
        <div class="rekap2">
          <h2>:</h2>
          
          <h2>:</h2>
          <h2>:</h2>
          <h2>:</h2>
          <h2>:</h2>
          <h2>:</h2>
        </div>
        <div class="rekap3">
          <h2><?php echo $result_film['judul']; ?></h2>
          
          <h2> <?php echo $booked;?></h2>
          <h2><?php echo $result_info_shows['no_studio'];?></h2>
          <h2><?php echo $result_info_shows['jam_tayang'];?></h2>
          <h2>Rp. <?php echo number_format($result_get['harga_tiket'],2,'.',',');?></h2>
          <h2><?php echo $result_info_shows['nama_lokasi'];?></h2>
        </div>
      </div>
      <form action="checkout.php" method="POST">
      <div class="form-group mb-3">
              <label class="mb-1" style="color: white;">Pembeli atas nama</label>
              <input class="form-control text-uppercase" type="text" name="username" value="<?php echo $_SESSION['username']; ?>" readonly></input>
              <input class="form-control text-uppercase" type="text" name="shows_id" value="<?php echo $result_get['id']; ?>" readonly style="display:none;"></input>
              <input class="form-control text-uppercase" type="text" name="tickets" value="<?php echo $booked; ?>" readonly style="display:none;"></input>
          </div>
      <hr size="" width="100%" color="white" />
      <div class="total-biaya">
        <h2 id="kiri">Total Biaya</h2>
        <h2 id="tengah">:</h2>
        <h2 id="kanan"><?php echo number_format($count_jlh * $result_get['harga_tiket'],2,'.',',');?></h2>
      </div>
      
      <hr size="" width="100%" color="white" />
      <div class="buton">
        <a href="#">
          <button class="pay"id="PayButton" type = "submit">
            Pay Now
            <span class="first"></span>
            <span class="second"></span>
            <span class="third"></span>
            <span class="fourth"></span>
          </button>
        </a>
        
      </div>
    </div>
    </form>
  </body>
</html>
