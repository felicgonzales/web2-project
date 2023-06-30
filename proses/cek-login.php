<?php

require_once "../lib/config.php";
require_once "../lib/lib-db-akun.php";

$user = $_POST['username'];
$pass = $_POST['password'];

cariAkun($user, $pass);