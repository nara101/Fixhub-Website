<?php
session_start();
include "db.php"; // pastikan file ini membuat $conn = new mysqli(...)

$error = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = trim($_POST['email'] ?? '');
    $password = trim($_POST['password'] ?? '');

    if ($email === '' || $password === '') {
        $error = "Email dan password harus diisi.";
    } else {
        $sql = "SELECT id, name, email, passwords, role FROM users WHERE email = ?";
        if ($stmt = $conn->prepare($sql)) {
            $stmt->bind_param("s", $email);
            if ($stmt->execute()) {
                $stmt->bind_result($id, $name, $email_db, $hashed_password, $role);
                if ($stmt->fetch()) {
                    if (!empty($hashed_password) && password_verify($password, $hashed_password)) {
                        $_SESSION['user_id'] = $id;
                        $_SESSION['user_name'] = $name;
                        $_SESSION['user_role'] = $role;
                        header("Location: dashboard.php");
                        exit;
                    } else {
                        $error = "Email atau password salah.";
                    }
                } else {
                    $error = "Email tidak ditemukan.";
                }
            } else {
                $error = "Gagal menjalankan query. Silakan coba lagi.";
            }
            $stmt->close();
        } else {
            $error = "Gagal menyiapkan query. (" . htmlspecialchars($conn->error) . ")";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Login Admin</title>
    <style>
        body {
            font-family: "Poppins", sans-serif;
            background: #3299ed;
            height: 100vh;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login-container {
            background: #fff;
            width: 380px;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
            text-align: center;
        }

        h2 {
            margin-bottom: 20px;
            color: #333;
        }

        .form-group {
            margin-bottom: 14px;
            text-align: left;
        }

        label {
            display: block;
            font-size: 14px;
            margin-bottom: 6px;
            color: #444;
        }

        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px 12px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 15px;
        }

        input[type="email"]:focus,
        input[type="password"]:focus {
            outline: none;
            box-shadow: 0 0 6px rgba(0, 123, 255, 0.2);
            border-color: #007bff;
        }

        .btn {
            width: 100%;
            background: #f2575f;
            color: #fff;
            padding: 12px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 16px;
        }

        .btn:hover {
            background: #0056b3;
        }

        .error {
            color: #c00;
            margin-top: 12px;
            font-size: 14px;
        }

        .footer {
            margin-top: 18px;
            font-size: 13px;
            color: #777;
        }

        .register-link {
            margin-top: 16px;
            font-size: 14px;
        }

        .register-link a {
            color: #007bff;
            text-decoration: none;
            font-weight: 500;
        }

        .register-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="login-container">
        <h2>Login Admin</h2>

        <form method="POST" action="">
            <div class="form-group">
                <label for="email">Email</label>
                <input id="email" type="email" name="email" placeholder="Masukkan email" required value="<?= isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '' ?>">
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input id="password" type="password" name="password" placeholder="Masukkan password" required>
            </div>

            <button type="submit" class="btn">Login</button>

            <?php if ($error): ?>
                <div class="error"><?= htmlspecialchars($error) ?></div>
            <?php endif; ?>
        </form>

        <div class="register-link">
            Belum punya akun? <a href="register.php">Daftar di sini</a>
        </div>

        <div class="footer">© <?= date('Y') ?> FixUp Company</div>
    </div>
</body>

</html>