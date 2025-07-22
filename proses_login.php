<?php
session_start();
include "config.php";

if ($koneksi->connect_error) {
  die("Koneksi gagal: " . $koneksi->connect_error);
}

$email_or_username = $_POST['email'];
$password = $_POST['password'];

$query = "SELECT * FROM users WHERE email = ? OR username = ?";
$stmt = $koneksi->prepare($query);
$stmt->bind_param("ss", $email_or_username, $email_or_username);
$stmt->execute();

$result = $stmt->get_result();
$user = $result->fetch_assoc();

if ($user && password_verify($password, $user['password'])) {
  $_SESSION['user_id'] = $user['id'];
  $_SESSION['nama'] = $user['nama_lengkap'];
  header("Location: dashboard.php");
  exit;
} else {
  echo "<script>alert('Email/Username atau Password salah.'); window.location.href='login.php';</script>";
}

$stmt->close();
$koneksi->close();
?>
