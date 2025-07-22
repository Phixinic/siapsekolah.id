<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama       = $_POST['nama'];
    $nik        = $_POST['nik'];
    $tempat     = $_POST['tempat_lahir'];
    $tanggal    = $_POST['tanggal_lahir'];
    $jk         = $_POST['jenis_kelamin'];
    $agama      = $_POST['agama'];
    $alamat     = $_POST['alamat'];
    $hp         = $_POST['no_hp'];
    $email      = $_POST['email'];

    $asal_sekolah = $_POST['asal_sekolah'];
    $npsn          = $_POST['npsn'];
    $tahun_lulus   = $_POST['tahun_lulus'];
    $nilai_rapor   = $_POST['nilai_rapor'];

    $pilihan1 = $_POST['pilihan1'];
    $pilihan2 = $_POST['pilihan2'];
    $jalur    = $_POST['jalur'];

    $akta    = $_FILES['akta']['name'];
    $kk      = $_FILES['kk']['name'];

    $upload_dir = "../uploads/";
    move_uploaded_file($_FILES['akta']['tmp_name'], $upload_dir . $akta);
    move_uploaded_file($_FILES['kk']['tmp_name'], $upload_dir . $kk);

    $query = "INSERT INTO pendaftaran 
        (nama, nik, tempat_lahir, tanggal_lahir, jenis_kelamin, agama, alamat, no_hp, email,
        asal_sekolah, npsn, tahun_lulus, nilai_rapor,
        pilihan1, pilihan2, jalur, akta, kk)
        VALUES (
            '$nama', '$nik', '$tempat', '$tanggal', '$jk', '$agama', '$alamat', '$hp', '$email',
            '$asal_sekolah', '$npsn', '$tahun_lulus', '$nilai_rapor',
            '$pilihan1', '$pilihan2', '$jalur', '$akta', '$kk'
        )";

    if (mysqli_query($koneksi, $query)) {
        header("Location: pendaftaran_berhasil.php");
        exit;
    } else {
        echo "Gagal menyimpan data: " . mysqli_error($koneksi);
    }
}
?>
