<?php
session_start();
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Formulir Pendaftaran PPDB</title>
  <link rel="stylesheet" href="assets/pendaftaran_siswa.css">
</head>
<body>

  <div class="header">
    <button onclick="history.back()">&larr; Kembali</button>
    <h2>Formulir Pendaftaran PPDB</h2>
    <p class="subtitle">Lengkapi formulir dibawah ini dengan data yang benar dan akurat</p>
  </div>

  <form action="proses_pendaftaran_siswa.php" method="POST" enctype="multipart/form-data">

    <!-- DATA SISWA -->
    <div class="section-title">Data Siswa</div>
    <div class="form-group">
      <input type="text" name="nama" placeholder="Nama Lengkap" required>
      <input type="text" name="nik" placeholder="NIK" required>
    </div>
    <div class="form-group">
      <input type="text" name="tempat_lahir" placeholder="Tempat Lahir                                                      Tanggal Lahir->" required>
      <input type="date" name="tanggal_lahir" placeholder="Tanggal Lahir" required>
    </div>
    <div class="form-group">
      <input type="text" name="jenis_kelamin" placeholder="Jenis Kelamin" required>
      <input type="text" name="agama" placeholder="Agama" required>
    </div>
    <div class="form-group">
      <input type="text" name="alamat" placeholder="Alamat Lengkap" required>
    </div>
    <div class="form-group">
      <input type="text" name="no_hp" placeholder="No HP/WA" required>
      <input type="email" name="email" placeholder="Email" required>
    </div>

    <!-- DATA SEKOLAH ASAL -->
    <div class="section-title">Data Sekolah Asal</div>
    <div class="form-group">
      <input type="text" name="asal_sekolah" placeholder="Nama Sekolah Asal" required>
      <input type="text" name="npsn" placeholder="NPSN Sekolah Asal" required>
    </div>
    <div class="form-group">
      <input type="text" name="tahun_lulus" placeholder="Tahun Lulus" required>
      <input type="number" name="nilai_rapor" step="0.01" placeholder="Nilai Rata-rata Rapor" required>
    </div>

    <!-- DATA TUJUAN -->
    <div class="section-title">Data Sekolah Tujuan</div>
    <div class="form-group">
      <select name="pilihan1" required>
        <option value="">Pilih Sekolah (Pilihan 1)</option>
        <option value="SMA 1">SMA 1</option>
        <option value="SMA 2">SMA 2</option>
      </select>
      <select name="pilihan2" required>
        <option value="">Pilih Sekolah (Pilihan 2)</option>
        <option value="SMA 1">SMA 1</option>
        <option value="SMA 2">SMA 2</option>
      </select>
    </div>
    <div class="form-group">
      <select name="jalur" required>
        <option value="">Pilih Jalur Pendaftaran</option>
        <option value="Zonasi">Zonasi</option>
        <option value="Afirmasi">Afirmasi</option>
        <option value="Prestasi">Prestasi</option>
        <option value="Pindahan">Pindahan</option>
      </select>
    </div>

    <!-- UPLOAD DOKUMEN -->
    <div class="section-title">Upload Dokumen</div>
    <div class="note-box">
      <strong>Ketentuan Upload:</strong><br>
      Format File: PDF atau JPG/PNG<br>
      Ukuran Maksimal: 2MB per file<br>
      Pastikan dokumen jelas dan dapat dibaca
    </div>

<!-- Upload Akta -->
<div class="form-upload">
  <label for="akta">Klik untuk upload Akta Kelahiran</label><br>
  <span id="akta-nama">Belum ada file dipilih</span><br>
  <input type="file" name="akta" id="akta" accept=".pdf,.jpg,.jpeg,.png" required>
</div>

<!-- Upload KK -->
<div class="form-upload">
  <label for="kk">Klik untuk upload Kartu Keluarga</label><br>
  <span id="kk-nama">Belum ada file dipilih</span><br>
  <input type="file" name="kk" id="kk" accept=".pdf,.jpg,.jpeg,.png" required>
</div>


    <!-- CHECKBOX -->
    <div class="checkbox-group">
      <input type="checkbox" required> Saya menyatakan bahwa data yang saya isi adalah benar dan dapat dipertanggungjawabkan.
    </div>

    <button type="submit" class="submit-btn">Daftar Sekarang</button>
  </form>

  <script>
  const aktaInput = document.getElementById('akta');
  const kkInput = document.getElementById('kk');
  const aktaNama = document.getElementById('akta-nama');
  const kkNama = document.getElementById('kk-nama');

  aktaInput.addEventListener('change', function () {
    aktaNama.textContent = this.files.length > 0 ? this.files[0].name : 'Belum ada file dipilih';
  });

  kkInput.addEventListener('change', function () {
    kkNama.textContent = this.files.length > 0 ? this.files[0].name : 'Belum ada file dipilih';
  });
</script>

</body>
</html>
