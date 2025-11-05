<?php
include "db.php"; // pastikan path-nya benar

if (isset($_GET['id'])) {
    $id = intval($_GET['id']); // amankan input

    // Hapus postingan berdasarkan ID
    $stmt = $conn->prepare("DELETE FROM posts WHERE id = ?");
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        // Setelah berhasil hapus, kembali ke dashboard admin
        header("Location: dashboard.php"); // ganti sesuai nama file dashboard kamu
        exit;
    } else {
        echo "Gagal menghapus postingan.";
    }

    $stmt->close();
}

$conn->close();
