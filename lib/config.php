<?PHP 
session_start();

//KETERANGAN SERVER
$server = "localhost";
$user	= "root";
$password = "";

//Buka Koneksi
$conn = new PDO('mysql:host=localhost;dbname=f-tix', $user, $password);

if(!$conn)
	die("Tidak terkoneksi ke database");