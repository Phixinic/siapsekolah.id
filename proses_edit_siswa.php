<?php
include 'config.php';
$id = $_POST['id'];
$status = $_POST['status'];

mysqli_query($koneksi, "UPDATE siswa SET status='$status' WHERE id='$id'");

header("Location: siswa.php?msg=edit_sukses");
exit();
