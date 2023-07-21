<?php
    require_once "../../lib/lib-db-film.php";
    require_once "../../lib/lib-db-users.php";

    $date = $_POST['shows_date'];
    $film = $_POST['film'];
    $studio = $_POST['studio_no'];
    $jam = $_POST['jam_tayang'];
    $harga = $_POST['price'];

    $jlh_krsi = jumlahKursi($studio);
    $pattern = $jlh_krsi['pattern_kursi'];
    $arr_pattern = explode(';', $pattern);
    $total_kursi = $arr_pattern[0] * $arr_pattern[1];

    $str_jam = "";
    foreach ($jam as $jam_tayang){
        $str_jam .= "'$jam_tayang',";
    }
    $str_jam = substr($str_jam,0,strlen($str_jam)-1);
    $hitungJadwal = mencariJadwal($studio, $date, $film, $str_jam);
    if( $hitungJadwal > 0){
        $_SESSION['jadwalError'] = "Jadwal telah ada";
        return header('Location: ../modals/add-jadwal.php');
    }
    $tes = tambahJadwal($studio, $film, $date, $jam, $total_kursi, $harga);
    header("location: ../manage-jadwal.php");
?>