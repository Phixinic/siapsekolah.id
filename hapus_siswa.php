<?php
include 'config.php';

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);

    // Cek apakah data siswa dengan ID ini ada
    $cek = $koneksi->query("SELECT * FROM pendaftaran WHERE id = $id");

    if ($cek && $cek->num_rows > 0) {
        // Hapus datanya
        $delete = $koneksi->query("DELETE FROM pendaftaran WHERE id = $id");

        if ($delete) {
            // Redirect kembali dengan notifikasi
            header("Location: siswa.php?pesan=hapus_berhasil");
            exit();
        } else {
            echo "Gagal menghapus data.";
        }
    } else {
        echo "Data siswa tidak ditemukan.";
    }
} else {
    echo "ID tidak ditemukan.";
}
?>
