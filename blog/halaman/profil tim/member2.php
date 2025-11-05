<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Profil Tim Kami</title>

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

  <!-- Link Feather Icon -->
  <script src="https://unpkg.com/feather-icons"></script>

  <!-- Link CSS -->
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="../../assets/css/navbar-halaman.css" />
</head>

<body>
  <!-- START Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm">
    <div class="container-fluid">
      <!-- Brand -->
      <div class="nav-brand">
        <img class="logo" src="../../assets/images/logo.png" alt="fixup-logo" />
        <p class="logo-text">Legal Consultant</p>
      </div>

      <div class="navbar-center">
        <button class="back-btn" id="btnBack">
          <a href="../../index.php#tim-kami-s">
            <i data-feather="chevron-left"></i>
          </a>
        </button>
        <div class="title">
          <span>Profil Tim Kami</span>
        </div>
      </div>
    </div>
  </nav>
  <!-- END Navbar -->

  <div class="profil-content">
    <div class="d-flex flex-column flex-md-row">
      <!-- Foto -->
      <div class="profil-left">
        <img class="img-fluid" src="../../assets/images/arthur-laksmana.png" alt="" />
      </div>

      <!-- Profil -->
      <div class="isi-profil text-wrap">
        <h2>Arthur Laksmana Wolff, S.H.</h2>

        <br />

        <p class="sub-title">Tentang</p>
        <p>
          Lulusan Universitas Bina Nusantara jurusan Hukum Bisnis. Pernah bekerja sebagai Legal
          Intern di PT. Legalku Digital Teknologi. Memiliki pengalaman karir di bidang pelayanan
          jasa hukum pada pengurusan Hak Kekayaan Intelektual, berupa hak merek terkait Pendapat
          hukum mengenai merek yang ingin didaftarkan.
        </p>

        <br />

        <div class="social">
          <a href="#"> <i data-feather="linkedin"></i></a>
        </div>
      </div>
    </div>
  </div>

  <!-- Link Bootstrap -->
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