<?php
    require_once "../../lib/lib-db-film.php";
    require_once "../../lib/lib-db-users.php";

    $wilayah = $_POST['wilayah'];
    $lokasi = $_POST['lokasi'];
    $lokasi_sama = cariLokasiWilayah($lokasi);
    $wilayah_sama = cariWilayah($wilayah);
    if($lokasi_sama['nama_lokasi'] == null){
        tambahLokasi($wilayah,$lokasi);
        header("location: ../manage-lokasi.php");
    }else{
        if ($wilayah_sama['wilayah'] == null) {
            tambahLokasi($wilayah,$lokasi);
            header("location: ../manage-lokasi.php");
        }else{
            header("location: ../manage-lokasi.php");
        }
    }

    
?>