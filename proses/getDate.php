<?php 
 include('lib/connection.php');
    $film_id = $_GET['film_id'];
    $studio_id = $_GET['studio_id'];

    $sql = "SELECT DISTINCT tanggal_tayang FROM jadwal j
            JOIN studio s ON s.id = j.id_studio
            JOIN lokasi l ON l.id = s.id_lokasi
            WHERE j.id_film = $film_id and j.id_studio = $studio_id";
    $arr_tanggal = mysqli_query($conn, $sql);


    $text = '<label for="" class="form-label">Pilih Tanggal</label><br>';
    $i = 1;
    while($row = mysqli_fetch_assoc($arr_tanggal)){
        $text .= '
            <div class="form-check form-check-inline">
                <input type="radio" onchange="getTime(this)" class="btn-check" name="date" id="tgl'.$i.'" value="'.$row['tanggal_tayang'].'" autocomplete="off">
                <label class="btn btn-outline-primary" for="tgl'.$i.'">'.$row['tanggal_tayang'].'</label>
            </div>
        ';
        $i++;
    }
    echo $text;

?>