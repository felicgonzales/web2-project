<?php

  require_once "lib/lib-db-film.php";

  $stud_id = $_GET['studio_id'];
  $film_id = isset($_GET['film_id']) ? $_GET['film_id'] : 1;
  $jam_tayang = $_GET['jam_tayang'];
  $date = $_GET['date'];


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

        <div class="row">
          <div class="seat">A1</div>
          <div class="seat">A2</div>
          <div class="seat">A3</div>
          <div class="seat">A4</div>
          <div class="seat">A5</div>
          <div class="seat">A6</div>
          <div class="seat">A7</div>
          <div class="seat">A8</div>
          <div class="seat">A9</div>
          
          
        </div>
        <div class="row">
          <div class="seat">B1</div>
          <div class="seat">B2</div>
          <div class="seat">B3</div>
          <div class="seat occupied">B4</div>
          <div class="seat occupied">B5</div>
          <div class="seat">B6</div>
          <div class="seat">B7</div>
          <div class="seat">B8</div>
          <div class="seat">B9</div>
          
        </div>
        <div class="row">
          
          <div class="seat">C1</div>
          <div class="seat">C2</div>
          <div class="seat">C3</div>

          <div class="seat">C4</div>
          <div class="seat">C5</div>
          <div class="seat">C6</div>
          <div class="seat occupied">C7</div>
          <div class="seat occupied">C8</div>
          <div class="seat">C9</div>
        </div>

        <div class="row">
          <div class="seat">D1</div>
          <div class="seat">D2</div>

          <div class="seat">D3</div>
          <div class="seat">D4</div>
          <div class="seat">D5</div>
          <div class="seat">D6</div>
          <div class="seat occupied">D7</div>
          <div class="seat occupied">D8</div>
          <div class="seat">D9</div>
        </div>
        <div class="row">
          
          <div class="seat">E1</div>
          <div class="seat">E2</div>
          <div class="seat">E3</div>
          <div class="seat">E4</div>
          <div class="seat">E5</div>
          <div class="seat occupied">E6</div>
          <div class="seat occupied">E7</div>
          <div class="seat">E8</div>
          <div class="seat">E9</div>
        </div>
        <div class="row">
          
          <div class="seat">F1</div>
          <div class="seat">F2</div>
          <div class="seat">F3</div>
          <div class="seat">F4</div>
          <div class="seat">F5</div>
          <div class="seat occupied">F6</div>
          <div class="seat occupied">F7</div>
          <div class="seat">F8</div>
          <div class="seat">F9</div>
        </div>
        <div class="row">
          <div class="seat">G1</div>
          <div class="seat">G2</div>

          <div class="seat">G3</div>
          <div class="seat">G4</div>
          <div class="seat occupied">G5</div>
          <div class="seat occupied">G6</div>
          <div class="seat">G7</div>
          
          <div class="seat occupied">G8</div>
          <div class="seat occupied">G9</div>
         
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
