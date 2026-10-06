<?php
// Data dummy pendaftaran (simulasi)
$history = [
    ['name' => 'Dwi Fayra Jusita', 'course' => 'PHP Dasar', 'type' => 'Mahasiswa', 'date' => '2026-09-20', 'total' => 250000],
    ['name' => 'Amanda Putri', 'course' => 'Laravel Fundamental', 'type' => 'Guru', 'date' => '2026-09-31', 'total' => 425000],
    ['name' => 'Fernanda Utama', 'course' => 'Web Dasar', 'type' => 'Umum', 'date' => '2026-09-22', 'total' => 245000],
    ['name' => 'Zeno Putra', 'course' => 'PHP Dasar', 'type' => 'Mahasiswa', 'date' => '2026-09-223', 'total' => 250000],
];

function e(mixed $value): string {
    return htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8');
}
?>
<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>History Pendaftaran - KursusKu</title>
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<main class="container">
  <section class="page-intro">
    <p class="eyebrow">History Dummy</p>
    <h1>Riwayat Pendaftaran (Data Contoh)</h1>
    <p>Data ini hanya simulasi belum tersimpan di database.</p>
  </section>

  <section class="summary-card">
    <table class="cost-table">
      <thead>
        <tr>
          <th class="col-no">No</th>
          <th>Nama</th>
          <th>Kursus</th>
          <th>Tipe</th>
          <th>Tanggal</th>
          <th class="col-total">Total</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($history as $i => $item): ?>
          <tr>
            <td><?= $i + 1 ?></td>
            <td><?= e($item['name']) ?></td>
            <td><?= e($item['course']) ?></td>
            <td><?= e($item['type']) ?></td>
            <td><?= e($item['date']) ?></td>
            <td>Rp <?= number_format($item['total'], 0, ',', '.') ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>

   <a class="btn-link" href="registration.php">Daftar Kursus</a>
   <a class="btn-link" href="index.php">Beranda</a>
  </section>
</main>
</body>
</html>