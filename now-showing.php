<?php
  require_once "lib/lib-login.php";
  require_once "lib/lib-db-film.php";
 $hitung_now = hitungNow();
  $result_now = cariNow();
  $hitung_soon = hitungSoon();
  $result_soon = cariSoon();
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

      <div class="now-show" id="now_playing">
        <h2 class="text2">NOW SHOWING</h2>
      </div>

      <div class="container">
      
        <div class="row">
        <?php 
                $i = 1;
                if($hitung_now > 0){
                    foreach($result_now as $rows){
                        if($i <= 8){
                        ?>
          <div class="col-8 ">
          <a href="desc.php?id=<?php echo $rows['id'];?>">
              <figure class="figure">
                <img src="<?php echo $rows['foto']; ?>" class="figure-img" alt="<?php echo $rows['judul'];?>" />
                <figcaption class="figure-caption"><b><?php echo $rows['judul']; ?></b></figcaption>
              </figure>
            </a>
          </div>
          <?php
                        }
                    }
                }
            
            ?>


          
        </div>
      </div>
  

    <div class="bag-03">
      <div class="coming-soon" id="now_playing">
        <h2 class="text3">COMING SOON</h2>
      </div>
     

      <div class="container">
        <div class="row">
        <?php 
                $i = 1;
                if($hitung_soon > 0){
                    foreach($result_soon as $rows){
                        if($i <= 8){
                        ?>
          <div class="col-8 ">
          
          <a href="desc.php?id=<?php echo $rows['id'];?>">
          <figure class="figure">
                <img src="<?php echo $rows['foto']; ?>" class="figure-img" alt="<?php echo $rows['judul'];?>" />
                <figcaption class="figure-caption"><b><?php echo $rows['judul']; ?></b></figcaption>
              </figure>
            </a>
          </div>
          <?php
                        }
                    }
                }
            
            ?>
          
        </div>     
    </div>
    
    <!-- Bagian 4 - Footer -->
    <div class="bag-04">
        <?php include"php/footer.php";?>
    </div>

    <!-- Script JS -->
    
    <script src="js/navbar-login.js"></script>
    <script src="js/jadwal.js"></script>
</body>
</html>