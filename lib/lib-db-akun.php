<?php
require_once "config.php";

$_SESSION['same-password'] = "Password is not same";

function cariAkun($username, $password){
	global $conn;

	$query = $conn->prepare("SELECT * FROM akun where username = :username");
	$query->execute(array(
		'username'=>$username
	));

    $hitung = $query->rowCount();

    if ($hitung === 1) {
        $row = $query->fetch(PDO::FETCH_ASSOC);
        if(password_verify($password, $row['password'])){
            $_SESSION["login"] = true;
            header("location: ../index.php");
            exit;
        }
    }else{
        header("location: ../login.php");
    }
}

function akunSama($username){
	global $conn;

	$query = $conn->prepare("SELECT * FROM akun where username = :username");
	$query->execute(array(
		'username'=>$username
	));

    $hitung = $query->rowCount();

    if ($hitung === 1) {
        return false;
    }else{
        return true;
    }
}

function regisAkun($username, $email, $password, $confir_pass){
	global $conn;
	
    if ($password == $confir_pass) {
        $query = $conn->prepare("INSERT INTO akun (username, email, password, level) VALUES (:username , :email , :password , :level)");
        
        $query->execute(array(
                            'password' => password_hash($password, PASSWORD_DEFAULT),
                            'username' => $username,
                            'email' => $email,
                            'level' => "member"));
        return header("location: ../login.php");
    }else{
        return header("location: ../regis.php");
    }
}