<?php 
  require_once "lib/lib-db-film.php";
    $film_id = $_GET['film_id'];
    $studio_id = $_GET['studio_id'];

    $arr_tanggal = getTanggal($film_id,$studio_id);


    $text = '<label for="" class="form-label">Pilih Tanggal</label><br>';
    $i = 1;
    foreach($arr_tanggal as $row){
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