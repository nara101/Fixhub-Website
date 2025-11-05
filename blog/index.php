<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>FIXUP</title>

  <!-- Link Bootstrap -->
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
    crossorigin="anonymous" />

  <!-- Link Google Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
    rel="stylesheet" />

  <!-- adding flaticon -->
  <link
    rel="stylesheet"
    href="https://cdn-uicons.flaticon.com/3.0.0/uicons-regular-rounded/css/uicons-regular-rounded.css" />
  <!-- Flaticon CDN -->
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/flaticon/5.15.0/css/flaticon.min.css" />

  <!-- Link Feather Icon -->
  <script src="https://unpkg.com/feather-icons"></script>

  <!-- Link CSS -->
  <link rel="stylesheet" href="assets/css/style.css" />
  <link rel="stylesheet" href="assets/css/style-navbar.css" />
  <link rel="stylesheet" href="assets/css/style-footer.css" />
</head>

<body>
  <!-- NAVBAR START -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm" id="navbar">
    <div class="container-fluid">
      <!-- Brand -->
      <div class="nav-brand">
        <img class="logo" src="assets/images/logo.png" alt="fixup-logo" />
        <p class="logo-text">Legal Consultant</p>
      </div>

      <!-- Toggle button (Offcanvas trigger) -->
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="offcanvas"
        data-bs-target="#offcanvasNavbar"
        aria-controls="offcanvasNavbar"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Offcanvas Menu -->
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar">
        <div class="offcanvas-header justify-content-end">
          <!-- Tombol X saja -->
          <button
            type="button"
            class="btn-close"
            data-bs-dismiss="offcanvas"
            aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <!-- Navbar Items -->
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link active" href="#landing-s">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#blog">Blog</a>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#sejarah-singkat-s"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false">
                Profil
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#tim-kami-s">Tim Kami</a></li>
                <li>
                  <a class="dropdown-item" href="#help">Target Market</a>
                </li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#help"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false">
                Layanan
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="halaman/layanan.php#kontrak">Kontrak</a></li>
                <li><a class="dropdown-item" href="halaman/layanan.php#merek">Merek</a></li>
                <li>
                  <a class="dropdown-item" href="halaman/layanan.php#pbh">Pembuatan Badan Hukum</a>
                </li>
              </ul>
            </li>
          </ul>

          <button class="nav-button btn ms-lg-3 mt-2 mt-lg-0">Daftar Konsultasi</button>
        </div>
      </div>
    </div>
  </nav>
  <!-- NAVBAR END -->

  <!-- START LANDING SECTION -->
  <section class="landing-section" id="landing-s">
    <header class="hero-section d-flex align-items-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 col-sm-12">
            <h1 class="display-2 fw-bold text-white mb-3">
              Mitra Hukum <br />
              Terpercaya Anda
            </h1>
            <p class="text-white-50 mb-4">
              Kami membantu individu dan pelaku usaha dalam memastikan legalitas dan entitas
              bisnis yang sesuai dengan ketentuan hukum di Indonesia.
            </p>
            <a href="#help" class="btn btn-outline-light rounded-pill btn-sm-5">
              Selengkapnya <i class="bi bi-arrow-right ms-2"></i>
              <!--button mengarah ke section how we help-->
            </a>
          </div>
        </div>
      </div>
    </header>
  </section>
  <!-- END LANDING SECTION -->

  <!-- SEJARAH SINGKAT START -->
  <section class="sejarah-singkat-section" id="sejarah-singkat-s">
    <div class="judul">
      <h2 class="title">Siapa Kami?</h2>

      <svg class="underline" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1418 125">
        <path
          d="M1412.29 72.17c-11.04-5.78-20.07-14.33-85.46-25.24-22.37-3.63-44.69-7.56-67.07-11.04-167.11-22.06-181.65-21.24-304.94-30.56C888.78 1.39 822.57 1.1 756.44 0c-46.63-.11-93.27 1.56-139.89 2.5C365.5 13.55 452.86 7.68 277.94 23.15 202.57 33.32 127.38 45.01 52.07 55.69c-11.23 2.41-22.63 4.17-33.71 7.22C6.1 66.33 5.64 66.19 3.89 67.79c-7.99 5.78-2.98 20.14 8.72 17.5 33.99-9.47 32.28-8.57 178.06-29.66 4.26 4.48 7.29 3.38 18.42 3.11 13.19-.32 26.38-.53 39.56-1.12 53.51-3.81 106.88-9.62 160.36-13.95 18.41-1.3 36.8-3.12 55.21-4.7 23.21-1.16 46.43-2.29 69.65-3.4 120.28-2.16 85.46-3.13 234.65-1.52 23.42.99 1.57-.18 125.72 6.9 96.61 8.88 200.92 27.94 295.42 46.12 40.87 7.91 116.67 23.2 156.31 36.78 3.81 1.05 8.28-.27 10.51-3.58 3.17-3.72 2.66-9.7-.78-13.13-3.25-3.12-8.14-3.44-12.18-5.08-17.89-5.85-44.19-12.09-63.67-16.56l26.16 3.28c23.02 3.13 46.28 3.92 69.34 6.75 10.8.96 25.43 1.81 34.34-4.39 2.26-1.54 4.86-2.75 6.21-5.27 2.76-4.59 1.13-11.06-3.59-13.68ZM925.4 23.77c37.64 1.4 153.99 10.85 196.64 14.94 45.95 5.51 91.89 11.03 137.76 17.19 24.25 4.77 74.13 11.21 101.72 18.14-11.87-1.15-23.77-1.97-35.65-3.06-133.46-15.9-266.8-33.02-400.47-47.21Z"
          fill="none"
          stroke="#000"
          stroke-width="20"
          stroke-linecap="butt" />
      </svg>
    </div>
    <div class="text-content">
      <p>
        Pada hakikatnya Hukum adalah fondasi utama yang menjaga ketertiban dan keadilan dalam
        masyarakat. Pentingnya hukum terletak pada kemampuannya untuk menyediakan kerangka yang
        mengatur perilaku individu dan kelompok, memastikan perlindungan hak-hak asasi manusia,
        dan menyelesaikan konflik secara adil. Tanpa hukum, masyarakat akan terjerumus ke dalam
        kekacauan dan anarki, di mana kekuatan dan kekuasaan menggantikan keadilan dan kesetaraan.
        Hukum tidak hanya melindungi kepentingan pribadi, tetapi juga menciptakan kondisi yang
        memungkinkan pertumbuhan ekonomi, sosial, dan budaya, serta mempromosikan perdamaian dan
        stabilitas dalam kehidupan sehari-hari.
      </p>

      <p>
        Untuk itu, FIXUP hadir untuk membantu masyarakat, khususnya kelas menengah, dalam
        kepengurusan Kekayaan Intelektual.
      </p>

      <p>
        Fixup merupakan usaha jasa yang bergerak dalam bidang hukum yang memastikan legalitas dan
        entitas sesuai dengan peraturan yang berlaku di Indonesia. Perusahaan ini didirikan oleh
        Adzan Fariq Darmawan, S.H. dan Arthur laksmana Wolff, S.H, kedua lulusan Universitas Bina
        Nusantara jurusan Hukum Bisnis dan berpengalaman di bidang pelayanan jasa hukum pada
        pengurusan Hak Kekayaan Intelektual.
      </p>

      <p>
        Fixup memiliki visi memberikan layanan hukum yang praktis dan solutif, menyediakan edukasi
        hukum yang mudah dipahami masyarakat Meningkatkan kesadaran hukum pelaku usaha, membangun
        tim profesional yang berdedikasi dan kompeten, dan membuat hukum lebih menyenangkan.
      </p>
    </div>
  </section>
  <!-- SEJARAH SINGKAT END -->

  <!-- TIM KAMI START -->
  <section class="tim-kami-section" id="tim-kami-s">
    <div class="title">
      <h2>Tim Kami</h2>
    </div>

    <hr />

    <div class="profil-kami px-4 text-center">
      <div class="row gx-5 align-items-stretch">
        <!-- MEMBER 1 -->
        <div class="col col-12 col-md-6 col-lg-4 d-flex mb-4">
          <a href="halaman/profil tim/member1.html">
            <div class="card tim-card p-3" data-member="member1">
              <img
                src="assets/images/member1.png"
                class="card-img-top img-fluid mx-auto d-block"
                alt="Foto Orang 1" />
              <div class="card-body">
                <span class="card-title">Adzan Fariq Darmawan, S.H.</span>
              </div>
            </div>
          </a>
        </div>
        <!-- MEMBER 2 -->
        <div class="col col-12 col-md-6 col-lg-4 d-flex mb-4">
          <a href="halaman/profil tim/member2.html">
            <div class="card tim-card p-3" data-member="member2">
              <img
                src="assets/images/member2.png"
                class="card-img-top img-fluid mx-auto d-block"
                alt="Foto Orang 2" />
              <div class="card-body">
                <span class="card-title">Arthur Laksmana Wolff, S.H.</span>
              </div>
            </div>
          </a>
        </div>
        <!-- MEMBER 3 -->
        <div class="col col-12 col-md-6 col-lg-4 d-flex mb-4">
          <a href="halaman/profil tim/member3.html">
            <div class="card tim-card p-3" data-member="member3">
              <img
                src="assets/images/member3.png"
                class="card-img-top img-fluid mx-auto d-block"
                alt="Foto Orang 3" />
              <div class="card-body">
                <span class="card-title">Fathan Nabiel, C.C.D.</span>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>
  <!-- TIM KAMI END -->

  <!-- HOW WE HELP START -->
  <section class="help py-5 my-6" id="help">
    <div class="container">
      <!-- Section Title -->
      <div class="row text-center">
        <h2 class="fw-bold fs-2">Bagaimana Kami Membantu</h2>
        <hr class="section-divider" />
      </div>

      <!-- LAYANAN -->
      <div class="layanan mt-5" id="layanan">
        <h3 class="fw-bold">Layanan</h3>
        <div class="row">
          <!-- Card 1 -->
          <div class="col-md-3">
            <a href="halaman/layanan.php">
              <div class="card bg-transparent border-0 text-center mb-3">
                <div class="card-image layanan">
                  <i class="fi fi-rr-contract text-light"></i>
                </div>
                <div class="card-body">
                  <p class="card-title">Pembuatan Kontrak</p>
                </div>
              </div>
            </a>
          </div>

          <!-- Card 2 -->
          <div class="col-md-3">
            <a href="halaman/layanan.php">
              <div class="card bg-transparent border-0 text-center mb-3">
                <div class="card-image layanan">
                  <i class="fi fi-rr-brand-badge text-light"></i>
                </div>
                <div class="card-body">
                  <p class="card-title">Pembuatan Merek</p>
                </div>
              </div>
            </a>
          </div>

          <!-- Card 3 -->
          <div class="col-md-3">
            <a href="halaman/layanan.php">
              <div class="card bg-transparent border-0 text-center mb-3">
                <div class="card-image layanan">
                  <i class="fi fi-rr-building text-light"></i>
                </div>
                <div class="card-body">
                  <p class="card-title">Pembuatan Badan Hukum</p>
                </div>
              </div>
            </a>
          </div>
        </div>
        <hr class="section-divider" />
      </div>

      <!-- TARGET MARKET -->
      <div class="target-market mt-5" id="target-market">
        <h3 class="fw-bold">Pihak yang Kami Layani</h3>
        <div class="row">
          <!-- Card 1 -->
          <div class="col-md-3">
            <a href="halaman/targetmarket.php">
              <div class="card bg-transparent border-0 text-center mb-3">
                <div class="card-image target-market">
                  <i class="fi fi-rr-shop text-light"></i>
                </div>
                <div class="card-body">
                  <p class="card-title">UMKM</p>
                </div>
              </div>
            </a>
          </div>

          <!-- Card 2 -->
          <div class="col-md-3">
            <a href="halaman/targetmarket.php">
              <div class="card bg-transparent border-0 text-center mb-3">
                <div class="card-image target-market">
                  <i class="fi fi-rr-user text-light"></i>
                </div>
                <div class="card-body">
                  <p class="card-title">Individu</p>
                </div>
              </div>
            </a>
          </div>

          <!-- Card 3 -->
          <div class="col-md-3">
            <a href="halaman/targetmarket.php">
              <div class="card bg-transparent border-0 text-center mb-3">
                <div class="card-image target-market">
                  <i class="fi fi-rr-corporate-alt text-light"></i>
                </div>
                <div class="card-body">
                  <p class="card-title">Perusahaan</p>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- HOW WE HELP END -->

  <!-- ALASAN PILIH KAMI START -->
  <section class="alasan-pilih-section" id="alasan-pilih-s">
    <div class="row">
      <!-- kiri -->
      <div class="kiri col-md-6">
        <div class="title">
          <span>
            Kenapa Memilih <br />
            Layanan Kami
          </span>
        </div>
        <div class="konten-alasan ms-0 ms-lg-2">
          <div class="alasan d-flex align-items-center gap-2 mb-3">
            <div class="icon-alasan">
              <img src="assets/icons/tim.png" alt="" />
            </div>
            <div class="text-alasan">
              <span class="title-1"> Tim Berpengalaman </span>
              <p>
                Keahlian yang dibangun dari pengalaman bertahun-tahun terhadap hukum nasional dan
                praktik terbaik.
              </p>
            </div>
          </div>
          <div class="alasan d-flex align-items-center gap-2 mb-3">
            <div class="icon-alasan">
              <img src="assets/icons/responsif.png" alt="" />
            </div>
            <div class="text-alasan">
              <span class="title-1"> Responsif dan Profesional </span>
              <p>
                Kami menjunjung tinggi komunikasi yang cepat, jelas dan profesional. Ketepatan
                waktu dan akurasi pelayanan adalah prioritas kami.
              </p>
            </div>
          </div>
        </div>
      </div>

      <!-- kanan -->
      <div class="kanan col-md-6 mt-md-5 mt-0">
        <div class="konten-alasan">
          <div class="alasan d-flex align-items-center gap-2 mb-3">
            <div class="icon-alasan">
              <img src="assets/icons/online.png" alt="" />
            </div>
            <div class="text-alasan">
              <span class="title-1"> Pengerjaan Via Online </span>
              <p>Semua pembuatan kontrak dilakukan via online, tanpa perlu datang ke kantor.</p>
            </div>
          </div>
          <div class="alasan d-flex align-items-center gap-2 mb-3">
            <div class="icon-alasan">
              <img src="assets/icons/24-hours.png" alt="" />
            </div>
            <div class="text-alasan">
              <span class="title-1"> Dapat Dihubungi Kapanpun </span>
              <p>
                Bisa menghubungi kami (via WhatsApp ataupun email) diluar jam kerja sekalipun, dan
                pesan Anda akan dilayani sesegera mungkin.
              </p>
            </div>
          </div>
          <div class="alasan d-flex align-items-center gap-2 mb-3">
            <div class="icon-alasan">
              <img src="assets/icons/efisien.png" alt="" />
            </div>
            <div class="text-alasan">
              <span class="title-1"> Layanan Yang Efisien </span>
              <p>
                Beberapa layanan yang kami berikan dirancang agar hemat waktu dan mudah diakses.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ALASAN PILIH KAMI END -->

  <!-- BLOG START -->
  <?php
  include 'db.php';
  ?>
  <section class="py-5 blog-section" id="blog">
    <div class="container">
      <div class="text-center mb-5">
        <h2 class="fw-bold">
          Lihat <span class="text-primary">Artikel</span> Kami
        </h2>
        <p class="text-muted">
          Dapatkan inspirasi, insight, dan berita terbaru dari kami.
        </p>
      </div>

      <div class="row g-4">
        <?php
        $query = "SELECT id, title, image, date_posted FROM posts ORDER BY date_posted DESC LIMIT 6";
        $result = $conn->query($query);

        if ($result && $result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
            $imagePath = !empty($row['image'])
              ? 'uploads/' . htmlspecialchars($row['image'])
              : 'uploads/default.jpg';
        ?>
            <div class="col-md-6 col-lg-4">
              <div class="card h-100 border-0 shadow-sm">
                <img src="<?php echo $imagePath; ?>" class="card-img-top" alt="Blog Image" style="height: 220px; object-fit: cover;" />
                <div class="card-body d-flex flex-column">
                  <h5 class="card-title text-dark fw-semibold"><?php echo htmlspecialchars($row["title"]); ?></h5>
                  <p class="text-muted small mb-3">📅 <?php echo date("d M Y", strtotime($row["date_posted"])); ?></p>
                  <a href="detail_blog.php?id=<?php echo $row['id']; ?>" class="btn btn-outline-primary mt-auto">Read More →</a>
                </div>
              </div>
            </div>
        <?php
          }
        } else {
          echo '<p class="text-center text-muted">Tidak ada artikel yang tersedia.</p>';
        }
        ?>
      </div>

      <!-- Tombol lihat artikel lain -->
      <div class="text-center mt-5">
        <a href="blog.php" class="btn btn-primary px-4 py-2 shadow-sm">
          Lihat Artikel Lain →
        </a>
      </div>
    </div>
  </section>


  <!-- FOOTER START -->
  <footer class="footer" id="footer">
    <div class="container">
      <div class="footer-konten row text-center text-md-start">
        <div class="footer-logo col-12 col-md-4 mb-3">
          <img src="assets/images/logo.png" class="footer-logo" alt="Logo" />
        </div>

        <div class="kontak-kami col-12 col-md-4 mb-3">
          <h5>Kontak Kami</h5>
          <ul class="list-unstyled">
            <li class="d-flex align-items-center mb-3">
              <i data-feather="map-pin" class="icon-fixed"></i>
              <span class="ms-3">
                Jl. Mampang Prapatan XV No. 50 ABCD RT 02 / RW 04, Jakarta Selatan
              </span>
            </li>
            <li class="d-flex align-items-center mb-3">
              <i data-feather="phone" class="icon-fixed"></i>
              <span class="ms-3">+62 8xxxxxxx</span>
            </li>
            <li class="d-flex align-items-center">
              <i data-feather="mail" class="icon-fixed"></i>
              <span class="ms-3">fixuplegalconsultan@gmail.com</span>
            </li>
          </ul>
        </div>

        <div class="tentang-kami col-12 col-md-4 mb-3">
          <h5>Tentang Kami</h5>
          <ul class="list-unstyled">
            <li>
              <a class="text-decoration-none" href="#sejarah-singkat-s">Sejarah Singkat</a>
            </li>
            <li>
              <a class="text-decoration-none" href="#tim-kami-s">Tim Kami</a>
            </li>
            <li>
              <a class="text-decoration-none" href="#help">Target Market</a>
            </li>
            <li>
              <a class="text-decoration-none" href="#help">Layanan</a>
            </li>
            <li>
              <a class="text-decoration-none" href="#alasan-pilih-s">Kenapa Memilih Kami</a>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <br />

    <div class="social">
      <a
        href="https://www.instagram.com/fixup.consultant?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==">
        <i data-feather="instagram"></i></a>
      <a href="https://www.linkedin.com/company/fixuplegalconsultant/">
        <i data-feather="linkedin"></i></a>
      <a href="https://maps.app.goo.gl/HqFiKvPmGF66wT9a6"> <i data-feather="map-pin"></i></a>
    </div>

    <h4 class="text-center">Konsultasi sekarang!</h4>

    <div class="motto">
      <p class="patas">Kami tidak pernah meragukan tamu</p>
      <p class="pbawah">meski permintaanya aneh-aneh.</p>
    </div>

    <div class="footer-copy">
      <div class="container py-2">
        <p class="mb-0">© 2025 Fixup | All Rights Reserved</p>
      </div>
    </div>
  </footer>
  <!-- FOOTER END -->

  <!-- Link Bootstrap -->
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
    crossorigin="anonymous"></script>

  <!-- Link Feather Icon -->
  <script>
    feather.replace();
  </script>

  <!-- Link JS -->
  <script src="assets/js/scroll-state.js"></script>
  <script src="assets/js/navbar.js"></script>
</body>

</html>