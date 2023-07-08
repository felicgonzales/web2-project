<?php
    require_once "lib/lib-login.php";
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
    <link rel="stylesheet" href="css/now-showing.css">
    <link rel="stylesheet" href="css/footer.css">
    
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
<!-- Bagian 2 - Now Showing  -->
<div class="bag-02">
      <div class="dropdown">
        <div class="select">
          <span class="selected">Sun Plaza</span>
          <div class="caret"></div>
        </div>
        <ul class="menu">
          <li class="active">Sun Plaza</li>
          <li>Thamrin Plaza</li>
          <li>Centre Point</li>
          <li>Lipo Mall</li>
          <li>Delipark</li>
          <li>Medan Fair</li>
        </ul>
      </div>
      <div class="now-show">
        <h2 class="text2">NOW SHOWING</h2>
      </div>

      <div class="container">
      
        <div class="row">
        <?php 
                $i = 1;
                if(mysqli_num_rows($result_now) > 0){
                    while($row = mysqli_fetch_assoc($result_now)){
                        if($i <= 5){
                        ?>
          <div class="col-8<?php echo $i;?>">
          <a href="det_movie.php?id=<?php echo $row['id'];?>">
              <figure class="figure">
                <img src="<?php echo $row['url_foto']; ?>" class="figure-img" alt="<?php echo $row['nama_film'];?>" />
                <figcaption class="figure-caption"><b><?php echo $row['nama_film']; ?></b></figcaption>
              </figure>
            </a>
          </div>
          <?php
                        }
                    }
                }
            
            ?>

          <div class="col-8">
            <a href="Login.html">
              <figure class="figure">
                <img src="./img/Movie/creed.jpg" class="figure-img" alt="..." />
                <figcaption class="figure-caption"><b>CREED III</b></figcaption>
              </figure>
            </a>
          </div>

          <div class="col-8">
            <a href="Login.html">
              <figure class="figure">
                <img src="./img/Movie/blood.jpg" class="figure-img" alt="..." />
                <figcaption class="figure-caption"><b>BLOOD</b></figcaption>
              </figure>
            </a>
          </div>

          <div class="col-8">
            <a href="Login.html">
              <figure class="figure">
                <img src="./img/Movie/antman.jpg" class="figure-img" alt="..." />
                <figcaption class="figure-caption"><b>ANT-MAN </b></figcaption>
              </figure>
            </a>
          </div>
        </div>

        <div class="row">
          <div class="col-8">
            <a href="Login.html">
              <figure class="figure">
                <img src="./img/Movie/waktumagrib.jpg" class="figure-img" alt="..." />
                <figcaption class="figure-caption"><b>WAKTU MAGRIB</b></figcaption>
              </figure>
            </a>
          </div>

          <div class="col-8">
            <a href="Login.html">
              <figure class="figure">
                <img src="./img/Movie/sas.jpg" class="figure-img" alt="..." />
                <figcaption class="figure-caption"><b>SAS: RED NOTICE</b></figcaption>
              </figure>
            </a>
          </div>

          <div class="col-8">
            <a href="Login.html">
              <figure class="figure">
                <img src="./img/Movie/missing.jpg" class="figure-img" alt="..." />
                <figcaption class="figure-caption"><b>MISSING</b></figcaption>
              </figure>
            </a>
          </div>

          <div class="col-8">
            <a href="Login.html">
              <figure class="figure">
                <img src="./img/Movie/pesugihan.jpg" class="figure-img" alt="..." />
                <figcaption class="figure-caption"><b>PESUGIHAN</b></figcaption>
              </figure>
            </a>
          </div>
        </div>
      </div>
    </div>

    <div class="bag-03">
      <div class="coming-soon">
        <h2 class="text3">COMING SOON</h2>
      </div>
     

      <div class="container">
        <div class="row">
          <div class="col-8">
            <a href="#  ">
              <figure class="figure">
                <img src="./img/Movie/johnwick.jpg" class="figure-img" alt="..." />
                <figcaption class="figure-caption"><b>JOHN WICK</b></figcaption>
              </figure>
            </a>
          </div>

          <div class="col-8">
            <a href="#">
              <figure class="figure">
                <img src="./img/Movie/shazam.jpg" class="figure-img" alt="..." />
                <figcaption class="figure-caption"><b>SHAZAM</b></figcaption>
              </figure>
            </a>
          </div>

          <div class="col-8">
            <a href="#">
              <figure class="figure">
                <img src="./img/Movie/losmen.jpg" class="figure-img" alt="..." />
                <figcaption class="figure-caption"><b>LOSMEN MELATI</b></figcaption>
              </figure>
            </a>
          </div>

          <div class="col-8">
            <a href="#">
              <figure class="figure">
                <img src="./img/Movie/dungeons.jpg
                " class="figure-img" alt="..." />
                <figcaption class="figure-caption"><b>DUNGEONS & DRAGON</b></figcaption>
              </figure>
            </a>
          </div>
        </div>     
    </div>
    
    <!-- Bagian 4 - Footer -->
    <div class="bag-04">
        <?php include"php/footer.php";?>
    </div>

    <!-- Script JS -->
    
    <script src="js/navbar-login.js"></script>
    <script src="js/now-showing.js"></script>
</body>
</html>