<?php
require_once "../lib/lib-db-admin.php";
require_once "../../lib/lib-db-users.php";


$id = $_POST['id'];

if ($_SESSION['id'] == $id) {
    if(hapusAdmin($id)){
        session_destroy();
        header('location: ../../login.php');
    } else {
        header('location: ../index.php');
    }
}else{
    if(hapusAdmin($id)){
        header('location: ../manage-admin.php');
    } else {
        header('location: ../index.php');
    }
}

?>