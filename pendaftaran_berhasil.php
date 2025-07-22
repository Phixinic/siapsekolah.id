<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Berhasil</title>
    <link rel="stylesheet" href="assets/style.css">
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #f4f6f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .success-box {
            background-color: #fff;
            border: 1px solid #d4edda;
            padding: 30px 40px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            text-align: center;
        }

        .success-box h2 {
            color: #28a745;
            margin-bottom: 15px;
        }

        .success-box p {
            font-size: 16px;
            margin-bottom: 25px;
        }

        .btn-home {
            background-color: #007bff;
            color: #fff;
            padding: 10px 18px;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            font-size: 14px;
        }

        .btn-home:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<div class="success-box">
    <h2>🎉 Pendaftaran Berhasil!</h2>
    <p>Terima kasih telah mendaftar. Data Anda sudah kami simpan di sistem PPDB Siapsekolah.id.</p>

    <a href="index.html" class="btn-home">Kembali ke Halaman Utama</a>
</div>

</body>
</html>
