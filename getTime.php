<?php 
    require_once "lib/lib-db-film.php";
    $film_id = $_GET['film_id'];
    $studio_id = $_GET['studio_id'];
    $tanggal_tayang = $_GET['tgl'];
    
    
    $arr_jam_tayang = getTime($film_id, $studio_id, $tanggal_tayang);
    $text = '<label for="" class="form-label" style="opacity : 70%;">Pilih Jam Tayang</label><br>';
    $i = 1;
    foreach($arr_jam_tayang as $row){
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