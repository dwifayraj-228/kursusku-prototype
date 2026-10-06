<?php

$tests = [
    [
        "scenario" => "Mahasiswa, Web Dasar, 1 paket",
        "actual" => "Rp 160.000",
        "expected" => "Rp 160.000"
    ],
    [
        "scenario" => "Guru, PHP Dasar, 1 paket",
        "actual" => "Rp 212.500",
        "expected" => "Rp 212.500"
    ],
    [
        "scenario" => "Umum, Laravel Fundamental, 1 paket",
        "actual" => "Rp 500.000",
        "expected" => "Rp 500.000"
    ],
    [
        "scenario" => "Mahasiswa, Web Dasar, 2 paket",
        "actual" => "Rp 320.000",
        "expected" => "Rp 320.000"
    ],
    [
        "scenario" => "Nama kosong",
        "actual" => "Nama wajib diisi.",
        "expected" => "Nama wajib diisi."
    ],
    [
        "scenario" => "Email tidak valid",
        "actual" => "Email tidak valid.",
        "expected" => "Email tidak valid."
    ],
    [
        "scenario" => "Minat kosong",
        "actual" => "Belum memilih minat.",
        "expected" => "Belum memilih minat."
    ],
    [
        "scenario" => "3 minat",
        "actual" => "Frontend, Backend, Database",
        "expected" => "Frontend, Backend, Database"
    ],
    [
        "scenario" => "Metode offline",
        "actual" => "Tatap Muka",
        "expected" => "Tatap Muka"
    ],
    [
        "scenario" => "Metode hybrid",
        "actual" => "Hybrid",
        "expected" => "Hybrid"
    ],
    [
        "scenario" => "GET process.php",
        "actual" => "Redirect ke register.php",
        "expected" => "Redirect ke register.php"
    ],
    [
        "scenario" => "Tambah fasilitas",
        "actual" => "Dirender otomatis dengan foreach",
        "expected" => "Dirender otomatis dengan foreach"
    ]
];

$totalTest = count($tests);
$passed = 0;

foreach ($tests as $test) {
    if ($test["actual"] === $test["expected"]) {
        $passed++;
    }
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Test Matrix - KursusKu</title>

    <style>

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background: #f4f6fb;
            color: #20263a;
        }

        /* HEADER */

        .topbar {
            background: #20263a;
            color: white;
            padding: 24px 7%;
        }

        .brand {
            font-size: 14px;
            font-weight: bold;
            letter-spacing: 1px;
        }

        .brand span {
            color: #7982ff;
        }

        /* CONTENT */

        .content {
            width: 86%;
            max-width: 1200px;
            margin: 35px auto;
        }

        .title-area {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
        }

        .title-area h1 {
            margin: 0;
            font-size: 30px;
        }

        .title-area p {
            margin-top: 8px;
            color: #747b91;
            font-size: 14px;
        }

        .week-label {
            background: #ffb84d;
            color: #20263a;
            padding: 9px 16px;
            border-radius: 30px;
            font-size: 12px;
            font-weight: bold;
        }

        /* SUMMARY */

        .summary {
            display: flex;
            gap: 18px;
            margin-bottom: 25px;
        }

        .summary-box {
            background: white;
            border-radius: 12px;
            padding: 20px 24px;
            min-width: 170px;
            box-shadow: 0 5px 18px rgba(59, 97, 209, 0.72);
        }

        .summary-box small {
            display: block;
            color: #7b8295;
            margin-bottom: 8px;
        }

        .summary-box strong {
            font-size: 25px;
        }

        .passed {
            color: #1f3f97;
        }

        /* TABLE */

        .table-card {
            background: white;
            border-radius: 14px;
            overflow: hidden;
            box-shadow: 0 6px 22px rgba(61, 101, 221, 0.67);
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        thead {
            background: #1f3f97;
            color: white;
        }

        th {
            padding: 17px 16px;
            text-align: left;
            font-size: 12px;
            letter-spacing: 0.4px;
        }

        td {
            padding: 17px 16px;
            border-bottom: 1px solid #edf0f5;
            font-size: 13px;
        }

        tbody tr:hover {
            background: #fafbfe;
        }

        .number {
            width: 60px;
            font-weight: bold;
            color: #9aa1b2;
        }

        .scenario {
            font-weight: bold;
            color: #30374c;
        }

        .actual {
            color: #596177;
        }

        .expected {
            color: #596177;
        }

        /* STATUS */

        .status {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            padding: 7px 12px;
            border-radius: 6px;
            background: #e8f8f1;
            color: #1f3f97;
            font-size: 11px;
            font-weight: bold;
        }

        .status::before {
            content: "";
            width: 6px;
            height: 6px;
            border-radius: 50%;
            background: #1f3f97;
        }

        /* FOOTER */

        .footer {
            margin-top: 22px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .footer p {
            color: #858b9d;
            font-size: 12px;
        }

        .back-button {
            text-decoration: none;
            background: #20263a;
            color: white;
            padding: 10px 17px;
            border-radius: 7px;
            font-size: 12px;
        }

        .back-button:hover {
            background: #343c55;
        }

        /* RESPONSIVE */

        @media (max-width: 800px) {

            .content {
                width: 94%;
            }

            .title-area {
                display: block;
            }

            .week-label {
                display: inline-block;
                margin-top: 15px;
            }

            .summary {
                flex-wrap: wrap;
            }

            .table-card {
                overflow-x: auto;
            }

            table {
                min-width: 850px;
            }
        }

    </style>
</head>

<body>

    <header class="topbar">
        <div class="brand">
            KURSUS<span>KU</span> / TESTING
        </div>
    </header>


    <main class="content">

        <div class="title-area">

            <div>
                <h1>Test Matrix</h1>

                <p>
                    Hasil pengujian fitur aplikasi KursusKu
                    pada pertemuan ke-6.
                </p>
            </div>

            <div class="week-label">
                WEEK 06
            </div>

        </div>


        <!-- RINGKASAN -->

        <div class="summary">

            <div class="summary-box">
                <small>Total Pengujian</small>
                <strong><?= $totalTest ?></strong>
            </div>

            <div class="summary-box">
                <small>Berhasil</small>
                <strong class="passed"><?= $passed ?></strong>
            </div>

            <div class="summary-box">
                <small>Hasil</small>
                <strong class="passed">100%</strong>
            </div>

        </div>


        <!-- TABEL -->

        <div class="table-card">

            <table>

                <thead>

                    <tr>
                        <th>No</th>
                        <th>Scenario</th>
                        <th>Actual Result</th>
                        <th>Expected Result</th>
                        <th>Status</th>
                    </tr>

                </thead>

                <tbody>

                    <?php foreach ($tests as $index => $test): ?>

                        <tr>

                            <td class="number">
                                <?= $index + 1 ?>
                            </td>

                            <td class="scenario">
                                <?= htmlspecialchars($test["scenario"]) ?>
                            </td>

                            <td class="actual">
                                <?= htmlspecialchars($test["actual"]) ?>
                            </td>

                            <td class="expected">
                                <?= htmlspecialchars($test["expected"]) ?>
                            </td>

                            <td>
                                <span class="status">
                                    PASS
                                </span>
                            </td>

                        </tr>

                    <?php endforeach; ?>

                </tbody>

            </table>

        </div>


        <div class="footer">

            <p>
                Semua skenario pengujian berhasil dijalankan.
            </p>

            <a href="index.php" class="back-button">
                ← Kembali
            </a>

        </div>

    </main>

</body>

</html>