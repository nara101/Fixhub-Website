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

  <!-- adding google font -->
  <link
    href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet" />

  <!-- connecting style css  -->
  <link rel="stylesheet" href="../assets/css/style.css" />
  <link rel="stylesheet" href="../assets/css/navbar-halaman.css" />

  <title>Pihak Yang Kami Layani</title>
</head>

<body>
  <!-- START Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm">
    <div class="container-fluid">
      <!-- Brand -->
      <div class="nav-brand">
        <img class="logo" src="../assets/images/logo.png" alt="fixup-logo" />
        <p class="logo-text">Legal Consultant</p>
      </div>

      <div class="navbar-center">
        <button class="back-btn" id="btnBack">
          <a href="../index.php#target-market">
            <i data-feather="chevron-left"></i>
          </a>
        </button>
        <div class="title">
          <span>Pihak Yang Kami Layani</span>
        </div>
      </div>
    </div>
  </nav>
  <!-- END Navbar -->

  <!-- header -->
  <section id="header-tm" class="header-tm">
    <div class="container">
      <div class="row text-start header-content">
        <h2 class="display-4 fw-bold">Bagaimana Kami Membantu</h2>
        <h1 class="display-5">Pihak yang Kami Layani</h1>
      </div>
    </div>
  </section>

  <!-- Target Market -->
  <main>
    <section id="how-we-help" class="how-we-help py-5 my-6">
      <div class="container-sm">
        <!-- Header Section -->
        <div class="row mb-4">
          <div class="col-12">
            <h3 class="display-4 fw-bold text-center">Bagaimana Kami Membantu</h3>
            <p>
              Kami membantu pelaku usaha dan individu dalam memastikan legalitas serta pembentukan
              entitas bisnis yang sesuai dengan peraturan yang berlaku di Indonesia. Kami
              memberikan layanan hukum bagi:
            </p>
          </div>
        </div>

        <!-- Tab Section -->
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item" role="presentation">
            <a
              class="nav-link active"
              id="umkm-tab"
              data-bs-toggle="tab"
              href="#umkm"
              role="tab"
              aria-controls="umkm"
              aria-selected="true">UMKM</a>
          </li>
          <li class="nav-item" role="presentation">
            <a
              class="nav-link"
              id="individu-tab"
              data-bs-toggle="tab"
              href="#individu"
              role="tab"
              aria-controls="individu"
              aria-selected="false">Individu</a>
          </li>
          <li class="nav-item" role="presentation">
            <a
              class="nav-link"
              id="perusahaan-tab"
              data-bs-toggle="tab"
              href="#perusahaan"
              role="tab"
              aria-controls="perusahaan"
              aria-selected="false">Perusahaan</a>
          </li>
        </ul>
        <div class="tab-content mt-4" id="myTabContent">
          <div
            class="tab-pane fade show active"
            id="umkm"
            role="tabpanel"
            aria-labelledby="umkm-tab">
            <div class="tab-header">
              <div class="ic-tm">
                <i class="fi fi-rr-shop text-light"></i>
              </div>
              <div class="tab-text">
                <h3>UMKM</h3>
                <!-- Isi paragraf belum fix (masih ragu-ragu)-->
                <p>
                  UMKM adalah tulang punggung perekonomian Indonesia dan menjadi motor penggerak
                  pertumbuhan di berbagai sektor. Namun, di balik potensinya yang besar, banyak
                  pelaku UMKM menghadapi tantangan dalam memastikan usaha mereka berjalan sesuai
                  dengan aturan hukum yang berlaku.
                </p>

                <p>
                  Tidak jarang, keterbatasan informasi dan sumber daya membuat UMKM kesulitan
                  dalam mengurus legalitas usaha, menyusun perjanjian kerja sama yang aman, atau
                  bahkan mengakses pendanaan dari lembaga keuangan karena belum memiliki status
                  hukum yang jelas. Hal ini sering kali menghambat perkembangan dan peluang bisnis
                  yang sebenarnya bisa lebih luas.
                </p>

                <p>
                  Kami hadir untuk memberikan solusi bagi UMKM, mulai dari pendirian badan usaha,
                  penyusunan kontrak bisnis, pendaftaran izin, hingga layanan konsultasi hukum
                  yang disesuaikan dengan kebutuhan. Dengan pendampingan hukum yang tepat, UMKM
                  dapat lebih percaya diri dalam menjalankan bisnis, melindungi aset, sekaligus
                  membuka peluang ekspansi usaha.
                </p>

                <p>
                  Jangan biarkan kendala hukum menghambat pertumbuhan usaha Anda. Hubungi kami
                  untuk mendapatkan layanan hukum terpercaya yang akan mendukung UMKM berkembang
                  lebih maju dan berkelanjutan.
                </p>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="individu" role="tabpanel" aria-labelledby="individu-tab">
            <div class="tab-header">
              <div class="ic-tm">
                <i class="fi fi-rr-user text-light"></i>
              </div>
              <div class="tab-text">
                <h3>Individu</h3>
                <!-- Isi paragraf belum fix (masih ragu-ragu)-->
                <p>
                  Persoalan hukum bukan hanya dialami oleh perusahaan, tetapi juga dapat terjadi
                  pada setiap individu. Mulai dari perjanjian sewa-menyewa, masalah warisan,
                  perjanjian kerja, hingga sengketa perdata, semua membutuhkan pemahaman hukum
                  yang benar agar tidak menimbulkan kerugian di kemudian hari.
                </p>

                <p>
                  Sayangnya, banyak orang yang kurang menyadari pentingnya perlindungan hukum
                  hingga masalah terjadi. Padahal, pendampingan sejak awal dapat memberikan rasa
                  aman sekaligus memastikan setiap langkah sesuai dengan ketentuan hukum.
                </p>

                <p>
                  Kami menyediakan layanan hukum yang dirancang khusus untuk individu, seperti
                  konsultasi hukum, pembuatan dan peninjauan perjanjian, hingga penyelesaian
                  sengketa. Dengan pengalaman dan keahlian yang kami miliki, kami siap membantu
                  Anda memahami hak-hak hukum serta melindungi kepentingan pribadi Anda.
                </p>

                <p>
                  Jangan biarkan persoalan hukum mengganggu kehidupan Anda. Hubungi kami untuk
                  mendapatkan solusi hukum yang tepat dan terpercaya.
                </p>
              </div>
            </div>
          </div>
          <div
            class="tab-pane fade"
            id="perusahaan"
            role="tabpanel"
            aria-labelledby="perusahaan-tab">
            <div class="tab-header">
              <div class="ic-tm">
                <i class="fi fi-rr-corporate-alt text-light"></i>
              </div>
              <div class="tab-text">
                <h3>Perusahaan</h3>
                <!-- Isi paragraf belum fix (masih ragu-ragu)-->
                <p>
                  Setiap perusahaan membutuhkan kepastian hukum untuk menjaga keberlangsungan
                  bisnis dan membangun kepercayaan dengan mitra maupun klien. Dalam praktiknya,
                  perusahaan sering menghadapi berbagai tantangan hukum, mulai dari kepatuhan
                  terhadap regulasi, penyusunan kontrak bisnis, hubungan ketenagakerjaan, hingga
                  penyelesaian sengketa komersial.
                </p>

                <p>
                  Tanpa pendampingan yang tepat, masalah hukum dapat menimbulkan kerugian
                  finansial, menghambat operasional, bahkan merusak reputasi perusahaan.
                </p>

                <p>
                  Kami menyediakan layanan hukum yang dirancang khusus untuk mendukung kebutuhan
                  perusahaan, mencakup pendirian badan usaha, review dan penyusunan kontrak,
                  konsultasi kepatuhan regulasi, hingga representasi dalam penyelesaian sengketa.
                  Dengan keahlian kami, perusahaan Anda dapat berfokus pada pertumbuhan bisnis
                  yang berkelanjutan tanpa khawatir akan risiko hukum.
                </p>

                <p>
                  Hubungi kami untuk menjadikan kami mitra hukum terpercaya yang akan mendampingi
                  perjalanan bisnis Anda.
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