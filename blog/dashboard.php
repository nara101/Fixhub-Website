<?php
session_start();

// Jika belum login, kembalikan ke halaman login
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

include "db.php"; // sesuaikan path sesuai struktur folder kamu

// Ambil data postingan dari database
$sql = "SELECT id, title, date_posted FROM posts ORDER BY date_posted DESC";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
            margin: 0;
        }

        .navbar {
            background: #3299ed;
            color: #fff;
            padding: 15px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar .title {
            font-size: 20px;
            font-weight: bold;
        }

        .navbar a {
            color: white;
            text-decoration: none;
            margin-left: 15px;
            font-weight: 500;
        }

        .container {
            padding: 30px;
        }

        h2 {
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background: #fff;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
        }

        th,
        td {
            padding: 12px 15px;
            border-bottom: 1px solid #ddd;
            text-align: left;
        }

        th {
            background: #3299ed;
            color: white;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        .btn {
            background: #f2575f;
            color: white;
            padding: 8px 12px;
            text-decoration: none;
            border-radius: 5px;
        }

        .btn:hover {
            background: #f2575f;
        }

        .no-post {
            padding: 15px;
            background: #fff3cd;
            border: 1px solid #ffeeba;
            color: #856404;
            border-radius: 5px;
            margin-top: 20px;
        }

        .logout-btn {
            background: #f2575f;
            color: #fff;
            padding: 8px 12px;
            text-decoration: none;
            border-radius: 5px;
            margin-left: 15px;
        }

        .logout-btn:hover {
            background: #b52a37;
        }
    </style>
</head>

<body>

    <div class="navbar">
        <div class="title">Dashboard Admin</div>
        <div>
            Halo, <strong><?= htmlspecialchars($_SESSION['user_name']); ?></strong>
            <a href="add_post.php" class="btn">Tambah Post</a>
            <a href="logout.php" class="logout-btn">Logout</a>
        </div>
    </div>

    <div class="container">
        <h2>Daftar Postingan</h2>

        <?php if ($result && $result->num_rows > 0): ?>
            <table>
                <tr>
                    <th>Judul</th>
                    <th>Tanggal</th>
                    <th>Aksi</th>
                </tr>
                <?php while ($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?= htmlspecialchars($row['title']); ?></td>
                        <td><?= htmlspecialchars($row['date_posted']); ?></td>
                        <td>
                            <a href="edit_post.php?id=<?= $row['id']; ?>" class="btn">Edit</a>
                            <a href="delete_post.php?id=<?= $row['id']; ?>" class="logout-btn" onclick="return confirm('Hapus postingan ini?')">Hapus</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </table>
        <?php else: ?>
            <div class="no-post">Belum ada postingan yang dibuat.</div>
        <?php endif; ?>
    </div>

</body>

</html>