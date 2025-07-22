<?php
// Koneksi ke database
include "config.php";

if ($koneksi->connect_error) {
  die("Koneksi gagal: " . $koneksi->connect_error);
}

// Ambil data dari form
$nama     = $_POST['nama'];
$email    = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$konfirmasi = $_POST['konfirmasi_password'];

// Validasi
if ($password !== $konfirmasi) {
  echo "Password dan konfirmasi tidak cocok.";
  exit;
}

// Hash password
$hash = password_hash($password, PASSWORD_DEFAULT);

// Simpan ke database
$stmt = $koneksi->prepare("INSERT INTO users (nama_lengkap, email, username, password) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $nama, $email, $username, $hash);

if ($stmt->execute()) {
  echo "Pendaftaran berhasil. <a href='login.html'>Login sekarang</a>";
} else {
  echo "Pendaftaran gagal: " . $stmt->error;
}

$stmt->close();
$koneksi->close();
?>
