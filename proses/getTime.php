<?php 
    include('lib/connection.php');
    $film_id = $_GET['film_id'];
    $studio_id = $_GET['studio_id'];
    $tanggal_tayang = $_GET['tgl'];
    $sql = "SELECT DISTINCT jam_tayang FROM jadwal j
            JOIN studio s ON s.id = j.id_studio
            JOIN lokasi l ON l.id = s.id_lokasi
            WHERE j.id_film = $film_id and j.id_studio = $studio_id and j.tanggal_tayang = $tanggal_tayang";
    $arr_jam_tayang = mysqli_query($conn, $sql);
    $text = '<label for="" class="form-label">Pilih Jam Tayang</label><br>';
    $i = 1;
    while($row = mysqli_fetch_assoc($arr_jam_tayang)){
        $text .= '
            <div class="form-check form-check-inline">
                <input type="radio" class="btn-check" name="jam_tayang" id="jt'.$i.'" value="'.$row['jam_tayang'].'">
                <label class="btn btn-outline-primary" for="jt'.$i.'">'.$row['jam_tayang'].'</label>
            </div>
        ';
        $i++;
    }
    echo $text;

?>