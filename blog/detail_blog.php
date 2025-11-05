<?php
include 'db.php';

if (!isset($_GET['id']) || empty($_GET['id'])) {
    echo "Artikel tidak ditemukan.";
    exit;
}

$id = $_GET['id'];

// Ambil data artikel berdasarkan ID
$query = "
    SELECT 
        posts.id, 
        posts.title, 
        posts.image, 
        posts.content, 
        posts.date_posted, 
        users.name AS author_name, 
        categories.name AS category_name
    FROM posts
    LEFT JOIN users ON posts.author_id = users.id
    LEFT JOIN categories ON posts.category_id = categories.id
    WHERE posts.id = ?
";

$stmt = $conn->prepare($query);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$post = $result->fetch_assoc();

if (!$post) {
    echo "Artikel tidak ditemukan.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($post['title']); ?> - Detail Artikel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
        }

        .article-container {
            max-width: 850px;
            margin: 50px auto;
            background: #fff;
            border-radius: 12px;
            padding: 30px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
        }

        .article-image {
            width: 100%;
            height: 400px;
            object-fit: cover;
            border-radius: 12px;
            margin-bottom: 25px;
        }

        .article-meta {
            color: #6c757d;
            font-size: 0.95rem;
        }

        .content {
            font-size: 1rem;
            line-height: 1.8;
            color: #343a40;
        }

        .content img {
            max-width: 100%;
            border-radius: 8px;
            margin: 20px 0;
        }
    </style>
</head>

<body>

    <div class="container article-container">
        <img src="uploads/<?= htmlspecialchars($post['image']); ?>" alt="Gambar Artikel" class="article-image">

        <h2 class="fw-bold"><?= htmlspecialchars($post['title']); ?></h2>
        <p class="article-meta mb-3">
            🧑 Penulis: <?= htmlspecialchars($post['author_name'] ?? 'Admin'); ?> |
            📅 <?= date("d M Y", strtotime($post['date_posted'])); ?> |
            🏷️ <?= htmlspecialchars($post['category_name'] ?? 'Umum'); ?>
        </p>

        <!-- Bagian ini sudah diperbaiki -->
        <div class="content">
            <?= html_entity_decode($post['content']); ?>
        </div>
        <!-- Akhir perbaikan -->

        <div class="mt-4">
            <a href="blog.php" class="btn btn-outline-primary">← Kembali ke Blog</a>
        </div>
    </div>

</body>

</html>