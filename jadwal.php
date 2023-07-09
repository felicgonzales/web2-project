<?php
  require_once "lib/lib-login.php";
  require_once "lib/connection.php";
  $film_id = $_GET['id'];
    $sql = "SELECT * FROM film WHERE id = $film_id";
    $film = mysqli_query($conn, $sql);
    if(mysqli_num_rows($film) > 0){
        $film = mysqli_fetch_assoc($film);
    }
?>

<!DOCTYPE html>
<html lang="en">
<!-- Head -->
<head>
    <?php require_once"php/head.php";?>

    <!-- Title/Icon/Link -->
    <?php require_once"php/icon_link.php";?>
    <title>F-TIX | Now Showing</title>

    <!-- Style -->
    <link rel="stylesheet" href="css/all.css">
    <?php
        if (cekLogin()) { ?>
            <link rel="stylesheet" href="css/navbar-login.css">
        <?php }else{ ?>
            <link rel="stylesheet" href="css/navbar.css">
        <?php }
    ?>
       <link rel="stylesheet" href="css/landing-page.css">
    <link rel="stylesheet" href="css/jadwal.css">
   
    
</head>
<body>
    <!-- Bagian 1 - Navbar  -->
    <div class="bag-01">
        <!-- Navbar -->
        <?php 
        if (cekLogin()) {
            require"php/navbar-login.php";
        }else{
            require"php/navbar.php";
        }
        ?>
        </div>

        <script src="js/navbar-login.js"></script>

<!-- Bagian 2 - jadwal  -->

        <div class="jadbox1">
        <div class="box1">
          <h2>SENIN, 27-03-2023</h2>
          <div class="jadwal1">
            <p id="kiri">SUN PLAZA</p>
            <p id="kanan">
              Regular <br />
              Rp 45.000
            </p>
            <p id="kanan">
              Ultra Xd <br />
              Rp 60.000
            </p>
          </div>
          <div class="jam1">
            <a href="seat1.html">
              <button type="button" class="jam-but">13.00</button>
              <button type="button" class="jam-but">14.45</button>
              <button type="button" class="jam-but">16.00</button>
              <button type="button" class="jam-but">19.00</button>
            </a>
          </div>
          <div class="jadwal1">
            <p id="kiri">CENTRE POINT</p>
            <p id="kanan">
              Regular <br />
              Rp 40.000
            </p>
            <p id="kanan">
              Ultra Xd <br />
              Rp 55.000
            </p>
          </div>
          <div class="jam1">
            <a href="seat2.html">
              <button type="button" class="jam-but">14.25</button>
              <button type="button" class="jam-but">18.00</button>
              <button type="button" class="jam-but">21.00</button>
            </a>
          </div>
        </div>
      </div>

      <div class="jadbox2">
        <div class="box1">
          <h2>RABU, 29-03-2023</h2>
          <div class="jadwal1">
            <p id="kiri">DELIPARK</p>
            <p id="kanan">
              Regular <br />
              Rp 45.000
            </p>
            <p id="kanan">
              Ultra Xd <br />
              Rp 60.000
            </p>
          </div>
          <div class="jam1">
            <a href="seat3.html">
              <button type="button" class="jam-but">14.00</button>
              <button type="button" class="jam-but">14.45</button>
              <button type="button" class="jam-but">17.00</button>
            </a>
          </div>
          <div class="jadwal1">
            <p id="kiri">THAMRIN PLAZA</p>
            <p id="kanan">
              Regular <br />
              Rp 35.000
            </p>
            <p id="kanan">
              Ultra Xd <br />
              Rp 50.000
            </p>
          </div>
          <div class="jam1">
            <a href="seat4.html">
              <button type="button" class="jam-but">12.00</button>
              <button type="button" class="jam-but">17.00</button>
              <button type="button" class="jam-but">19.00</button>
              <button type="button" class="jam-but">21.00</button>
            </a>
          </div>
        </div>
      </div>
      <div class="jadbox3">
        <div class="box1">
          <h2>SABTU, 01-04-2023</h2>
          <div class="jadwal1">
            <p id="kiri">LIPPO MALL</p>
            <p id="kanan">
              Regular <br />
              Rp 75.000
            </p>
            <p id="kanan">
              Ultra Xd <br />
              Rp 90.000
            </p>
          </div>
          <div class="jam1">
            <a href="seat5.html">
              <button type="button" class="jam-but">14.00</button>
              <button type="button" class="jam-but">14.45</button>
              <button type="button" class="jam-but">17.00</button>
              <button type="button" class="jam-but">19.00</button>
            </a>
          </div>
        </div>
      </div>
    </div>
      <!-- Bagian 4 - Footer -->
      <div class="bag-04">
        <?php include"php/footer.php";?>
    </div>

</body>
</html>