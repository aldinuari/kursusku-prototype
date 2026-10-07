<?php
declare(strict_types=1);

require_once __DIR__ . '/helpers.php';

$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$phone = $_POST['phone'] ?? '';
$studyProgram = $_POST['study_program'] ?? '';
$course = $_POST['course'] ?? '';
$participantType = $_POST['participant_type'] ?? '';
$interests = $_POST['interests'] ?? [];
$note = $_POST['note'] ?? '';
$source = $_POST['source'] ?? '';

if (!is_array($interests)) {
    $interests = [];
}

$courseNames = [
    'web-dasar' => 'Web Dasar',
    'php-dasar' => 'PHP Dasar',
    'laravel-fundamental' => 'Laravel Dasar'
];

$participantNames = [
    'mahasiswa' => 'Mahasiswa',
    'umum' => 'Umum'
];

$courseDisplay = $courseNames[$course] ?? $course;
$participantDisplay = $participantNames[$participantType] ?? $participantType;

$interestDisplay = !empty($interests)
    ? implode(', ', $interests)
    : 'Tidak ada';
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Pendaftaran Berhasil - KursusKu</title>

    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

<header class="navbar">

    <div class="nav-container">

        <a href="index.php" class="logo">
            Kursus<span>Ku</span>
        </a>

        <nav>
            <a href="index.php">Beranda</a>
            <a href="registration.php">Daftar Kursus</a>
            <a href="history.php">History Dummy</a>
        </nav>

    </div>

</header>


<main class="result-page">

    <div class="result-card">

        <!-- STATUS -->
        <div class="result-icon">
            ✓
        </div>

        <div class="result-status">
            PENDAFTARAN BERHASIL
        </div>


        <h1>
            Pendaftaran Diterima
        </h1>

        <p class="result-description">
            Terima kasih,
            <strong><?= htmlspecialchars($name) ?></strong>.
            Data pendaftaran kamu sudah diterima dan siap diproses.
        </p>


        <!-- DETAIL -->
        <div class="detail-card">

            <div class="detail-header">

                <div>
                    <h2>Detail Pendaftaran</h2>

                    <p>
                        Periksa kembali data latihan berikut.
                    </p>
                </div>

                <span class="status-badge">
                    ✓ Diterima
                </span>

            </div>


            <div class="detail-list">

                <div class="detail-row">
                    <span>Nama</span>
                    <strong>
                        <?= htmlspecialchars($name) ?>
                    </strong>
                </div>

                <div class="detail-row">
                    <span>Email</span>
                    <strong>
                        <?= htmlspecialchars($email) ?>
                    </strong>
                </div>

                <div class="detail-row">
                    <span>Nomor HP</span>
                    <strong>
                        <?= htmlspecialchars($phone) ?>
                    </strong>
                </div>

                <div class="detail-row">
                    <span>Program Studi</span>
                    <strong>
                        <?= htmlspecialchars($studyProgram) ?>
                    </strong>
                </div>

                <div class="detail-row">
                    <span>Kursus</span>
                    <strong class="purple-text">
                        <?= htmlspecialchars($courseDisplay) ?>
                    </strong>
                </div>

                <div class="detail-row">
                    <span>Jenis Peserta</span>
                    <strong>
                        <?= htmlspecialchars($participantDisplay) ?>
                    </strong>
                </div>

                <div class="detail-row">
                    <span>Minat</span>
                    <strong>
                        <?= htmlspecialchars($interestDisplay) ?>
                    </strong>
                </div>

                <div class="detail-row">
                    <span>Catatan</span>
                    <strong>
                        <?= $note !== ''
                            ? htmlspecialchars($note)
                            : 'Tidak ada catatan'
                        ?>
                    </strong>
                </div>

                <div class="detail-row">
                    <span>Sumber</span>
                    <strong>
                        <?= htmlspecialchars($source) ?>
                    </strong>
                </div>

            </div>

        </div>


        <!-- INFO -->
        <div class="result-info">

            <div class="result-info-icon">
                ✓
            </div>

            <div>

                <strong>
                    Data berhasil dikirim
                </strong>

                <p>
                    Silakan periksa kembali informasi di atas.
                    Jika ingin mengubah data, kamu dapat kembali
                    ke halaman formulir pendaftaran.
                </p>

            </div>

        </div>


        <!-- BUTTON -->
        <div class="result-buttons">

            <a
                href="registration.php"
                class="result-btn result-btn-primary"
            >
                ← Kembali ke Form
            </a>

            <a
                href="index.php"
                class="result-btn result-btn-secondary"
            >
                Ke Beranda
            </a>

        </div>

    </div>

</main>


<footer>

    <div class="footer-container">

        <div>
            <h3>KursusKu</h3>

            <p>
                Platform pembelajaran online untuk membantu
                meningkatkan kemampuan teknologi.
            </p>
        </div>

        <div>
            <h4>Menu</h4>

            <a href="index.php">Beranda</a>
            <a href="registration.php">Daftar Kursus</a>
            <a href="history.php">History Dummy</a>
        </div>

        <div>
            <h4>Kursus</h4>

            <a href="registration.php">Web Dasar</a>
            <a href="registration.php">PHP Dasar</a>
            <a href="registration.php">Laravel Dasar</a>
        </div>

    </div>

    <div class="copyright">
        &copy; <?= date('Y') ?> KursusKu.
        Semua hak dilindungi.
    </div>

</footer>

</body>
</html>