<?php
$mysqli = new mysqli("localhost","root","","dbretail");
if($mysqli->connect_eror){
    die("Koneksi gagal:".$mysqli->connect_eror);
}
?>