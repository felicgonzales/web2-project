<?PHP 
session_start();

//KETERANGAN SERVER
$server = "localhost";
$user	= "root";
$password = "";

//Buka Koneksi
$conn = new PDO('mysql:host=localhost;dbname=21TI1', $user, $password);

if(!$conn)
	die("Tidak terkoneksi ke database");