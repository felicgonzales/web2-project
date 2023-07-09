<?php
  require_once "lib/lib-login.php";
  require_once "lib/connection.php";
  $sql1 = "SELECT * FROM film WHERE kategori = 'now_showing'";
 $sql2 = "SELECT * FROM film WHERE kategori= 'coming_soon'";
 $result_now = mysqli_query($conn,$sql1);
 $result_soon = mysqli_query($conn,$sql2);
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
      <div class="now-show" id="now_playing">
        <h2 class="text2">NOW SHOWING</h2>
      </div>

      <div class="container">
      
        <div class="row">
        <?php 
                $i = 1;
                if(mysqli_num_rows($result_now) > 0){
                    while($rows = mysqli_fetch_assoc($result_now)){
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
                if(mysqli_num_rows($result_soon) > 0){
                    while($rows = mysqli_fetch_assoc($result_soon)){
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