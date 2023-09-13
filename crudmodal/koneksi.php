<?php
// koneksi db
$SERVER = "localhost";
$user   = "root";
$password = "";
$database = "dbcrud_modal";

// buat koneksi
$koneksi = mysqli_connect($SERVER, $user, $password, $database) or die(mysqli_error($koneksi));
