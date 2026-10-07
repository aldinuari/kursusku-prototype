```php
<?php
require __DIR__ . '/data.php';
require __DIR__ . '/helpers.php';
?>
<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KursusKu - Belajar Web</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

<header class="navbar">
    <div class="nav-container">
        <a href="index.php" class="logo">Kursus<span>Ku</span></a>

        <nav>
            <a href="index.php">Beranda</a>
            <a href="registration.php">Daftar Kursus</a>
            <a href="history.php">History</a>
        </nav>
        <!-- KATALOG KURSUS -->
<section class="catalog-section" id="katalog">
    <div class="catalog-container">

        <div class="catalog-header">
            <span class="catalog-badge">KATALOG KURSUS</span>
            <h1>Pilih Kursus yang <span>Sesuai</span></h1>
            <p>
                Temukan kursus yang sesuai dengan kebutuhanmu dan
                mulai tingkatkan kemampuanmu bersama KursusKu.
            </p>
        </div>

        <div class="catalog-grid">
            <?php foreach ($courses as $course): ?>
                <div class="catalog-card">

                    <div class="catalog-icon">
                        💻
                    </div>

                    <div class="catalog-content">
                        <span class="catalog-label">Kursus Online</span>

                        <h3>
                            <?= htmlspecialchars($course['name']) ?>
                        </h3>

                        <p>
                            Pelajari materi secara bertahap dengan
                            pembelajaran yang mudah dipahami.
                        </p>

                        <div class="catalog-bottom">
                            <strong>
                                <?= rupiah($course['price']) ?>
                            </strong>

                            <a href="registration.php" class="catalog-button">
                                Daftar →
                            </a>
                        </div>
                    </div>

                </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>
    </div>
</header>

<section class="hero">
    <div class="hero-content">
        <span class="hero-badge">PLATFORM BELAJAR ONLINE</span>

        <h1>Belajar Web Lebih Mudah Bersama <span>KursusKu</span></h1>

        <p>
            Tingkatkan kemampuan web programming kamu mulai dari dasar
            hingga memahami teknologi web modern.
        </p>

        <div class="hero-buttons">
            <a href="registration.php" class="btn btn-primary">
                Daftar Sekarang
            </a>

            <a href="#katalog" class="btn btn-outline">
                Lihat Kursus
            </a>
        </div>
    </div>
</section>

<main>

<section class="section" id="katalog">
    <div class="section-title">
        <span>KURSUS</span>
        <h2>Pilih Kursus Favoritmu</h2>
        <p>Materi pembelajaran yang cocok untuk memulai perjalananmu di dunia web.</p>
    </div>

    <div class="course-grid">

        <?php foreach ($courses as $course): ?>
            <div class="course-card">

                <div class="course-icon">
                    💻
                </div>

                <h3><?= e($course['name']) ?></h3>

                <p>
                    Pelajari dasar-dasar <?= e($course['name']) ?>
                    dengan materi yang mudah dipahami.
                </p>

                <div class="course-bottom">
                    <strong>
                        <?= formatRupiah($course['fee']) ?>
                    </strong>

                    <a href="registration.php">
                        Daftar →
                    </a>
                </div>

            </div>
        <?php endforeach; ?>

    </div>
</section>


<section class="section facilities">

    <div class="section-title">
        <span>FASILITAS</span>
        <h2>Apa yang Kamu Dapatkan?</h2>
    </div>

    <div class="facility-grid">

        <?php foreach ($facilities as $facility): ?>

            <div class="facility-card">
                <div class="facility-icon">✓</div>

                <h3><?= e($facility) ?></h3>

                <p>
                    Fasilitas pembelajaran untuk membantu
                    kamu memahami materi dengan lebih mudah.
                </p>
            </div>

        <?php endforeach; ?>

    </div>

</section>


<section class="cta">

    <div>
        <span>SIAP UNTUK BELAJAR?</span>

        <h2>
            Mulai perjalanan belajar web kamu sekarang.
        </h2>

        <p>
            Daftarkan diri dan pilih kursus yang sesuai
            dengan kebutuhanmu.
        </p>
    </div>

    <a href="registration.php" class="btn btn-light">
        Daftar Kursus
    </a>

</section>

</main>


<footer>
    <div class="footer-container">

        <div>
            <h3>KursusKu</h3>
            <p>
                Platform belajar web untuk pemula
                yang ingin berkembang bersama teknologi.
            </p>
        </div>

        <div>
            <h4>Menu</h4>
            <a href="index.php">Beranda</a>
            <a href="registration.php">Daftar Kursus</a>
            <a href="history.php">History</a>
        </div>

        <div>
            <h4>Kontak</h4>
            <p>Email: info@kursusku.com</p>
            <p>Indonesia</p>
        </div>

    </div>

    <div class="copyright">
        © 2026 KursusKu. All Rights Reserved.
    </div>
</footer>

</body>
</html>
```
