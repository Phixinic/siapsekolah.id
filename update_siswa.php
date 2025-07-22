<?php
include 'config.php';

$id           = $_POST['id'];
$nama         = $_POST['nama'];
$nik          = $_POST['nik'];
$asal_sekolah = $_POST['asal_sekolah'];
$jalur        = $_POST['jalur'];
$status       = $_POST['status'];

$query = "UPDATE pendaftaran SET 
            nama='$nama', 
            nik='$nik', 
            asal_sekolah='$asal_sekolah',
            jalur='$jalur',
            status='$status'
          WHERE id='$id'";

if (mysqli_query($koneksi, $query)) {
    header("Location: siswa.php?pesan=berhasil");
    exit;
} else {
    echo "Gagal memperbarui data: " . mysqli_error($koneksi);
}
