<?php

require_once "../lib/config.php";
require_once "../lib/lib-db-users.php";

$id = $_POST['id'];
$username = $_POST['name'];
$email = $_POST['email'];
$no_telp = $_POST['phone'];
$gender = $_POST['gender'];

if($username == akunSama($username)){
    simpanEditData($id, $username, $email, $no_telp, $gender);
    $_SESSION['username'] = $username;
    header("location: ../index.php");
}else{
    header("location: ../edit-profile.php?id=$id");
}