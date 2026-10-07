<?php
declare(strict_types=1);

$history = [
    [
        'name' => 'Alya',
        'course' => 'Web Dasar',
        'total' => 240000
    ],
    [
        'name' => 'Bima',
        'course' => 'PHP Dasar',
        'total' => 340000
    ],
    [
        'name' => 'Citra',
        'course' => 'Laravel Dasar',
        'total' => 500000
    ]
];

$totalData = count($history);

$totalPendaftaran = array_sum(
    array_column($history, 'total')
);

$totalPeserta = count(
    array_unique(
        array_column($history, 'name')
    )
);

function rupiah(int $value): string
{
    return 'Rp' . number_format(
        $value,
        0,
        ',',
        '.'
    );
}
?>

<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>History Pendaftaran - KursusKu</title>

    <link
        rel="stylesheet"
        href="assets/css/style.css"
    >

</head>


<body>


<!-- NAVBAR -->

<header class="navbar">

    <div class="nav-container">

        <a
            href="index.php"
            class="logo"
        >
            Kursus<span>Ku</span>
        </a>


        <nav>

            <a href="index.php">
                Beranda
            </a>

            <a href="registration.php">
                Daftar Kursus
            </a>

            <a href="history.php">
                History Dummy
            </a>

        </nav>

    </div>

</header>



<!-- MAIN -->

<main class="history-page">


    <!-- HEADER -->

    <section class="history-header">

        <span class="history-badge">
            DATA PENDAFTARAN
        </span>

        <h1>
            History <span>Pendaftaran</span>
        </h1>

        <p>
            Berikut merupakan data riwayat pendaftaran
            kursus yang tersimpan pada sistem.
        </p>

    </section>



    <!-- STATISTIK -->

    <section class="history-statistics">


        <div class="history-stat-card">

            <div class="stat-icon purple">
                📋
            </div>

            <div>

                <span>
                    Total Data
                </span>

                <strong>
                    <?= $totalData ?>
                </strong>

            </div>

        </div>



        <div class="history-stat-card">

            <div class="stat-icon green">
                👤
            </div>

            <div>

                <span>
                    Total Peserta
                </span>

                <strong>
                    <?= $totalPeserta ?>
                </strong>

            </div>

        </div>



        <div class="history-stat-card">

            <div class="stat-icon blue">
                💰
            </div>

            <div>

                <span>
                    Total Transaksi
                </span>

                <strong>
                    <?= rupiah($totalPendaftaran) ?>
                </strong>

            </div>

        </div>


    </section>



    <!-- TABLE CARD -->

    <section class="history-card">


        <div class="history-card-header">

            <div>

                <h2>
                    Riwayat Pendaftaran
                </h2>

                <p>
                    Daftar peserta dan kursus yang dipilih.
                </p>

            </div>


            <a
                href="registration.php"
                class="history-add-button"
            >
                + Daftar Kursus
            </a>

        </div>



        <!-- TABLE -->

        <div class="history-table-wrapper">

            <table class="history-table">

                <thead>

                    <tr>

                        <th>
                            No
                        </th>

                        <th>
                            Nama
                        </th>

                        <th>
                            Kursus
                        </th>

                        <th>
                            Total
                        </th>

                        <th>
                            Status
                        </th>

                    </tr>

                </thead>


                <tbody>

                    <?php foreach ($history as $index => $item): ?>

                        <tr>

                            <td>
                                <?= $index + 1 ?>
                            </td>


                            <td>

                                <div class="participant">

                                    <div class="participant-avatar">
                                        <?= strtoupper(
                                            substr($item['name'], 0, 1)
                                        ) ?>
                                    </div>

                                    <strong>
                                        <?= htmlspecialchars(
                                            $item['name']
                                        ) ?>
                                    </strong>

                                </div>

                            </td>


                            <td>

                                <span class="course-badge">

                                    <?= htmlspecialchars(
                                        $item['course']
                                    ) ?>

                                </span>

                            </td>


                            <td>

                                <strong class="price">

                                    <?= rupiah(
                                        $item['total']
                                    ) ?>

                                </strong>

                            </td>


                            <td>

                                <span class="history-status">

                                    ✓ Selesai

                                </span>

                            </td>

                        </tr>

                    <?php endforeach; ?>

                </tbody>

            </table>

        </div>


        <!-- FOOTER TABLE -->

        <div class="history-card-footer">

            <span>
                Menampilkan
                <strong><?= $totalData ?></strong>
                data pendaftaran
            </span>

            <a href="index.php">
                ← Kembali ke Beranda
            </a>

        </div>


    </section>


</main>



<!-- FOOTER -->

<footer>

    <div class="footer-container">


        <div>

            <h3>
                KursusKu
            </h3>

            <p>
                Platform pembelajaran online untuk membantu
                meningkatkan kemampuan teknologi.
            </p>

        </div>



        <div>

            <h4>
                Menu
            </h4>

            <a href="index.php">
                Beranda
            </a>

            <a href="registration.php">
                Daftar Kursus
            </a>

            <a href="history.php">
                History Dummy
            </a>

        </div>



        <div>

            <h4>
                Kursus
            </h4>

            <a href="registration.php">
                Web Dasar
            </a>

            <a href="registration.php">
                PHP Dasar
            </a>

            <a href="registration.php">
                Laravel Dasar
            </a>

        </div>


    </div>


    <div class="copyright">

        &copy; <?= date('Y') ?> KursusKu.
        Semua hak dilindungi.

    </div>

</footer>


</body>

</html>