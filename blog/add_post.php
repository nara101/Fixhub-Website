<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

include "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $category = $_POST['category']; // ✅ ambil kategori
    $content = $_POST['content'];
    $date_posted = date('Y-m-d H:i:s');
    $author_id = $_SESSION['user_id'];
    $thumbnail = "";

    // 🔹 Upload gambar thumbnail
    if (!empty($_FILES['thumbnail']['name'])) {
        $target_dir = "uploads/";
        if (!file_exists($target_dir)) {
            mkdir($target_dir, 0777, true);
        }
        $thumbnail_name = time() . "_" . basename($_FILES["thumbnail"]["name"]);
        $target_file = $target_dir . $thumbnail_name;
        move_uploaded_file($_FILES["thumbnail"]["tmp_name"], $target_file);
        $thumbnail = $thumbnail_name;
    }

    // 🔹 Simpan ke database (tambah kolom category)
    $stmt = $conn->prepare("INSERT INTO posts (title, category, content, image, date_posted, author_id) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssi", $title, $category, $content, $thumbnail, $date_posted, $author_id);
    $stmt->execute();

    header("Location: dashboard.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Tambah Postingan</title>
    <script src="https://cdn.tiny.cloud/1/zbaatpcixgnxwsmvcu6b3kwpus00urcuen5aw36t57v10sbx/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: '#content',
            plugins: 'link image lists code',
            toolbar: 'undo redo | styles | bold italic underline | alignleft aligncenter alignright | bullist numlist | image link | code',
            height: 400,
            automatic_uploads: true,
            images_upload_url: 'upload_image.php',
            file_picker_types: 'image',
            file_picker_callback: function(callback, value, meta) {
                if (meta.filetype === 'image') {
                    let input = document.createElement('input');
                    input.setAttribute('type', 'file');
                    input.setAttribute('accept', 'image/*');
                    input.onchange = function() {
                        let file = this.files[0];
                        let formData = new FormData();
                        formData.append('file', file);

                        fetch('upload_image.php', {
                                method: 'POST',
                                body: formData
                            })
                            .then(response => response.json())
                            .then(data => {
                                if (data.location) {
                                    callback(data.location, {
                                        alt: file.name
                                    });
                                } else {
                                    alert('Upload gagal: ' + (data.message || 'Unknown error'));
                                }
                            })
                            .catch(() => alert('Upload gagal!'));
                    };
                    input.click();
                }
            }
        });
    </script>

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 80%;
            margin: 40px auto;
            background: white;
            padding: 20px 30px;
            border-radius: 12px;
            box-shadow: 0 0 8px rgba(0, 0, 0, 0.1);
        }

        h2 {
            margin-bottom: 20px;
            font-weight: 600;
        }

        label {
            font-weight: 500;
            margin-top: 10px;
            display: block;
        }

        input[type=text],
        select,
        textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        input[type=file] {
            margin: 10px 0;
        }

        button {
            background: #007bff;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            transition: 0.2s;
        }

        button:hover {
            background: #0056b3;
        }

        .back {
            text-decoration: none;
            color: #007bff;
            margin-bottom: 10px;
            display: inline-block;
        }

        .preview {
            margin-top: 10px;
            max-width: 250px;
            border-radius: 8px;
            display: none;
        }
    </style>
</head>

<body>
    <div class="container">
        <a href="dashboard.php" class="back">← Kembali ke Dashboard</a>
        <h2>Tambah Postingan Baru</h2>

        <form method="POST" enctype="multipart/form-data">
            <label>Judul:</label>
            <input type="text" name="title" required>

            <!-- 🔹 Dropdown kategori -->
            <label>Kategori:</label>
            <select name="category" required>
                <option value="">-- Pilih Kategori --</option>
                <option value="Isu Hukum">Isu Hukum</option>
                <option value="Edukasi">Edukasi</option>
            </select>

            <label>Gambar Thumbnail (Header):</label>
            <input type="file" name="thumbnail" accept="image/*" onchange="previewThumbnail(event)">
            <img id="thumbPreview" class="preview" alt="Preview Thumbnail">

            <label>Isi Artikel:</label>
            <textarea id="content" name="content"></textarea>

            <button type="submit">Simpan Postingan</button>
        </form>
    </div>

    <script>
        function previewThumbnail(event) {
            const img = document.getElementById('thumbPreview');
            img.src = URL.createObjectURL(event.target.files[0]);
            img.style.display = 'block';
        }
    </script>
</body>

</html>