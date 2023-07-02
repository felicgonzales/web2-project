<?php
require_once "config.php";

function cekLogin(){
    if(isset($_SESSION['login'])){
        return true;
    } else {
        return false;
    }
}

function isAdmin(){
    if($_SESSION['level'] == 'admin'){
        return true;
    } else {
        return false;
    }
}