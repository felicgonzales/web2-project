
<?php 
    require_once "lib/lib-db-film.php";
    $id = $_GET['id'];
    $film_id = $_GET['film_id'];
    
    $studio = cariStudio();
    $text = '<label for="exampleInputPassword1" class="form-label">Pilih Studio</label><br>';
    $i = 1;
    foreach($studio as $row){
        $text .= '
            <div class="form-check form-check-inline">
                <input type="radio" class="btn-check" onclick="getDate(this)" name="studio_id" id="inlineRadio'.$i.'" autocomplete="off" value="'.$row['id'].'">
                <label class="btn btn-outline-primary" for="inlineRadio'.$i.'">Studio : '.$row['no_studio'].'</label>
            </div>
        ';
        $i++;
    }
    echo $text;

?>