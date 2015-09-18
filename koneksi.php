<?php

$server = "localhost";
$username = "root";
$password = "123";
$database = "mhs";

mysql_connect ($server,$username,$password) or die ("Koneksi Gagal");
@mysql_select_db ($database) or die ("Database Tidak Bisa Terhubung");

?>