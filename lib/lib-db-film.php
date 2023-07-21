<?php
require_once "config.php";

function semuaFilm(){
    global $conn;

	$query = $conn->prepare("SELECT * FROM film");
	$query->execute();
    return $query->fetchAll();
}

function hitungFilm(){
	global $conn;

	$query = $conn->prepare("SELECT * FROM film");
	$query->execute();

    $hitung = $query->rowCount();
    return $hitung;
}

function tambahFilm($judul, $deskripsi, $foto, $kategori,$rilis){
	global $conn;
	
    $query = $conn->prepare("INSERT INTO film (judul, deskripsi, foto, kategori, tgl_rilis) VALUES (:judul , :deskripsi , :foto , :kategori, :tgl_rilis)");
        
    $query->execute(array(
                            'judul' => $judul,
                            'deskripsi' => $deskripsi,
                            'foto' => "img/Movie/".$foto,
                            'kategori' => $kategori,
							'tgl_rilis'	=> $rilis));
}

function filmById($id){
	global $conn;

	$query = $conn->prepare("SELECT * FROM film where id = :id");
	$query->execute(array(
        'id' => $id
    ));
    return $query->fetch(PDO::FETCH_ASSOC);
}

function editFilm($id, $judul, $deskripsi, $foto, $kategori, $rilis){
    global $conn;
        $query = $conn->prepare("UPDATE film SET  judul = :judul, deskripsi= :deskripsi, foto = :foto, kategori = :kategori, tgl_rilis = :tgl_rilis
                    WHERE id = :id");
        
        return $query->execute(array(
                                'id' => $id,
                                'judul' => $judul,
                                'foto' => "img/Movie/".$foto,
                                'deskripsi' => $deskripsi,
                                'kategori' => $kategori,
                                'tgl_rilis' => $rilis));
}

function hapusFilm($id){
    global $conn;
    $query = $conn->prepare("DELETE FROM film WHERE id = :id");
    
    return $query->execute(array(
                            'id' => $id));
}

function tambahLokasi($wilayah, $lokasi){
	global $conn;
	
    $query = $conn->prepare("INSERT INTO lokasi (wilayah, nama_lokasi) VALUES (:wilayah , :nama_lokasi)");
        
    $query->execute(array(
                            'wilayah' => $wilayah,
                            'nama_lokasi' => $lokasi
                        ));
}

function cariLokasi($lokasi){
	global $conn;

	$query = $conn->prepare("SELECT * FROM lokasi where nama_lokasi = :nama_lokasi");
	$query->execute(array(
        'nama_lokasi' => $lokasi
    ));
    return $query->fetch(PDO::FETCH_ASSOC);
}

function semuaLokasi(){
	global $conn;

	$query = $conn->prepare("SELECT * FROM lokasi");
	$query->execute();
    return $query->fetchAll();
} 

function lokasiById($id){
	global $conn;

	$query = $conn->prepare("SELECT * FROM lokasi where id = :id");
	$query->execute(array(
        'id' => $id
    ));
    return $query->fetch(PDO::FETCH_ASSOC);
}

function editLokasi($id, $wilayah, $lokasi){
    global $conn;
        $query = $conn->prepare("UPDATE lokasi SET  wilayah = :wilayah, nama_lokasi= :nama_lokasi
                    WHERE id = :id");
        
        return $query->execute(array(
                                'id' => $id,
                                'wilayah' => $wilayah,
                                'nama_lokasi' => $lokasi
                            ));
}

function cariLokasiWilayah($lokasi){
	global $conn;

	$query = $conn->prepare("SELECT * FROM lokasi where nama_lokasi = :nama_lokasi");
	$query->execute(array(
        'nama_lokasi' => $lokasi
    ));
    return $query->fetch(PDO::FETCH_ASSOC);
}

function cariWilayah($wilayah){
	global $conn;

	$query = $conn->prepare("SELECT * FROM lokasi where wilayah = :wilayah");
	$query->execute(array(
        'wilayah' => $wilayah
    ));
    return $query->fetch(PDO::FETCH_ASSOC);
}

function hapusLokasi($id){
    global $conn;
    $query = $conn->prepare("DELETE FROM lokasi WHERE id = :id");
    
    return $query->execute(array(
                            'id' => $id));
}

function hitungLokasi(){
	global $conn;

	$query = $conn->prepare("SELECT * FROM lokasi");
	$query->execute();

    $hitung = $query->rowCount();
    return $hitung;
}

function tambahStudio($id_lokasi, $no_studio, $pattern_kursi){
    global $conn;
	
    $query = $conn->prepare("INSERT INTO studio (id_lokasi, no_studio, pattern_kursi) VALUES (:id_lokasi , :no_studio, :pattern_kursi)");
        
    $query->execute(array(
                            'id_lokasi' => $id_lokasi,
                            'no_studio' => $no_studio,
                            'pattern_kursi' => $pattern_kursi
                        ));
}

function cariStudio(){
    global $conn;
    $query = $conn->prepare("SELECT s.id, nama_lokasi, no_studio, pattern_kursi FROM studio s JOIN lokasi l ON l.id = s.id_lokasi");

    $query->execute();
    return $query->fetchAll();
}

function hitungStudio(){
	global $conn;

	$query = $conn->prepare("SELECT * FROM studio");
	$query->execute();

    $hitung = $query->rowCount();
    return $hitung;
}

function hapusStudio($id){
    global $conn;
    $query = $conn->prepare("DELETE FROM studio WHERE id = :id");
    
    return $query->execute(array(
                            'id' => $id));
}

function cariJadwal(){
    global $conn;
    $query = $conn->prepare("SELECT jp.*, s.no_studio, l.nama_lokasi, l.wilayah, f.judul
    FROM jadwal jp 
    JOIN studio s ON s.id = jp.id_studio 
    JOIN lokasi l on s.id_lokasi = l.id
    JOIN film f on f.id = jp.id_film");

    $query->execute();
    return $query->fetchAll();
}

function hitungNow (){
    global $conn;
    $query = $conn->prepare("SELECT * FROM film WHERE kategori = :kategori");

    $query->execute(array(
            'kategori' => 'now_showing'
    ));
    $hitung = $query->rowCount();
    return $hitung;
}

function cariNow (){
    global $conn;
    $query = $conn->prepare("SELECT * FROM film WHERE kategori = :kategori");

    $query->execute(array(
            'kategori' => 'now_showing'
    ));
    return $query->fetchAll();
}

function hitungSoon (){
    global $conn;
    $query = $conn->prepare("SELECT * FROM film WHERE kategori = :kategori");

    $query->execute(array(
            'kategori' => 'coming_soon'
    ));
    $hitung = $query->rowCount();
    return $hitung;
}

function cariSoon (){
    global $conn;
    $query = $conn->prepare("SELECT * FROM film WHERE kategori = :kategori");

    $query->execute(array(
            'kategori' => 'coming_soon'
    ));
    return $query->fetchAll();
}

function jumlahKursi($id){
    global $conn;
    $query = $conn->prepare("SELECT * FROM studio where id = :id");
    $query->execute(array(
        'id' => $id
    ));
    return $query->fetch(PDO::FETCH_ASSOC);
}

function mencariJadwal($id_studio, $tanggal, $id_film, $jam){
    global $conn;
    $query = $conn->prepare("SELECT * FROM jadwal WHERE id_studio = :id_studio and tanggal_tayang = :tanggal_tayang and id_film = :id_film and jam_tayang IN (:jam_tayang)");
    $query->execute(array(
        'id_studio' => $id_studio,
        'tanggal_tayang' => $tanggal,
        'id_film' => $id_film,
        'jam_tayang' => $jam
    ));
    return $query->rowCount();
}

function tambahJadwal($studio, $film, $date, $jam, $kursi, $harga){
    global $conn;
    $arr_query = array();
        for ($i = 0; $i < count($jam); $i++){
            $query = "($studio,$film,'$date','$jam[$i]',$kursi,0,$harga,'')";
            array_push($arr_query,$query);
        }
    $query_concat = implode(',',$arr_query);
    $query = $conn->prepare("INSERT INTO jadwal (id_studio,id_film,tanggal_tayang,jam_tayang,tiket_tersedia,tiket_terjual,harga_tiket,kursi_terjual)
    VALUES $query_concat");
    $query->execute();
}

function jadwalFilm($id){
    global $conn;
    $query = $conn->prepare("SELECT DISTINCT l.id, l.nama_lokasi, l.wilayah FROM jadwal jp 
    JOIN studio s ON s.id = jp.id_studio
    JOIN lokasi l ON l.id = s.id_lokasi
    WHERE jp.id_film = :id_film");
    $query->execute(array(
        'id_film' => $id
    ));
    return $query->fetchAll();
}

function getStudio($id, $id_film){
    global $conn;
    $query = $conn->prepare("SELECT DISTINCT s.no_studio, s.id FROM jadwal jp 
    JOIN studio s ON s.id = jp.id_studio
    JOIN lokasi l ON l.id = s.id_lokasi
    WHERE l.id = :id and jp.id_film = :id_film");
    $query->execute(array(
        'id' => $id,
        'id_film' => $id_film
    ));
    return $query->fetchAll();
}

function getTanggal($id, $id_studio){
    global $conn;
    $query = $conn->prepare("SELECT DISTINCT tanggal_tayang FROM jadwal j
    JOIN studio s ON s.id = j.id_studio
    JOIN lokasi l ON l.id = s.id_lokasi
    WHERE j.id_film = :id_film and j.id_studio = :id_studio");
    $query->execute(array(
        'id_film' => $id,
        'id_studio' => $id_studio
    ));
    return $query->fetchAll();
}

function getTime($id_film, $id_studio, $date){
    global $conn;
    $query = $conn->prepare("SELECT DISTINCT jam_tayang FROM jadwal j
    JOIN studio s ON s.id = j.id_studio
    JOIN lokasi l ON l.id = s.id_lokasi
    WHERE j.id_film = :id_film and j.id_studio = :id_studio and j.tanggal_tayang = :tanggal_tayang");
    $query->execute(array(
        'id_film' => $id_film,
        'id_studio' => $id_studio,
        'tanggal_tayang' => $date
    ));
    return $query->fetchAll();
}