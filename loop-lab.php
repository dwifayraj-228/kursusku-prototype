<?php

$daftarKursus = [
    ["name" => "Web Dasar", "fee" => 300000],
    ["name" => "PHP Dasar", "fee" => 350000],
    ["name" => "Laravel Fundamental", "fee" => 500000]
];

?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Loop PHP - KursusKu</title>

    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

<main class="container">

    <section class="page-intro">
        <p class="eyebrow">KursusKu</p>

        <h1>Latihan Perulangan PHP</h1>

        <p>
            Contoh penggunaan perulangan for dan foreach
            dalam menampilkan data kursus.
        </p>
    </section>


    <!-- PERULANGAN FOR -->
    <section class="summary-card">

        <h2>1. Perulangan For - Daftar Paket</h2>

        <ul>

            <?php
            for ($paket = 1; $paket <= 5; $paket++) {
                $harga = $paket * 100000;
            ?>

                <li>
                    Paket <?= $paket ?>:
                    Rp <?= number_format($harga, 0, ',', '.') ?>
                </li>

            <?php } ?>

        </ul>

    </section>


    <!-- PERULANGAN FOREACH -->
    <section class="summary-card">

        <h2>2. Perulangan Foreach - Daftar Kursus</h2>

        <ol>

            <?php
            foreach ($daftarKursus as $kursus) {
            ?>

                <li>
                    <strong>
                        <?= htmlspecialchars($kursus["name"]) ?>
                    </strong>

                    -
                    Rp <?= number_format($kursus["fee"], 0, ',', '.') ?>
                </li>

            <?php
            }
            ?>

        </ol>

    </section>


    <!-- PERULANGAN FOREACH + PERHITUNGAN -->
    <section class="summary-card">

        <h2>3. Perulangan dengan Diskon 15%</h2>

        <table class="cost-table">

            <thead>
                <tr>
                    <th>Kursus</th>
                    <th>Harga</th>
                    <th>Diskon</th>
                    <th>Total</th>
                </tr>
            </thead>

            <tbody>

                <?php
                foreach ($daftarKursus as $kursus) {

                    $hargaDasar = $kursus["fee"];
                    $diskon = $hargaDasar * 15 / 100;
                    $totalBayar = $hargaDasar - $diskon;
                ?>

                    <tr>

                        <td>
                            <?= htmlspecialchars($kursus["name"]) ?>
                        </td>

                        <td>
                            Rp <?= number_format($hargaDasar, 0, ',', '.') ?>
                        </td>

                        <td>
                            -Rp <?= number_format($diskon, 0, ',', '.') ?>
                        </td>

                        <td>
                            <strong>
                                Rp <?= number_format($totalBayar, 0, ',', '.') ?>
                            </strong>
                        </td>

                    </tr>

                <?php
                }
                ?>

            </tbody>

        </table>

    </section>


    <div class="action-buttons">

        <a href="registration.php" class="btn-link">
            Kembali ke Form
        </a>

    </div>

</main>

</body>
</html>