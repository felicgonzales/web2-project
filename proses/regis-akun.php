<?php

require_once "../lib/config.php";
require_once "../lib/lib-db-akun.php";

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$confir_pass = $_POST['confirPass'];

if(akunSama($username)){
    regisAkun($username,$email,$password,$confir_pass);
}else{
    header("location: ../regis.php");
}