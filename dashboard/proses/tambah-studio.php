<?php
    require_once "../../lib/lib-db-film.php";
    require_once "../../lib/lib-db-users.php";

    $lokasi = $_POST['lokasi'];
    $no_studio = $_POST['stud_no'];
    $jumlah_kursi = $_POST['jlh_baris'].";".$_POST['jlh_kolom'];

    tambahStudio($lokasi, $no_studio, $jumlah_kursi);
    header("location: ../manage-studio.php");
?>