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
    <title>F-TIX | Information</title>

    <!-- Style -->
    <link rel="stylesheet" href="css/all.css">
    <?php
        if (cekLogin()) { ?>
            <link rel="stylesheet" href="css/navbar-login.css">
        <?php }else{ ?>
            <link rel="stylesheet" href="css/navbar.css">
        <?php }
    ?>
    <link rel="stylesheet" href="css/information-page.css">
    <link rel="stylesheet" href="css/footer.css">
</head>

<!-- Body -->
<body>
    <!-- Bagian 1 - Navbar & Slider -->
    <div class="information-page">
        <!-- Navbar -->
        <?php 
        if (cekLogin()) {
            require"php/navbar-login.php";
        }else{
            require"php/navbar.php";
        }
        ?>

        <!-- Information Section -->
        <div class="info">
            <a href="index.php">f-tix</a>
            <div class="info-cont">
                <p class="p1">F-TIX merupakan website pembelian tiket film dan makanan. F-TIX dirilis pada tahun 2023 oleh 3 pengembang yaitu Felic, Finn, dan Fredo. F dapat diartikan dengan Friendly dan TIX diartikan Ticket. F-TIX memberikan pelayanan dalam pembelian tiket dan makanan yang dimana dapat dipesan dimana saja dan kapan saja.</p>
                <p class="p2">Selain menyediakan film layar Indonesia, F-TIX juga menyediakan film yang berkelas dunia. Tidak hanya teknologi dengan fitur-fitur yang lengkap, F-TIX juga berkolaborasi dengan beberapa perusahaan lainnya seperti CGV, Cinepolis, Google Play, dana, XXI, dan VISION. Untuk menyempurnakan pelayanan kepada penonton, telah hadir juga bioskop dengan system audio Dolby Atmos yang sudah ada diterapkan di beberapa biskop yang terletak di kota Medan.</p>
            </div>
        </div>
    </div>

    <!-- Bagian 2 - Footer -->
    <div class="bag-footer">
        <?php include"php/footer.php";?>
    </div>

    <!-- Script JS -->
    <script src="js/navbar-login.js"></script>
</body>
</html>