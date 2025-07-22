<?php
include 'config.php';
session_start();


$data = $koneksi->query("SELECT * FROM pendaftaran ORDER BY tanggal_daftar DESC");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Siswa</title>
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
    <?php if (isset($_GET['pesan']) && $_GET['pesan'] == 'hapus_berhasil'): ?>
  <div class="notif-sukses">Data siswa berhasil dihapus.</div>
<?php endif; ?>

    <?php if (isset($_SESSION['pesan'])): ?>
    <div style="background-color: #d4edda; color: #155724; padding: 10px; margin-bottom: 15px; border: 1px solid #c3e6cb;">
        <?= $_SESSION['pesan']; unset($_SESSION['pesan']); ?>
    </div>
<?php endif; ?>

    <h2>Data Siswa</h2>
    <table border="1" cellpadding="8" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Nama</th>
                <th>NIK</th>
                <th>Asal Sekolah</th>
                <th>Jalur</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php while($row = $data->fetch_assoc()): ?>
                <tr>
                    <td><?= htmlspecialchars($row['nama']) ?></td>
                    <td><?= htmlspecialchars($row['nik']) ?></td>
                    <td><?= htmlspecialchars($row['asal_sekolah']) ?></td>
                    <td><?= htmlspecialchars($row['jalur']) ?></td>
                    <td><?=htmlspecialchars($row['status'])?></td>
      <td>
        <a href="edit_siswa.php?id=<?= $row['id'] ?>" class="btn-edit">Edit</a> |
        <a href="hapus_siswa.php?id=<?= $row['id'] ?>" onclick="return confirm('Yakin ingin menghapus data ini?')" class="btn-hapus">Hapus</a>
      </td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</div>
</body>
</html>
