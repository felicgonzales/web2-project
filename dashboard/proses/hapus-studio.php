<?php
    require_once "../../lib/lib-db-film.php";
    require_once "../../lib/lib-db-users.php";

    $id = $_POST['id'];
    hapusStudio($id);
    header("location: ../manage-studio.php");
?>