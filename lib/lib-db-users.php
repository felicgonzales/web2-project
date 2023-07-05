<?php
require_once "config.php";

function cariAkun($username, $password){
	global $conn;

	$query = $conn->prepare("SELECT * FROM users where username = :username");
	$query->execute(array(
		'username'=>$username
	));

    $hitung = $query->rowCount();

    if ($hitung === 1) {
        $row = $query->fetch(PDO::FETCH_ASSOC);
        if(password_verify($password, $row['password'])){
            $_SESSION["login"] = true;
            $_SESSION["username"] = $username;
            header("location: ../index.php");
            exit;
        }
    }else{
        $_SESSION['pass'] = "'Username atau Password salah'";
        header("location: ../login.php");
    }
}

function akunSama($username){
	global $conn;

	$query = $conn->prepare("SELECT * FROM users where username = :username");
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
        $query = $conn->prepare("INSERT INTO users (username, email, password, role) VALUES (:username , :email , :password , :role)");
        
        $query->execute(array(
                            'password' => password_hash($password, PASSWORD_DEFAULT),
                            'username' => $username,
                            'email' => $email,
                            'role' => "Users"));
        return header("location: ../login.php");
    }else{
        $_SESSION['same_pass'] = "'Password anda tidak sama'";
        return header("location: ../regis.php");
    }
}