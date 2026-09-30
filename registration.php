<?php
require_once __DIR__ . '/helpers.php';

$siteName = 'KursusKu';
$year     = date('Y');
?>
<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pendaftaran Kursus - <?= htmlspecialchars($siteName) ?></title>
    <style>
        * { box-sizing: border-box; }
        body { font-family: Arial, sans-serif; background: #f5f7f6; margin: 0; padding: 0; color: #16332c; }
        
        /* Header / Navbar */
        header { background: #0f766e; padding: 16px 24px; display: flex; justify-content: space-between; align-items: center; }
        header a { color: #fff; text-decoration: none; margin-right: 16px; font-size: 14px; }
        header a:hover { text-decoration: underline; }
        .logo { font-size: 18px; font-weight: bold; color: #fff; text-decoration: none; }
        
        /* Main Container */
        main { max-width: 680px; margin: 32px auto; padding: 0 16px; }
        
        /* Card Container Form */
        .form-card { background: #ffffff; border-radius: 16px; padding: 32px; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05); }
        .form-card h1 { margin-top: 0; margin-bottom: 8px; font-size: 24px; color: #0f766e; }
        .form-card .subtitle { color: #6b7280; font-size: 14px; margin-bottom: 24px; }
        
        /* Form Group & Inputs */
        .form-group { margin-bottom: 20px; }
        .form-group label { display: block; font-weight: bold; margin-bottom: 8px; font-size: 14px; color: #374151; }
        .form-group label .required { color: #dc2626; }
        
        .form-control {
            width: 100%;
            padding: 10px 14px;
            font-size: 14px;
            border: 1px solid #d1d5db;
            border-radius: 8px;
            outline: none;
            transition: border-color 0.2s, box-shadow 0.2s;
            background-color: #fff;
        }
        .form-control:focus {
            border-color: #0f766e;
            box-shadow: 0 0 0 3px rgba(15, 118, 110, 0.15);
        }
        
        textarea.form-control { resize: vertical; min-height: 100px; }
        
        /* Radio & Checkbox Styling */
        .options-group { display: flex; gap: 20px; flex-wrap: wrap; padding-top: 4px; }
        .option-item { display: flex; align-items: center; gap: 8px; font-size: 14px; cursor: pointer; color: #4b5563; }
        .option-item input { cursor: pointer; accent-color: #0f766e; width: 16px; height: 16px; }
        
        /* Fieldset / Bordered Group */
        fieldset.form-group {
            border: 1px solid #e5e7eb;
            border-radius: 8px;
            padding: 12px 16px 16px 16px;
        }
        fieldset.form-group legend {
            font-weight: bold;
            font-size: 14px;
            color: #374151;
            padding: 0 8px;
        }
        
        .help-text { font-size: 12px; color: #6b7280; margin-top: 4px; }
        
        /* Tombol Submit */
        .btn-submit {
            width: 100%;
            background-color: #0f766e;
            color: #ffffff;
            border: none;
            padding: 12px 20px;
            font-size: 16px;
            font-weight: bold;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.2s;
            margin-top: 10px;
        }
        .btn-submit:hover { background-color: #115e59; }
        
        /* Footer */
        footer { text-align: center; padding: 24px; color: #6b7280; font-size: 14px; }
    </style>
</head>
<body>

<header>
    <a href="index.php" class="logo"><?= htmlspecialchars($siteName) ?></a>
    <nav aria-label="Navigasi utama">
        <a href="index.php">Beranda</a>
        <a href="index.php#katalog">Katalog</a>
        <a href="fee-calculator.php">Estimasi Biaya</a>
        <a href="registration.php" style="font-weight: bold; text-decoration: underline;">Daftar</a>
    </nav>
</header>

<main>
    <div class="form-card">
        <h1>Mulai belajar bersama KursusKu</h1>
        <p class="subtitle">Gunakan data latihan. Field bertanda <span class="required">*</span> wajib diisi.</p>

        <form action="process-registration.php" method="POST">
            
            <div class="form-group">
                <label for="nama">Nama Lengkap <span class="required">*</span></label>
                <input type="text" id="nama" name="nama" class="form-control" placeholder="Masukkan nama lengkap Anda" required>
            </div>

            <div class="form-group">
                <label for="email">Email <span class="required">*</span></label>
                <input type="email" id="email" name="email" class="form-control" placeholder="contoh@domain.com" required>
            </div>

            <div class="form-group">
                <label for="hp">Nomor HP <span class="required">*</span></label>
                <input type="tel" id="hp" name="hp" class="form-control" placeholder="Contoh: 081234567890" required>
            </div>

            <div class="form-group">
                <label for="prodi">Program Studi <span class="required">*</span></label>
                <input type="text" id="prodi" name="prodi" class="form-control" placeholder="Masukkan program studi Anda" required>
            </div>

            <div class="form-group">
                <label for="kursus">Kursus yang Dipilih <span class="required">*</span></label>
                <select id="kursus" name="kursus" class="form-control" required>
                    <option value="">-- Pilih kursus --</option>
                    <option value="WEB-01">WEB-01 - Web Dasar</option>
                    <option value="PHP-01">PHP-01 - PHP Dasar</option>
                    <option value="PHP-02">PHP-02 - PHP Lanjutan</option>
                    <option value="LAR-01">LAR-01 - Laravel Fundamental</option>
                    <option value="DB-01">DB-01 - MySQL Dasar</option>
                    <option value="UI-01">UI-01 - UI Web Dasar</option>
                </select>
            </div>

            <fieldset class="form-group">
                <legend>Jenis Peserta <span class="required">*</span></legend>
                <div class="options-group">
                    <label class="option-item">
                        <input type="radio" name="jenis_peserta" value="Mahasiswa" required> Mahasiswa
                    </label>
                    <label class="option-item">
                        <input type="radio" name="jenis_peserta" value="Umum" required> Umum
                    </label>
                </div>
            </fieldset>

            <fieldset class="form-group">
                <legend>Minat Tambahan</legend>
                <div class="options-group">
                    <label class="option-item">
                        <input type="checkbox" name="minat[]" value="UI/UX"> UI/UX
                    </label>
                    <label class="option-item">
                        <input type="checkbox" name="minat[]" value="Database"> Database
                    </label>
                    <label class="option-item">
                        <input type="checkbox" name="minat[]" value="Backend"> Backend
                    </label>
                </div>
            </fieldset>

            <div class="form-group">
                <label for="catatan">Catatan / Kebutuhan Belajar</label>
                <textarea id="catatan" name="catatan" class="form-control" maxlength="300" placeholder="Tuliskan kebutuhan belajar Anda (opsional)"></textarea>
                <div class="help-text">Maksimal 300 karakter.</div>
            </div>

            <button type="submit" class="btn-submit">Kirim Pendaftaran</button>
        </form>
    </div>
</main>

<footer>
    <small>&copy; <?= $year ?> <?= htmlspecialchars($siteName) ?></small>
</footer>

</body>
</html>