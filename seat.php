<?php

  require_once "lib/lib-db-film.php";

  $stud_id = $_GET['studio_id'];
  $film_id = isset($_GET['film_id']) ? $_GET['film_id'] : 1;
  $jam_tayang = $_GET['jam_tayang'];
  $tanggal_tayang = $_GET['tanggal_tayang'];

  $result = jumlahKursi($stud_id);
  $hitung = hitungFilm();
  $shows = mencariJadwal();


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
      <label>Sun Plaza </label>
      <select id="movie">
        <option value="45000">Regular Rp 45.000</option>
        <option value="60000">Ultra Xd Rp 60.000</option>
      </select>

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

      <div class="container">
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


        <button class="btn" onclick="parent.location='food.html'">
          <p>
            <span id="count">0</span>
            seat &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Rp.
            <span id="total">0</span>
          </p>
        </button>
      </div>
    </div>

    <script src="js/seat.js"></script>
  </body>
</html>
