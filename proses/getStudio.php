
<?php 
    include('lib/connection.php');
    $id = $_GET['id'];
    $film_id = $_GET['film_id'];
    $sql = "SELECT DISTINCT s.no_studio, s.id FROM jadwal j
            JOIN studio s ON s.id = j.id_studio
            JOIN lokasi l ON l.id = s.id_lokasi
            WHERE l.id = $id and j.id_film = $film_id";
    $studio = mysqli_query($conn, $sql);
    $text = '<label for="exampleInputPassword1" class="form-label">Pilih Studio</label><br>';
    $i = 1;
    while($row = mysqli_fetch_assoc($studio)){
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