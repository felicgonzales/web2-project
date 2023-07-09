<?php
    require_once "../../lib/lib-db-film.php";
    require_once "../../lib/lib-db-users.php";

    $date = $_POST['shows_date'];
    $film = $_POST['film'];
    $studio = $_POST['studio_no'];
    $jam = $_POST['jam_tayang'];
    $harga = $_POST['price'];

    tambahJadwal($date, $film, $studio, $jam, $harga);
    header("location: ../manage-jadwal.php");
?>