<?php
declare(strict_types=1);

require_once __DIR__ . '/helpers.php';
require_once __DIR__ . '/data.php';
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Kursus - KursusKu</title>

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


<main class="registration-page">

    <!-- HEADER -->
    <section class="registration-header">

        <span class="hero-badge">
            PENDAFTARAN KURSUS
        </span>

        <h1>
            Mulai Belajar Bersama
            <span>KursusKu</span>
        </h1>

        <p>
            Isi formulir pendaftaran di bawah ini untuk memilih
            kursus yang ingin kamu ikuti.
        </p>

    </section>


    <!-- CONTENT -->
    <section class="registration-layout">

        <!-- INFORMASI -->
        <div class="registration-info">

            <h2>Kenapa belajar di KursusKu?</h2>

            <p>
                Dapatkan pengalaman belajar yang mudah,
                terarah, dan sesuai dengan kebutuhan kamu.
            </p>


            <div class="info-item">

                <div class="info-icon">
                    📚
                </div>

                <div>
                    <h3>Materi Terstruktur</h3>

                    <p>
                        Materi pembelajaran disusun secara
                        bertahap agar mudah dipahami.
                    </p>
                </div>

            </div>


            <div class="info-item">

                <div class="info-icon">
                    🎓
                </div>

                <div>
                    <h3>Sertifikat</h3>

                    <p>
                        Dapatkan sertifikat setelah menyelesaikan
                        kursus yang dipilih.
                    </p>
                </div>

            </div>


            <div class="info-item">

                <div class="info-icon">
                    💬
                </div>

                <div>
                    <h3>Forum Diskusi</h3>

                    <p>
                        Berdiskusi dan bertanya mengenai materi
                        bersama peserta lainnya.
                    </p>
                </div>

            </div>

        </div>


        <!-- FORM -->
        <div class="registration-card">

            <div class="form-title">

                <h2>Form Pendaftaran</h2>

                <p>
                    Lengkapi data berikut dengan benar.
                </p>

            </div>


            <form
                action="process-registration.php"
                method="POST"
                class="registration-form"
            >

                <!-- SOURCE -->
                <input
                    type="hidden"
                    name="source"
                    value="week-05"
                >


                <!-- NAMA -->
                <div class="field">

                    <label for="name">
                        Nama Lengkap <span>*</span>
                    </label>

                    <input
                        type="text"
                        id="name"
                        name="name"
                        placeholder="Masukkan nama lengkap"
                        required
                    >

                </div>


                <!-- EMAIL -->
                <div class="field">

                    <label for="email">
                        Email <span>*</span>
                    </label>

                    <input
                        type="email"
                        id="email"
                        name="email"
                        placeholder="contoh@email.com"
                        required
                    >

                </div>


                <!-- NOMOR TELEPON -->
                <div class="field">

                    <label for="phone">
                        Nomor Telepon <span>*</span>
                    </label>

                    <input
                        type="tel"
                        id="phone"
                        name="phone"
                        placeholder="08xxxxxxxxxx"
                        required
                    >

                </div>


                <!-- PROGRAM STUDI -->
                <div class="field">

                    <label for="study_program">
                        Program Studi <span>*</span>
                    </label>

                    <input
                        type="text"
                        id="study_program"
                        name="study_program"
                        placeholder="Contoh: Informatika"
                        required
                    >

                </div>


                <!-- KURSUS -->
                <div class="field">

                    <label for="course">
                        Pilih Kursus <span>*</span>
                    </label>

                    <select
                        id="course"
                        name="course"
                        required
                    >

                        <option value="">
                            -- Pilih Kursus --
                        </option>

                        <option value="web-dasar">
                            Web Dasar - Rp300.000
                        </option>

                        <option value="php-dasar">
                            PHP Dasar - Rp400.000
                        </option>

                        <option value="laravel-fundamental">
                            Laravel Dasar - Rp500.000
                        </option>

                    </select>

                </div>


                <!-- JENIS PESERTA -->
                <fieldset class="field">

                    <legend>
                        Jenis Peserta <span>*</span>
                    </legend>

                    <div class="choice-row">

                        <label>
                            <input
                                type="radio"
                                name="participant_type"
                                value="mahasiswa"
                                required
                            >

                            Mahasiswa
                        </label>


                        <label>
                            <input
                                type="radio"
                                name="participant_type"
                                value="umum"
                            >

                            Umum
                        </label>

                    </div>

                </fieldset>


                <!-- MINAT -->
                <fieldset class="field">

                    <legend>
                        Bidang yang Diminati
                    </legend>

                    <div class="choice-row">

                        <label>
                            <input
                                type="checkbox"
                                name="interests[]"
                                value="ui-ux"
                            >

                            UI/UX
                        </label>


                        <label>
                            <input
                                type="checkbox"
                                name="interests[]"
                                value="database"
                            >

                            Database
                        </label>


                        <label>
                            <input
                                type="checkbox"
                                name="interests[]"
                                value="backend"
                            >

                            Backend
                        </label>

                    </div>

                </fieldset>


                <!-- CATATAN -->
                <div class="field">

                    <label for="note">
                        Catatan
                    </label>

                    <textarea
                        id="note"
                        name="note"
                        rows="5"
                        maxlength="300"
                        placeholder="Tuliskan catatan atau kebutuhan khusus..."
                    ></textarea>

                    <small>
                        Maksimal 300 karakter.
                    </small>

                </div>


                <!-- BUTTON -->
                <div class="form-buttons">

                    <button
                        type="submit"
                        class="btn btn-primary"
                    >
                        Kirim Pendaftaran
                    </button>


                    <a
                        href="index.php"
                        class="btn btn-outline"
                    >
                        Kembali ke Beranda
                    </a>

                </div>

            </form>

        </div>

    </section>

</main>


<!-- FOOTER -->
<footer>

    <div class="footer-container">

        <div>
            <h3>KursusKu</h3>

            <p>
                Platform pembelajaran online untuk membantu
                kamu meningkatkan kemampuan teknologi.
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