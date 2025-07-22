<?php
include 'config.php';

$status = null;
$nik_input = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nik_input = $_POST['nik'];

$query = "SELECT * FROM pendaftaran WHERE nik = '$nik_input' LIMIT 1";

  $result = $koneksi->query($query);

  if ($result && $result->num_rows > 0) {
    $status = $result->fetch_assoc();
  } else {
    $status = "not_found";
  }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Cek Status Pendaftaran - Siapsekolah.id</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/style.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <style>


    .hero {
      display: flex;
      align-items: center;

      max-height: 89.4vh;
      text-align: center;
      flex-direction: column;
      padding-bottom: 600px;
      position: relative;
    }


    .btn-daftar {
      background-color: white;
      color: #007bff;
      border: none;
      padding: 10px 20px;
      font-weight: bold;
      border-radius: 5px;
      cursor: pointer;
      margin-top: 10px;
    }

    input[type="text"] {
      padding: 10px;
      width: 300px;
      border-radius: 5px;
      border: none;
      margin-top: 15px;
    }

    .status-box {
      margin-top: 30px;
      padding: 20px;
      background: white;
      color: black;
      border-radius: 10px;
      display: inline-block;
      text-align: left;
      min-width: 350px;
    }

    .status-label {
      padding: 5px 10px;
      border-radius: 10px;
      font-weight: bold;
    }

  </style>
</head>
<body>

<header>
  <div class="container">
    <h1 class="logo">Siapsekolah.id</h1>
    <nav>
      <ul>
        <li><a href="index.html">Beranda</a></li>
        <li><a href="cek_status.php">Informasi Siswa</a></li>
        <li><a href="#">Persyaratan</a></li>
        <li><a href="#">Jadwal</a></li>
        <li><a href="#">Kontak</a></li>
        <li><a href="login.html">Log in/Sign Up</a></li>
      </ul>
    </nav>
  </div>
</header>

<section class="hero" >
  <h2 data-aos="zoom-in">Cek Status Pendaftaran</h2>
  <p data-aos="zoom-in">Masukkan NIK untuk melihat status pendaftaran Anda.</p>

  <form method="POST" data-aos="zoom-in">
    <input type="text" name="nik" placeholder="Masukkan NIK Anda" required>
    <br>
    <button type="submit" class="btn-daftar">Cek Status</button>
  </form>

  <?php if ($status !== null): ?>
    <div class="status-box">
      <?php if ($status === "not_found"): ?>
        <p style="color: red;">Data tidak ditemukan. Pastikan NIK Anda benar dan sudah mendaftar.</p>
      <?php else: ?>
        <div class="info-row"><strong>Nama:</strong> <?= htmlspecialchars($status['nama']) ?></div>
        <div class="info-row"><strong>NISN:</strong> <?= htmlspecialchars($status['npsn']) ?></div>
        <div class="info-row"><strong>NIK:</strong> <?= htmlspecialchars($status['nik']) ?></div>
        <div class="info-row"><strong>Tempat Lahir:</strong> <?= htmlspecialchars($status['tempat_lahir']) ?></div>
        <div class="info-row"><strong>Tanggal Lahir:</strong> <?= htmlspecialchars($status['tanggal_lahir']) ?></div>
        <div class="info-row"><strong>Jenis Kelamin:</strong> <?= htmlspecialchars($status['jenis_kelamin']) ?></div>
        <div class="info-row"><strong>Alamat:</strong> <?= htmlspecialchars($status['alamat']) ?></div>
        <div class="info-row"><strong>Status Pendaftaran:</strong>
          <span class="status-label"
            style="
              <?php
                if ($status['status'] === 'Diterima') echo 'background: #d4edda; color: #155724;';
                elseif ($status['status'] === 'Ditolak') echo 'background: #f8d7da; color: #721c24;';
                else echo 'background: #fff3cd; color: #856404;';
              ?>">
            <?= $status['status'] ?>
          </span>
        </div>
      <?php endif; ?>
    </div>
  <?php endif; ?>
</section>

 <!-- AOS Animation -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init({
      duration: 1000,
      once: true
    });
  </script>

</body>
</html>
