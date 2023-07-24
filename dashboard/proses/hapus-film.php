<?php
require_once "../../lib/lib-db-film.php";
require_once "../../lib/lib-db-users.php";


$id = $_POST['id'];
$film = filmById($id);

$file_path = "../../".$film['foto'];

// Check if the file exists
if (file_exists($file_path)) {
    // Attempt to delete the file
    if (unlink($file_path)) {
        echo 'File deleted successfully.';
    } else {
        echo 'Unable to delete the file.';
    }
} else {
    echo 'File not found.';
}
hapusFilm($id);

header("location: ../manage-film.php");
?>