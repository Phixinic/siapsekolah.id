<?php 
include 'config.php'; 

session_start();
if (!isset($_SESSION['user_id'])) {
  header("Location: login.php");
  exit;

}

$total      = $koneksi->query("SELECT COUNT(*) FROM pendaftaran")->fetch_row()[0];
$baru       = $koneksi->query("SELECT COUNT(*) FROM pendaftaran WHERE status = 'Pending'")->fetch_row()[0];
$verified   = $koneksi->query("SELECT COUNT(*) FROM pendaftaran WHERE status = 'Verified'")->fetch_row()[0];
$diterima   = $koneksi->query("SELECT COUNT(*) FROM pendaftaran WHERE status = 'Diterima'")->fetch_row()[0];
$ditolak    = $koneksi->query("SELECT COUNT(*) FROM pendaftaran WHERE status = 'Ditolak'")->fetch_row()[0];

$sql = "SELECT * FROM pendaftaran ORDER BY id DESC";
$result = $koneksi->query($sql);

?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Dashboard Admin - Siapsekolah</title>
  <link rel="stylesheet" href="assets/dashboard.css">
</head>
<body>

<div class="sidebar">
  <div class="sidebar-header">
    <h2>Siapsekolah</h2>
  </div>
  <ul class="sidebar-menu">
    <li><a href="dashboard.php" class="<?= basename($_SERVER['PHP_SELF']) == 'dashboard.php' ? 'active' : '' ?>">Dashboard</a></li>
    <li><a href="siswa.php" class="<?= basename($_SERVER['PHP_SELF']) == 'siswa.php' ? 'active' : '' ?>">Data Siswa</a></li>
    <li><a href="logout.php" onclick="return confirm('Yakin ingin logout?')">Logout</a></li>
  </ul>
</div>


<div class="main-content">
  <div class="topbar">
    <input type="text" placeholder="Cari...">
    <div class="profile-circle">A</div>
  </div>

  <div class="dashboard-title">Dashboard</div>
  <div class="breadcrumb">Home / Dashboard</div>

  <div class="stats">
    <div class="card"><span>👨‍🎓</span><h3><?= $total ?></h3><p>Total Pendaftar</p></div>
    <div class="card"><span>📝</span><h3><?= $baru ?></h3><p>Pendaftaran baru</p></div>
    <div class="card"><span>✅</span><h3><?= $diterima ?></h3><p>Diterima</p></div>
    <div class="card"><span>❌</span><h3><?= $ditolak ?></h3><p>Ditolak</p></div>
  </div>



  <div class="latest">
    <h3>Pendaftar Terbaru <a href="#" style="float:right; font-size: 14px;">Lihat semua</a></h3>
    <table>
  <thead>
    <tr>
      <th>Nama</th>
      <th>NIK</th>
      <th>Asal Sekolah</th>
      <th>Jalur</th>
      <th>Status</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $data = mysqli_query($koneksi, "SELECT nama, status FROM pendaftaran");
    while ($row = $result->fetch_assoc()) {
      echo "<td>" . htmlspecialchars($row['nama']) . "</td>";
      echo "<td>" . htmlspecialchars($row['nik']) . "</td>";
      echo "<td>" . htmlspecialchars($row['asal_sekolah']) . "</td>";
      echo "<td>" . htmlspecialchars($row['jalur']) . "</td>";
      echo "<td>" . htmlspecialchars($row['status']) . "</td>";
      echo "</tr>";
      
    }
    ?>
    <?php
$total     = $koneksi->query("SELECT COUNT(*) FROM pendaftaran")->fetch_row()[0];
$baru      = $koneksi->query("SELECT COUNT(*) FROM pendaftaran WHERE status = 'Pending'")->fetch_row()[0];
$diterima  = $koneksi->query("SELECT COUNT(*) FROM pendaftaran WHERE status = 'Diterima'")->fetch_row()[0];
$ditolak   = $koneksi->query("SELECT COUNT(*) FROM pendaftaran WHERE status = 'Ditolak'")->fetch_row()[0];
?>

  </tbody>
</table>

  </div>
</div>

</body>
</html>
