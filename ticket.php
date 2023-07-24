<?php
    require_once "lib/lib-login.php";
    require_once "lib/lib-db-film.php";
    $user_id = $_SESSION['user_id'];
    $data = panggilInvoice($user_id);
?>

<!DOCTYPE html>
<html lang="en">

<!-- Head -->
<head>
    <?php require_once"php/head.php";?>

    <!-- Title/Icon/Link -->
    <?php require_once"php/icon_link.php";?>
    <title>F-TIX | Ticket</title>

    <!-- Style -->
    <link rel="stylesheet" href="css/ticket-page.css">
     <link rel="stylesheet" href="css/landing-page.css">
   
    
    <link rel="stylesheet" href="css/footer.css">
</head>

<!-- Body -->
<body>
    <!-- Bagian 1 - Navbar & Slider -->
    <?php
        if (cekLogin()) { ?>
            <link rel="stylesheet" href="css/navbar-login.css">
        <?php }else{ ?>
            <link rel="stylesheet" href="css/navbar.css">
        <?php }
    ?>
    <div class="ticket-page">
        <!-- Navbar -->
        <?php 
        if (cekLogin()) {
            require"php/navbar-login.php";
        }else{
            require"php/navbar.php";
        }
        ?>
    </div>
    <div class="purchase-cont">
      <div class="his-cont">
        <h1 class="his-1"> History</h1>
        <?php 
                    foreach($data as $rows){
                ?>
        <div class="ticket-show">
        
          <div class="tix-1">
            <img src="<?php echo $rows['foto']; ?>" alt="" />
            <p><?php echo $rows['judul']; ?><br /><?php echo $rows['wilayah'].' - '.$rows['nama_lokasi']; ?><br /><?php echo "Studio ".$rows['no_studio'];?><br /><?php echo "Date: " .$rows['tanggal_tayang'].', Time: '.$rows['jam_tayang'];?></p>
            <p class="code"><?php echo " Jumlah Tiket : ". $rows['jmlh_tiket']; ?> <br /><?php echo "Detail : ". $rows['detail_tiket'];?></p>
            
          </div>
          </div>
            </div>
            </div>
          <?php
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

    
</body>
</html>