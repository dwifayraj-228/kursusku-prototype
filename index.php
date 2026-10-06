<?php
require_once __DIR__ . '/helpers.php';

$courses = [
    ['code' => 'WEB-01', 'name' => 'Web Dasar', 'fee' => 200000, 'quota' => 30, 'registered' => 12, 'start_date' => '2026-09-21'],
    ['code' => 'PHP-01', 'name' => 'PHP Dasar', 'fee' => 250000, 'quota' => 30, 'registered' => 18, 'start_date' => '2026-09-22'],
    ['code' => 'PHP-02', 'name' => 'PHP Lanjutan', 'fee' => 300000, 'quota' => 25, 'registered' => 24, 'start_date' => '2026-09-24'],
    ['code' => 'LAR-01', 'name' => 'Laravel Fundamental', 'fee' => 350000, 'quota' => 25, 'registered' => 25, 'start_date' => '2026-09-28'],
    ['code' => 'DB-01', 'name' => 'MySQL Dasar', 'fee' => 275000, 'quota' => 20, 'registered' => 0, 'start_date' => '2026-10-01'],
    ['code' => 'UI-01', 'name' => 'UI Web Dasar', 'fee' => 225000, 'quota' => 35, 'registered' => 9, 'start_date' => '2026-10-03'],
];

$siteName = "KursusKu";
$tagline = "Belajar Teknologi, Bangun Masa Depan";
$tahun = date("Y");

?>

<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">

  <meta
    name="viewport"
    content="width=device-width, initial-scale=1.0">

  <title><?php echo $siteName; ?></title>

  <link
    rel="stylesheet"
    href="assets/css/style.css">
</head>

<style>
  .course-card h3 {
    color: #2563a6 !important;
  }
</style>

<body>
  <header class="header">

    <div class="container">

      <h1>
        <?php echo $siteName; ?>
      </h1>

      <p>
        <?php echo $tagline; ?>
      </p>

    </div>

  </header>

  <nav class="navbar">

    <div class="container">

      <a href="#beranda">Beranda</a>

      <a href="#kursus">Kursus</a>

      <a href="#keunggulan">Keunggulan</a>

      <a href="#tentang">Tentang</a>

      <a href="#kontak">Kontak</a>

      <a href="index.php#alur">Cara Daftar</a>
      
      <a href="index.php#media">Media</a>
    
      <a href="fee-calculator.php">Form P5</a>
      
      <a href="registration.php">Daftar P6</a>
      
      <a href="history.php">History</a>
    </div>

  </nav>

  <main>
    <section id="beranda" class="hero">

      <div class="container">

        <div class="hero-content">

          <div>

            <h2>
              Selamat Datang di
              <?php echo $siteName; ?>
            </h2>

            <p>
              Platform belajar teknologi untuk
              mahasiswa yang ingin meningkatkan
              kemampuan pemrograman web.
            </p>

            <a
              href="#kursus"
              class="button">
              Lihat Kursus
            </a>

            <a
              href="fee-calculator.php"
              class="button">Lihat Estimasi Biaya
            </a>

          </div>

          <div>

            <img
              src="assets/img/image1.png"
              alt="Mahasiswa sedang belajar pemrograman web"
              class="hero-image">

          </div>

        </div>

      </div>

    </section>
    <section id="kursus" class="section">

      <div class="container">

        <h2>Katalog Kursus</h2>

        <table>
          <thead>
            <tr>
              <th>Kode</th>
              <th>Nama</th>
              <th>Biaya</th>
              <th>Mulai</th>
              <th>Sisa</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($courses as $course): ?>
              <?php
              $status = statusKursus($course['quota'], $course['registered']);
              $statusClass = $status === 'Penuh' ? 'badge-full' : 'badge-available';
              ?>
              <tr>
                <td><?= htmlspecialchars($course['code']) ?></td>
                <td><?= htmlspecialchars(trim($course['name'])) ?></td>
                <td><?= rupiah($course['fee']) ?></td>
                <td><?= formatTanggal($course['start_date']) ?></td>
                <td><?= sisaKursi($course['quota'], $course['registered']) ?></td>
                <td><span class="<?= $statusClass ?>"><?= $status ?></span></td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>

        <h2>Program Kursus</h2>

        <div class="course-grid">

          <article class="course-card">

            <h3>HTML & CSS</h3>

            <p>
              Belajar membangun struktur dan
              tampilan website dari dasar.
            </p>

          </article>


          <article class="course-card">

            <h3>PHP</h3>

            <p>
              Belajar pemrograman web
              server-side menggunakan PHP.
            </p>

          </article>


          <article class="course-card">

            <h3>Laravel</h3>

            <p>
              Membangun aplikasi web modern
              menggunakan framework Laravel.
            </p>

          </article>

        </div>

      </div>

    </section>

    <section id="tentang" class="section section-light">

      <div class="container">

        <h2>Tentang KursusKu</h2>

        <p>
          KursusKu merupakan prototype website
          pembelajaran yang dikembangkan dalam
          mata kuliah Pemrograman Web III.
        </p>

        <p>
          Pada semester ini mahasiswa akan belajar
          PHP, MySQL dan framework Laravel.
        </p>

        <a
          href="https://laravel.com"
          target="_blank"
          rel="noopener">
          Pelajari Laravel
        </a>

      </div>

<section id="keunggulan" class="section">

  <div class="container">

    <h2>Keunggulan KursusKu</h2>

    <div class="course-grid">

      <article class="course-card">
        <h3>Materi Praktis</h3>
        <p>
          Materi pembelajaran dibuat sederhana
          dan mudah dipahami.
        </p>
      </article>

      <article class="course-card">
        <h3>Belajar Fleksibel</h3>
        <p>
          Peserta dapat memilih metode belajar
          sesuai kebutuhan.
        </p>
      </article>

      <article class="course-card">
        <h3>Biaya Terjangkau</h3>
        <p>
          Pilihan kursus tersedia dengan biaya
          yang sesuai untuk mahasiswa.
        </p>
      </article>

      <article class="course-card">
        <h3>Berbasis Teknologi</h3>
        <p>
          Pembelajaran berfokus pada teknologi
          dan keterampilan pemrograman web.
        </p>
      </article>

    </div>

  </div>

</section>


<section id="alur" class="section">

  <div class="container">

    <h2>Cara Daftar</h2>

    <p>
      Daftar di KursusKu dengan memilih kursus,
      mengisi data, memilih paket, dan mengonfirmasi pendaftaran.
    </p>

    <div class="course-grid">

      <article class="course-card">
        <h3>1. Pilih Kursus</h3>
        <p>Pilih kursus yang sesuai dengan kebutuhan.</p>
      </article>

      <article class="course-card">
        <h3>2. Isi Data</h3>
        <p>Isi data diri pada formulir pendaftaran.</p>
      </article>

      <article class="course-card">
        <h3>3. Pilih Paket</h3>
        <p>Tentukan jumlah paket kursus.</p>
      </article>

      <article class="course-card">
        <h3>4. Konfirmasi</h3>
        <p>Periksa data dan selesaikan pendaftaran.</p>
      </article>

    </div>

  </div>

</section>


    </section>
    <section class="section">

      <div class="container">

        <h2>Video Pembelajaran</h2>

        <div class="video-placeholder">

          <iframe width="342" height="607" src="https://www.youtube.com/embed/nQinn48Bk2g" title="Kenapa Laravel Masih Banyak Yang Pake" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>


      </div>

    </section>
    <section id="kontak" class="section section-light">

      <div class="container">

        <h2>Kontak</h2>

        <p>
          Informasi lebih lanjut mengenai
          program KursusKu dapat diperoleh
          melalui halaman ini.
        </p>

      </div>

    </section>
  </main>

  <footer class="footer">

    <div class="container">

      <p>

        &copy;
        <?php echo $tahun; ?>

        <?php echo $siteName; ?>.

        Pemrograman Web III.

      </p>

    </div>

  </footer>
</body>

</html>