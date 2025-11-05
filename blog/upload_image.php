<?php
session_start();

$targetDir = "../uploads/";

if (!is_dir($targetDir)) {
    mkdir($targetDir, 0777, true);
}

// Cek apakah file dikirim dari TinyMCE (nama field: 'file')
if (isset($_FILES['file']['name'])) {
    $fileName = basename($_FILES['file']['name']);
    $targetFilePath = $targetDir . $fileName;
    $fileType = strtolower(pathinfo($targetFilePath, PATHINFO_EXTENSION));

    $allowedTypes = ['jpg', 'jpeg', 'png', 'gif'];

    if (in_array($fileType, $allowedTypes)) {
        if (move_uploaded_file($_FILES['file']['tmp_name'], $targetFilePath)) {
            // TinyMCE butuh key 'location' dalam JSON
            echo json_encode([
                "location" => $targetFilePath
            ]);
        } else {
            echo json_encode([
                "status" => "error",
                "message" => "Gagal memindahkan file"
            ]);
        }
    } else {
        echo json_encode([
            "status" => "error",
            "message" => "Tipe file tidak diizinkan"
        ]);
    }
} else {
    echo json_encode([
        "status" => "error",
        "message" => "Tidak ada file yang dikirim"
    ]);
}
