<?php
include 'config.php';
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $status = $_POST['status'];
    $koneksi->query("UPDATE pendaftaran SET status='$status' WHERE id=$id");
}

header("Location: siswa.php");
exit;
