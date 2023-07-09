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
    <link rel="stylesheet" href="css/desc.css">
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

        <script src="js/navbar-login.js"></script>
    
<!-- Bagian 2 - desc  -->

    <div class="bag-02">
      <div class="gambar">
        <div class="utama">
          <img src="<?php echo $film['foto']; ?>" />
          <?php
                    if(isset($_SESSION['logged_in'])){
                ?>
                    <a href="choose_sched.php?id=<?php echo $film['id'];?>" class="btn btn-primary btn_buy">Beli Tiket</a> 
                <?php
                    }
                ?>
        </div>
        <div class="sect">
          <h1><?php echo $film['judul'];?></h1>
          <p><?php echo $film['durasi'];?></p>
          <p><i class="fa-solid fa-location-dot" style="color: #ffffff"></i> &nbsp &nbsp Medan, Sumatera Utara</p>
          <p><i class="fa-solid fa-phone" style="color: #ffffff"></i>&nbsp &nbsp 061 7375452</p>
        </div>
        <div class="sinop">
          <h2>Sinopsis :</h2>
          <p>
          <?php echo $film['deskripsi'];?>

          </p>
        </div>
      </div>

      
      <!-- Bagian 4 - Footer -->
      <div class="bag-04">
        <?php include"php/footer.php";?>
    </div>

</body>
</html>