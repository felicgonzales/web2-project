<?php

  require_once "lib/lib-db-film.php";

  $stud_id = $_GET['studio_id'];
  $film_id = isset($_GET['film_id']) ? $_GET['film_id'] : 1;
  $jam_tayang = $_GET['jam_tayang'];
  $tanggal_tayang = $_GET['date'];

  $hitung_studio = hitungKursiStud($stud_id);
  $hitung_film = hitungFilmById($film_id);
  $hitung_jadwal = mencariJadwal($stud_id, $tanggal_tayang, $film_id, $jam_tayang);

  $jadwal = mencariJdwl($stud_id, $tanggal_tayang, $film_id, $jam_tayang);

  if($hitung_film > 0){
    $film = filmById($film_id);
  }
  if ($hitung_studio > 0) {
      // output data of each row
      $studio = jumlahKursi($stud_id);
      $detail = $studio['pattern_kursi'];
      //10;15 -> [10,15]
      $arr_detail = explode(';',$detail); // -> Split (Memisahkan karakter berdasarkan delimeter tertentu)
      $baris = $arr_detail[0];
      $kolom = $arr_detail[1];
      $arr_kursi = array(); //->Nampung kursi yang digenerate
      $arr_kursi_terbeli = array(); //-> Kursi yang uda dibeli
      if($jadwal['kursi_terjual'] != ''){
        foreach(explode(';',$jadwal['kursi_terjual']) as $jdwl){
          array_push($arr_kursi_terbeli,$jdwl);
        }
      }
      for ($i = 0; $i < $baris; $i++){
          $char_bar = chr(65+$i);
          $temp = array();
          for ($j = 1; $j <= $kolom; $j++){
              $id_kursi = $char_bar.$j;
              array_push($temp,$id_kursi);
          }
          array_push($arr_kursi,$temp);
      }
  } 
  else {
      ?>
      <script>alert("Error. Please contact IT Staff")</script>
      <?php
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>seat page</title>
    <link rel="stylesheet" href="css/seat.css" />
  </head>
  <body>
    <div class="movie-container">
      <label><?php echo $film["judul"];?> </label>
      <h3 style="color: white;">Harga per tiket : Rp. <?php echo number_format($jadwal['harga_tiket'],2,'.',','); ?></h3>

      <ul class="showcase">
      <li>
        <div class="seat"></div>
        <small>N/A</small>
      </li>
      <li>
        <div class="seat selected"></div>
        <small>Selected</small>
      </li>
      <li>
        <div class="seat occupied"></div>
        <small>Occupied</small>
      </li>
    </ul>

      <div class="container" style="text-align:center;">
        <div class="screen">
          <h1>f - tix</h1>
          <h2>movie screen</h2>
        </div>
        <?php 
            for($i = 0; $i < count($arr_kursi); $i++){
        ?>

        <div class="row">
        <?php 
                    for($j = 0; $j < count($arr_kursi[$i]); $j++){
                        $id_kursi = $arr_kursi[$i][$j];
                        if(in_array($id_kursi,$arr_kursi_terbeli)){
                            $status = "sold";
                        }
                        else {
                            $status = "avail";
                        }
                        ?>
                            <div class="seat <?php if($status == "sold") echo 'occupied'; ?>"><?php echo $id_kursi;?></div>
                        <?php
                    }
                ?>
                 </div>
        <?php
            }
        ?>
    </div>


        
    <p class="text" style="margin : 25px 0;">
      You have selected <span id="count">0</span> seats</span>
    </p>
    <form method="post" id="form_checkout" action="payment_page.php">
      <div class="row">
        <input type="text" style="display:none;" id="chair_list" name="chair_list">
        <input type="text" style="display:none;" id="studio_id" name="studio_id" value="<?php echo $stud_id;?>">
        <input type="text" style="display:none;" id="film_id" name="film_id" value="<?php echo $film_id;?>">
        <input type="text" style="display:none;" id="jam_tayang" name="jam_tayang" value="<?php echo $jam_tayang;?>">
        <input type="text" style="display:none;" id="date" name="date" value="<?php echo $date;?>">
      </div>
      <div class="row" style="min-width : 450px;min-height : 40px;">
        <button class="btn btn-primary" style="width : 100%;background-color : #35b27d; color:#fff;text-transform:uppercase;font-weight : 600;border-radius:25px;box-shadow : 2px 2px 5px #555;cursor:pointer;">Checkout</button>
      </div>

    <script src="js/seat.js"></script>
  </body>
</html>
