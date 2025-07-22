<?php
include 'config.php';
$id = $_GET['id'];

$query = mysqli_query($koneksi, "SELECT * FROM pendaftaran WHERE id='$id'");
$data = mysqli_fetch_assoc($query);

if (!$data) {
    echo "Data siswa tidak ditemukan.";
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Edit Data Siswa</title>
  <link rel="stylesheet" href="assets/dashboard.css">
  <style>
    .form-container {
      max-width: 600px;
      margin: 50px auto;
      background: #fff;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 0 12px rgba(0,0,0,0.1);
    }
    .form-container h2 {
      text-align: center;
      margin-bottom: 25px;
    }
    .form-group {
      margin-bottom: 15px;
    }
    label {
      font-weight: bold;
      display: block;
      margin-bottom: 5px;
    }
    input[type="text"],
    select {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 6px;
    }
    .form-actions {
      text-align: center;
      margin-top: 20px;
    }
    .btn {
      padding: 10px 20px;
      border: none;
      border-radius: 6px;
      cursor: pointer;
    }
    .btn-simpan {
      background-color: #28a745;
      color: white;
    }
    .btn-kembali {
      background-color: #dc3545;
      color: white;
      text-decoration: none;
      padding: 10px 20px;
      border-radius: 6px;
      margin-left: 10px;
    }
  </style>
</head>
<body>

<div class="form-container">
  <h2>Edit Data Siswa</h2>
  <form method="POST" action="update_siswa.php">
    <input type="hidden" name="id" value="<?= $data['id'] ?>">

    <div class="form-group">
      <label>Nama Lengkap</label>
      <input type="text" name="nama" value="<?= $data['nama'] ?>" required>
    </div>

    <div class="form-group">
      <label>NIK</label>
      <input type="text" name="nik" value="<?= $data['nik'] ?>" required>
    </div>

    <div class="form-group">
      <label>Asal Sekolah</label>
      <input type="text" name="asal_sekolah" value="<?= $data['asal_sekolah'] ?>" required>
    </div>

    <div class="form-group">
      <label>Jalur Pendaftaran</label>
      <select name="jalur" required>
        <option value="Zonasi" <?= $data['jalur'] == 'Zonasi' ? 'selected' : '' ?>>Zonasi</option>
        <option value="Prestasi" <?= $data['jalur'] == 'Prestasi' ? 'selected' : '' ?>>Prestasi</option>
        <option value="Afirmasi" <?= $data['jalur'] == 'Afirmasi' ? 'selected' : '' ?>>Afirmasi</option>
        <option value="Pindahan" <?= $data['jalur'] == 'Pindahan' ? 'selected' : '' ?>>Pindahan</option>
      </select>
    </div>

    <div class="form-group">
      <label>Status</label>
      <select name="status">
        <option value="Pending" <?= $data['status'] == 'Pending' ? 'selected' : '' ?>>Pending</option>
        <option value="Diterima" <?= $data['status'] == 'Diterima' ? 'selected' : '' ?>>Diterima</option>
        <option value="Ditolak" <?= $data['status'] == 'Ditolak' ? 'selected' : '' ?>>Ditolak</option>
        <option value="Terverifikasi" <?= $data['status'] == 'Terverifikasi' ? 'selected' : '' ?>>Terverifikasi</option>
      </select>
    </div>

    <div class="form-actions">
      <button type="submit" class="btn btn-simpan">Simpan Perubahan</button>
      <a href="siswa.php" class="btn-kembali">Kembali</a>
    </div>
  </form>
</div>

</body>
</html>
