<?php
require_once __DIR__ . '/helpers.php';

// Pastikan request menggunakan metode POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: registration.php');
    exit;
}

// Tangkap data dari form registration.php
$nama          = $_POST['nama'] ?? '-';
$email         = $_POST['email'] ?? '-';
$hp            = $_POST['hp'] ?? '-';
$prodi         = $_POST['prodi'] ?? '-';
$kursus        = $_POST['kursus'] ?? '-';
$jenis_peserta = $_POST['jenis_peserta'] ?? '-';

// Tangkap checkbox minat (array)
$minat_array   = $_POST['minat'] ?? [];
$minat         = !empty($minat_array) ? implode(', ', $minat_array) : '-';

$catatan       = !empty($_POST['catatan']) ? $_POST['catatan'] : '-';
$sumber        = $_POST['sumber'] ?? 'Form Online';

$siteName = 'KursusKu';
$year     = date('Y');
?>
<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pendaftaran Diterima - <?= htmlspecialchars($siteName) ?></title>
    <style>
        * { box-sizing: border-box; }
        body { font-family: Arial, sans-serif; background: #f5f7f6; margin: 0; padding: 0; color: #16332c; }
        
        header { background: #0f766e; padding: 16px 24px; display: flex; justify-content: space-between; align-items: center; }
        header a { color: #fff; text-decoration: none; margin-right: 16px; font-size: 14px; }
        .logo { font-size: 18px; font-weight: bold; color: #fff; text-decoration: none; }

        main { max-width: 680px; margin: 32px auto; padding: 0 16px; }
        
        .card { background: #ffffff; border-radius: 16px; padding: 32px; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05); }
        .card h1 { margin-top: 0; color: #0f766e; font-size: 24px; margin-bottom: 8px; }
        .card p.subtitle { color: #6b7280; font-size: 14px; margin-bottom: 24px; }
        
        .table-data { width: 100%; border-collapse: collapse; margin-bottom: 24px; }
        .table-data tr { border-bottom: 1px solid #e5e7eb; }
        .table-data tr:last-child { border-bottom: none; }
        .table-data th { text-align: left; padding: 12px 8px; font-weight: bold; color: #374151; width: 35%; font-size: 14px; }
        .table-data td { padding: 12px 8px; color: #1f2937; font-size: 14px; }

        .btn-back {
            display: inline-block;
            background-color: #0284c7;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 8px;
            font-weight: bold;
            font-size: 14px;
            transition: background-color 0.2s;
        }
        .btn-back:hover { background-color: #0369a1; }

        footer { text-align: center; padding: 24px; color: #6b7280; font-size: 14px; }
    </style>
</head>
<body>

<header>
    <a href="index.php" class="logo"><?= htmlspecialchars($siteName) ?></a>
    <nav>
        <a href="index.php">Beranda</a>
        <a href="index.php#katalog">Katalog</a>
        <a href="fee-calculator.php">Estimasi Biaya</a>
        <a href="registration.php">Daftar</a>
    </nav>
</header>

<main class="container result-page">
    <div class="card summary-card">
        <h1>Pendaftaran Diterima</h1>
        <p class="subtitle">Periksa kembali data berikut:</p>

        <table class="table-data">
            <tr>
                <th>Nama</th>
                <td><?= htmlspecialchars($nama) ?></td>
            </tr>
            <tr>
                <th>Email</th>
                <td><?= htmlspecialchars($email) ?></td>
            </tr>
            <tr>
                <th>Nomor HP</th>
                <td><?= htmlspecialchars($hp) ?></td>
            </tr>
            <tr>
                <th>Program Studi</th>
                <td><?= htmlspecialchars($prodi) ?></td>
            </tr>
            <tr>
                <th>Kursus</th>
                <td><?= htmlspecialchars($kursus) ?></td>
            </tr>
            <tr>
                <th>Jenis Peserta</th>
                <td><?= htmlspecialchars($jenis_peserta) ?></td>
            </tr>
            <tr>
                <th>Minat</th>
                <td><?= htmlspecialchars($minat) ?></td>
            </tr>
            <tr>
                <th>Catatan</th>
                <td><?= nl2br(htmlspecialchars($catatan)) ?></td>
            </tr>
            <tr>
                <th>Sumber</th>
                <td><?= htmlspecialchars($sumber) ?></td>
            </tr>
        </table>

        <a class="btn-link btn-back" href="registration.php">&larr; Kembali ke Form</a>
    </div>
</main>

<footer>
    <small>&copy; <?= $year ?> <?= htmlspecialchars($siteName) ?></small>
</footer>

</body>
</html>
