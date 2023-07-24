<?php
    require_once "lib/lib-login.php";
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

    <!-- Bagian - - Footer -->
    <div class="bag-footer">
        <?php include"php/footer.php";?>
    </div>

    <!-- Script JS -->
    <script src="js/navbar-login.js"></script>
</body>
</html>