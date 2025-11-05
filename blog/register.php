<?php
$success_message = $error_message = "";

if (isset($_POST['submit'])) {
    include "db.php";

    // Ambil data dari form
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $passwords = trim($_POST['passwords']);
    $role = $_POST['role'];

    // Validasi awal
    if ($name === "" || $email === "" || $passwords === "") {
        $error_message = "Semua kolom wajib diisi!";
    } else {
        // Cek apakah username atau email sudah terdaftar
        $check_stmt = $conn->prepare("SELECT * FROM users WHERE name = ? OR email = ?");
        $check_stmt->bind_param("ss", $name, $email);
        $check_stmt->execute();
        $check_result = $check_stmt->get_result();

        if ($check_result->num_rows > 0) {
            $row = $check_result->fetch_assoc();

            if ($row['name'] == $name) {
                $error_message = "Username sudah digunakan, silakan pilih yang lain.";
            } elseif ($row['email'] == $email) {
                $error_message = "Email sudah terdaftar, silakan gunakan email lain.";
            }
        } else {
            // Hash password
            $hashedPassword = password_hash($passwords, PASSWORD_DEFAULT);

            // Simpan user baru
            $stmt = $conn->prepare("INSERT INTO users (name, email, passwords, role) VALUES (?, ?, ?, ?)");
            $stmt->bind_param("ssss", $name, $email, $hashedPassword, $role);

            if ($stmt->execute()) {
                $success_message = "Registrasi berhasil! Silakan <a href='login.php'>login di sini</a>.";
            } else {
                $error_message = "Terjadi kesalahan: " . htmlspecialchars($conn->error);
            }

            $stmt->close();
        }

        $check_stmt->close();
        $conn->close();
    }
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi Akun</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            width: 350px;
            text-align: center;
        }

        .alert {
            padding: 12px 16px;
            margin-bottom: 20px;
            border-radius: 8px;
            font-weight: 500;
            font-size: 14px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
        }

        .alert.success {
            background-color: #e6f9ee;
            color: #1e7b34;
            border: 1px solid #bde5c8;
        }

        .alert.error {
            background-color: #fdeaea;
            color: #a33a3a;
            border: 1px solid #f5b5b5;
        }

        form {
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            width: 100%;
        }

        h2 {
            text-align: center;
            color: #007bff;
            margin-bottom: 20px;
        }

        label {
            display: block;
            text-align: left;
            margin-bottom: 6px;
            color: #333;
            font-size: 14px;
        }

        input,
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 6px;
            font-size: 14px;
        }

        input[type="submit"] {
            background: #007bff;
            color: white;
            border: none;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        input[type="submit"]:hover {
            background: #0056b3;
        }

        a {
            color: #007bff;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        .note {
            text-align: center;
            margin-top: 10px;
            font-size: 14px;
        }
    </style>
</head>

<body>
    <div class="container">
        <?php if ($success_message): ?>
            <div class="alert success"><?= $success_message ?></div>
        <?php elseif ($error_message): ?>
            <div class="alert error"><?= $error_message ?></div>
        <?php endif; ?>

        <form action="register.php" method="POST">
            <h2>Form Registrasi</h2>
            <label>Username:</label>
            <input type="text" name="name" required>

            <label>Email:</label>
            <input type="email" name="email" required>

            <label>Password:</label>
            <input type="password" name="passwords" required>

            <label>Role:</label>
            <select name="role" required>
                <option value="author">Author</option>
                <option value="admin">Admin</option>
            </select>

            <input type="submit" name="submit" value="Daftar">
            <div class="note">
                Sudah punya akun? <a href="login.php">Login di sini</a>
            </div>
        </form>
    </div>
</body>

</html>