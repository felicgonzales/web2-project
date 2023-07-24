<?php
    require_once "../lib/lib-db-admin.php";
    require_once "../../lib/lib-db-users.php";

    $user = $_POST['username'];
    $pass = $_POST['password'];
    $no_telp = $_POST['no_telp'];

    if(akunSama($user)){
        addAdmin($user,$pass,$no_telp);
    }else{
        header("location: ../add-admin.php");
    }
?>