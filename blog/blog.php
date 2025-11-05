<?php
session_start();
include "db.php"; // pastikan $conn aktif

// --- FILTER PENCARIAN & KATEGORI ---
$where = [];
$params = [];

if (!empty($_GET['category'])) {
    $where[] = "category = ?";
    $params[] = $_GET['category'];
}

if (!empty($_GET['q'])) {
    $where[] = "(title LIKE ? OR content LIKE ?)";
    $q = '%' . $_GET['q'] . '%';
    $params[] = $q;
    $params[] = $q;
}

// --- QUERY ARTIKEL ---
$sql = "SELECT id, title, content, image, category, date_posted 
        FROM posts";

if ($where) {
    $sql .= " WHERE " . implode(" AND ", $where);
}

$sql .= " ORDER BY date_posted DESC";

$stmt = $conn->prepare($sql);
if ($params) {
    $types = str_repeat('s', count($params));
    $stmt->bind_param($types, ...$params);
}
$stmt->execute();
$result = $stmt->get_result();
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>FixUp Blog</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style-footer.css" />
</head>

<body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top">
        <div class="container">
            <a class="navbar-brand fw-bold text-primary" href="index.php">
                <img src="assets/images/logo.png" alt="FixUp Logo"
                    style="height:40px; display:inline-block; vertical-align:middle;">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNav" aria-controls="navbarNav"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item">
                        <a class="nav-link <?= empty($_GET['category']) ? 'active' : '' ?>" href="index.php">Beranda</a>
                    </li>

                    <!-- Dropdown kategori -->
                    <li class="nav-item dropdown me-3">
                        <a class="nav-link dropdown-toggle <?= !empty($_GET['category']) ? 'active' : '' ?>"
                            href="#" id="categoriesDropdown" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">Kategori</a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="categoriesDropdown">
                            <li><a class="dropdown-item" href="?category=Isu Hukum">Isu Hukum</a></li>
                            <li><a class="dropdown-item" href="?category=Edukasi">Edukasi</a></li>
                        </ul>
                    </li>

                    <!-- Pencarian -->
                    <li class="nav-item">
                        <form class="d-flex" method="GET" action="">
                            <input class="form-control me-2" type="search" name="q"
                                placeholder="Cari artikel..."
                                value="<?= isset($_GET['q']) ? htmlspecialchars($_GET['q']) : '' ?>">
                            <button class="btn btn-outline-primary" type="submit">Cari</button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- KONTEN ARTIKEL -->
    <div class="container my-5">
        <h2 class="fw-bold mb-4 text-center">
            <?= isset($_GET['category']) ? htmlspecialchars($_GET['category']) : 'Artikel Terbaru' ?>
        </h2>

        <div class="row">
            <?php if ($result && $result->num_rows > 0): ?>
                <?php while ($row = $result->fetch_assoc()): ?>
                    <?php
                    $img = !empty($row['image']) && file_exists("uploads/" . $row['image'])
                        ? "uploads/" . htmlspecialchars($row['image'])
                        : "uploads/default.jpg";
                    ?>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card shadow-sm border-0 h-100" style="max-width: 100%; font-size: 0.9rem;">
                            <img src="<?= $img ?>" class="card-img-top" alt="<?= htmlspecialchars($row['title']) ?>"
                                style="height: 180px; object-fit: cover;">
                            <div class="card-body">
                                <h6 class="card-title fw-semibold" style="font-size: 1rem;">
                                    <?= htmlspecialchars($row['title']) ?>
                                </h6>
                                <p class="card-text text-muted small mb-2">
                                    Kategori: <?= htmlspecialchars($row['category']) ?> |
                                    <?= date("d M Y", strtotime($row['date_posted'])) ?>
                                </p>
                                <p class="card-text">
                                    <?= htmlspecialchars(substr(strip_tags($row['content']), 0, 80)) ?>...
                                </p>
                                <a href="detail_blog.php?id=<?= $row['id'] ?>" class="btn btn-primary btn-sm">
                                    Baca Selengkapnya
                                </a>
                            </div>
                        </div>
                    </div>

                <?php endwhile; ?>
            <?php else: ?>
                <div class="col-12 text-center text-muted">Belum ada artikel ditemukan.</div>
            <?php endif; ?>
        </div>
    </div>

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
                            <a class="text-decoration-none" href="index.php">Sejarah Singkat</a>
                        </li>
                        <li>
                            <a class="text-decoration-none" href="index.php#tim-kami-s">Tim Kami</a>
                        </li>
                        <li>
                            <a class="text-decoration-none" href="index.php#help">Target Market</a>
                        </li>
                        <li>
                            <a class="text-decoration-none" href="index.php#help">Layanan</a>
                        </li>
                        <li>
                            <a class="text-decoration-none" href="index.php#alasan-pilih-s">Kenapa Memilih Kami</a>
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

    <!-- JS Bootstrap -->
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>

    <!-- Inisialisasi Dropdown -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const dropdownTrigger = document.querySelectorAll('.dropdown-toggle');
            dropdownTrigger.forEach(el => new bootstrap.Dropdown(el));
        });
    </script>
    <script src="https://unpkg.com/feather-icons"></script>
    <script>
        feather.replace();
    </script>

</body>

</html>