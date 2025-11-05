<?php
session_start();
include "db.php";

// Pastikan user login
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

// Pastikan hanya author yang bisa tambah post
if ($_SESSION['user_role'] != "author") {
    header("Location: dashboard.php");
    exit;
}

// Ambil semua kategori
$categories = [];
$sql = "SELECT * FROM categories";
$result = mysqli_query($conn, $sql);

if ($result && mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $categories[] = $row;
    }
}

// Proses form jika dikirim
if (isset($_POST['submit'])) {
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $content = mysqli_real_escape_string($conn, $_POST['content']); // ubah dari 'context' ke 'content'
    $category_id = $_POST['category'];
    $author_id = $_SESSION['user_id'];

    // Cek apakah ada file yang diupload
    $image_name = null;
    if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        $image_name = time() . "_" . basename($_FILES['image']['name']);
        $target_path = "uploads/" . $image_name;

        // Pastikan folder uploads/ ada
        if (!file_exists("uploads")) {
            mkdir("uploads", 0777, true);
        }

        move_uploaded_file($_FILES['image']['tmp_name'], $target_path);
    }

    // Masukkan ke database (ubah 'context' → 'content')
    $insert_sql = "INSERT INTO posts (title, content, category_id, author_id, image)
                   VALUES ('$title', '$content', '$category_id', '$author_id', '$image_name')";

    if (mysqli_query($conn, $insert_sql)) {
        echo "<script>alert('✅ Post berhasil ditambahkan!'); window.location.href='insertpost.php';</script>";
    } else {
        echo "❌ Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Post</title>
</head>

<body>
    <h2>Tambah Post Baru</h2>

    <form action="insertpost.php" method="post" enctype="multipart/form-data">
        <label>Judul:</label><br>
        <input type="text" name="title" placeholder="Judul post" required><br><br>

        <label>Isi Post:</label><br>
        <textarea name="content" placeholder="Tulis isi post..." rows="6" cols="50" required></textarea><br><br>

        <label>Kategori:</label><br>
        <select name="category" id="category" required>
            <option value="">-- Pilih Kategori --</option>
            <?php foreach ($categories as $cat): ?>
                <option value="<?= $cat['id'] ?>"><?= htmlspecialchars($cat['name']) ?></option>
            <?php endforeach; ?>
        </select><br><br>

        <label>Upload Gambar (opsional):</label><br>
        <input type="file" name="image" accept="image/*"><br><br>

        <input type="submit" name="submit" value="Upload Post">
    </form>
</body>

</html>