<?php
require_once "../../lib/lib-db-film.php";
require_once "../../lib/lib-db-users.php";


$id = $_POST['id'];

hapusLokasi($id);
header("location: ../manage-lokasi.php");

?>