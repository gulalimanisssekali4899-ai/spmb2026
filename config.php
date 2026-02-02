<?php 
$server = "localhost";
$user = "root";
$pass = "";
$nama_database = "db_ppdb";

$db = mysqli_connect($server,$user,$pass,$nama_database);

if (!$db) {
    die("Gagal terhubung ke database".mysqli_error());
}




?>