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
    <link rel="stylesheet" href="css/all.css">
    <?php
        if (cekLogin()) { ?>
            <link rel="stylesheet" href="css/navbar-login.css">
        <?php }else{ ?>
            <link rel="stylesheet" href="css/navbar.css">
        <?php }
    ?>
    <link rel="stylesheet" href="css/ticket-page.css">
    <link rel="stylesheet" href="css/footer.css">
</head>

<!-- Body -->
<body>
    <!-- Bagian 1 - Navbar & Slider -->
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
        
        <div class="ticket-show">
        <?php 
                    foreach($data as $rows){
                ?>
          <div class="tix-1">
            <img src="<?php echo $rows['foto']; ?>" alt="" />
            <p><?php echo $rows['judul']; ?><br />Animation - 122m<br />VIP 1<br />17.55 - 19.57</p>
            <p class="code">Your code is <br />3E423A</p>
            <button class="ticket-1" onclick="window.location.href = 'qr-code.html';">Qr Code</button>
          </div>
          <?php
                    }
                ?>
        </div>
      </div>
    </div>
    <!-- Bagian - - Footer -->
    <div class="bag-footer">
        <?php include"php/footer.php";?>
    </div>

    <!-- Script JS -->
    <script src="js/navbar-login.js"></script>

    
</body>
</html>