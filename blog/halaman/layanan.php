<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- adding bootstrap -->
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
    crossorigin="anonymous" />

  <!-- Link Feather Icon -->
  <script src="https://unpkg.com/feather-icons"></script>

  <!-- adding flaticon -->
  <link
    rel="stylesheet"
    href="https://cdn-uicons.flaticon.com/3.0.0/uicons-regular-rounded/css/uicons-regular-rounded.css" />
  <!-- Flaticon CDN -->
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/flaticon/5.15.0/css/flaticon.min.css" />

  <!-- adding google font -->
  <link
    href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet" />

  <!-- connecting style css  -->
  <link rel="stylesheet" href="../assets/css/style.css" />
  <link rel="stylesheet" href="../assets/css/navbar-halaman.css" />

  <title>Layanan Kami</title>
</head>

<body data-bs-spy="scroll" data-bs-target="#navbar" data-bs-offset="80" tabindex="0">
  <!-- START Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm" id="navbar">
    <div class="container-fluid">
      <!-- Brand -->
      <div class="nav-brand">
        <img class="logo" src="../assets/images/logo.png" alt="fixup-logo" />
        <p class="logo-text">Legal Consultant</p>
      </div>

      <div class="navbar-center">
        <button class="back-btn" id="btnBack">
          <a href="../index.php#layanan">
            <i data-feather="chevron-left"></i>
          </a>
        </button>
        <div class="title">
          <span>Layanan Kami</span>
        </div>
      </div>
    </div>
  </nav>
  <!-- END Navbar -->

  <!-- header -->
  <section id="header-lyn" class="header-lyn">
    <div class="container">
      <div class="row text-start header-content">
        <h2 class="display-4 fw-bold">Bagaimana Kami Membantu</h2>
        <h1 class="display-5">Layanan</h1>
      </div>
    </div>
  </section>

  <!-- layanan -->
  <main>
    <section id="how-we-help" class="how-we-help py-5 my-6">
      <div class="container-sm">
        <!-- Header Section -->
        <div class="row mb-4">
          <div class="col-12">
            <h3 class="display-4 fw-bold text-center">Bagaimana Kami Membantu</h3>
            <p>
              Fixup memberikan layanan hukum praktis dengan solusi cepat, edukasi hukum mudah
              dipahami masyarakat, dorongan kesadaran hukum bagi pelaku usaha, tim profesional
              kompeten, dan pembelajaran hukum yang menyenangkan.
            </p>
          </div>
        </div>

        <!-- Tab Section -->
        <ul class="nav nav-tabs-lyn" id="myTab" role="tablist">
          <li class="nav-item" role="presentation">
            <a
              class="nav-link-lyn active"
              id="kontrak-tab"
              data-bs-toggle="tab"
              href="#kontrak"
              role="tab"
              aria-controls="kontrak"
              aria-selected="true">Kontrak</a>
          </li>
          <li class="nav-item" role="presentation">
            <a
              class="nav-link-lyn"
              id="merek-tab"
              data-bs-toggle="tab"
              href="#merek"
              role="tab"
              aria-controls="merek"
              aria-selected="false">Merek</a>
          </li>
          <li class="nav-item" role="presentation">
            <a
              class="nav-link-lyn"
              id="pbh-tab"
              data-bs-toggle="tab"
              href="#pbh"
              role="tab"
              aria-controls="pbh"
              aria-selected="false">Pembuatan Badan Hukum</a>
          </li>
        </ul>
        <div class="tab-content mt-4" id="myTabContent">
          <div
            class="tab-pane fade show active"
            id="kontrak"
            role="tabpanel"
            aria-labelledby="kontrak-tab">
            <div class="tab-header">
              <div class="ic-lyn">
                <i class="fi fi-rr-contract text-light"></i>
              </div>
              <div class="tab-text">
                <h3>Pembuatan Kontrak</h3>
                <p>
                  Kontrak adalah perjanjian tertulis atau lisan antara dua pihak atau lebih yang
                  menciptakan kewajiban hukum untuk melakukan atau tidak melakukan sesuatu.
                </p>
                <p>
                  Layanan pembuatan kontrak yang kami tawarkan memenuhi:
                  <li>
                    Penyusunan Kontrak – memastikan isi perjanjian jelas dan sah secara hukum.
                  </li>
                  <li>Review Kontrak – menilai potensi risiko dan kelemahan dalam perjanjian.</li>
                  <li>Negosiasi Kontrak – memperkuat posisi hukum klien dalam kesepakatan.</li>
                  <li>Perlindungan Hukum – meminimalkan risiko sengketa di kemudian hari.</li>
                  <li>
                    Kepastian Kerja Sama – menjaga kelancaran hubungan bisnis maupun personal.
                  </li>
                </p>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="merek" role="tabpanel" aria-labelledby="merek-tab">
            <div class="tab-header">
              <div class="ic-lyn">
                <i class="fi fi-rr-brand-badge text-light"></i>
              </div>
              <div class="tab-text">
                <h3>Pembuatan Merek</h3>
                <p>
                  Merek adalah tanda pembeda berupa nama, logo, gambar, huruf, angka, suara, atau
                  kombinasi lainnya yang digunakan untuk membedakan barang/jasa suatu pihak dengan
                  pihak lain dalam kegiatan perdagangan.
                </p>

                <p>
                  Hak merek adalah hak eksklusif yang diberikan oleh negara kepada pemilik merek
                  terdaftar untuk:
                  <li style="color: inherit">Menggunakan sendiri mereknya</li>
                  <li>Melarang pihak lain memakai merek yang sama atau mirip</li>
                  <li>Menggugat pelanggaran</li>
                  <li>Melisensikan atau mengalihkan hak tersebut</li>
                </p>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="pbh" role="tabpanel" aria-labelledby="pbh-tab">
            <div class="tab-header">
              <div class="ic-lyn">
                <i class="fi fi-rr-building text-light"></i>
              </div>
              <div class="tab-text">
                <h3>Pembuatan Badan Hukum</h3>
                <p>
                  PT (Perseroan Terbatas) adalah badan hukum yang merupakan persekutuan modal,
                  didirikan berdasarkan perjanjian, dan melakukan kegiatan usaha dengan modal
                  dasar yang terbagi dalam saham. Pemegang saham memiliki tanggung jawab terbatas
                  hanya sebesar modal yang disetorkan.
                </p>

                <p>
                  Memiliki PT memberikan banyak keuntungan strategis bagi para pelaku usaha.
                  Pertama, PT diakui sebagai badan hukum, artinya ada pemisahan yang jelas antara
                  aset pribadi dan aset perusahaan—ini penting untuk perlindungan hukum,
                  meningkatkan kredibilitas bisnis di mata klien, mitra, maupun investor.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <!-- BOOTSTRAP -->
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
    crossorigin="anonymous"></script>

  <!-- Link Feather Icon -->
  <script>
    feather.replace();
  </script>
</body>

</html>