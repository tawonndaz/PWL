<?php 

$server = "localhost";
$user = "root";
$pass = "";
$database = "toko_abc";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("alert('GAGAL MENYAMBUNG DATABASE')");
}

?>