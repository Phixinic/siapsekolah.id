<?php
$koneksi = new mysqli("localhost", "root", "", "siapsekolah");
if($koneksi->connect_error) {
    die("Koneksi Gagal: " . $koneksi->connect_error);
}
?>