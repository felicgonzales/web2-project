<?php
    require_once "../lib/lib-db-admin.php";
    require_once "../../lib/lib-db-users.php";

    $user = $_POST['username'];
    $id = $_POST['id'];
    $no_telp = $_POST['no_telpon'];
    $akun = akunAdminbyId($id);

    if(akunSama($user)){
        if ($_SESSION['id'] == $id) {
            updateAdmin($id,$user,$no_telp);
            $_SESSION['admin'] = $user;
            header("location: ../manage-admin.php");
        }else{
            updateAdmin($id,$user,$no_telp);
            header("location: ../manage-admin.php");
        }
        
    }else{
        if ($_SESSION['id'] == $id) {
            if ($akun['no_telp'] != $no_telp) {
                $_SESSION['admin'] = $user;
                updateAdmin($id,$user,$no_telp);
                header("location: ../manage-admin.php");
            }else{
                header("location: ../manage-admin.php");
            }
        }else{
            if ($akun['no_telp'] != $no_telp) {
                updateAdmin($id,$user,$no_telp);
                header("location: ../manage-admin.php");
            }else{
                header("location: ../manage-admin.php");
            }
        }
    }
?>