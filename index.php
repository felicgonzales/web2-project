<?php
    require_once "lib/lib-login.php";
    require_once "lib/lib-db-film.php";

    $film = semuaFilm();
?>

<!DOCTYPE html>
<html lang="en">

<!-- Head -->
<head>
    <?php require_once"php/head.php";?>

    <!-- Title/Icon/Link -->
    <?php require_once"php/icon_link.php";?>
    <title>F-TIX | Home</title>

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
    <link rel="stylesheet" href="css/footer.css">
    <style>
        .mov-img img{
            object-fit: contain;
            width: calc(100% / 5);
            height: 300px;
            animation: slider 40s linear infinite;
        }

        @keyframes slider {
            0% {
                transform: translateX(0);
            }
            100% {
                transform: translateX(calc(-100% * <?php echo hitungFilm(); ?>));
            }
        }
    </style>
</head>

<!-- Body -->
<body>
    <!-- Bagian 1 - Navbar & Slider -->
    <div class="bag-01">
        <!-- Navbar -->
        <?php 
        if (cekLogin()) {
            require"php/navbar-login.php";
        }else{
            require"php/navbar.php";
        }
        ?>
        <!-- Slider -->
        <div class="new-movie">
            <div class="new1">
                <h3>Hot <span style="color: rgba(255,0,0,0.8500000238418579);">movies</span> for this
                weekend. <br>What you waiting for <span style="color: rgba(255,0,0,0.8500000238418579);">buy
                now</span></h3>
            </div>
            <div class="new2">
                <div class="mov-img">
                    <?php
                        for ($i=0; $i < 2; $i++) { 
                            foreach ($film as $value) {
                                // if($value['kategori'] == "now_showing"){
                                //     echo "<img src='".$value['foto']."' alt=''>";
                                // }
                                echo "<img src='".$value['foto']."' alt=''>";
                            }
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>

    <!-- Bagian 2 - Video & Trailer -->
    <div class="bag-02" id="vid-trailer">
        <h3 class="bag2-t">
            VIDEO & TRAILERS
        </h3>
        <div class="vid1">
            <video id="film" loop controls>
            <source src="vid/Ant-Man.mp4" type="video/mp4">
            </video>
            <ul class="vid-nav">
                <li id="film-ant"><img src="img/Trailer/Ant-Man.webp" alt=""></li>
                <li id="film-blood"><img src="img/Trailer/Blood.webp" alt=""></li>
                <li id="film-creed"><img src="img/Trailer/Creed.webp" alt=""></li>
                <li id="film-pesu"><img src="img/Trailer/Pesugihan.webp" alt=""></li>
                <li id="film-suzu"><img src="img/Trailer/Suzume.webp" alt=""></li>
                <li id="film-waktu"><img src="img/Trailer/Waktu Magrib.webp" alt=""></li>
            </ul>
        </div>
        <div class="vid2">
            <h1 id="vid-id1">
                Ant Man Video Trailer
            </h1>
            <p id="vid-id2">
                Scott Lang (Paul Rudd), Hope Van Dyne (Evangeline Lilly) Dr. Hank Pym (Michael Douglas) dan Janet Van Dyne (Michelle Pfeiffer) menjelajahi Alam Kuantum, tempat mereka bertemu dengan makhluk aneh dan memulai petualangan yang melampaui batas yang mereka pikir mungkin.
            </p>
        </div>
    </div>

    <!-- Bagian 3 - Partner -->
    <div class="bag-03">
        <div class="bag3-p1" id="partner">
            <p>Enjoy the best Movie, Entertainment, and Food, keep up to date with the latest News, and Get attractive Deals and Promos!</p>
            <div class="but-buy">
                <button type="button">Buy Now</button>
            </div>
        </div>
        <div class="bag3-p2">
            <h2>OUR PARTNER</h2>
            <div class="img-part">
                <img src="img/Our Partner/cgv.png" alt="">
                <img src="img/Our Partner/cinepolis.png" alt="">
                <img src="img/Our Partner/dana.png" alt="">
                <img src="img/Our Partner/googleplay.png" alt="">
                <img src="img/Our Partner/visionplus.png" alt="">
                <img src="img/Our Partner/xxi.png" alt="">
            </div>
        </div>
    </div>

    <!-- Bagian 4 - Footer -->
    <div class="bag-04">
        <?php include"php/footer.php";?>
    </div>

    <!-- Script JS -->
    <script src="js/vid-nav.js"></script>
    <script src="js/navbar-login.js"></script>
</body>
</html>