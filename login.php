// Halaman Login jika sudah login maka akan diarahkan ke halaman dasboard.php jika belum maka arahkan ke register.php dan buatkan tampilan login yang sederhana dengan menggunakan bootstrap 5
<?php
session_start();
include "config/koneksi.php"; 
if (isset($_SESSION['username'])) {
    header("location:dashboard.php");
} else {
    header("location:register.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mt-5">
                    <div class="card-header">
                        <h3 class="text-center">Login</h3>
                    </div>
                    <div class="card-body">
                        <form action="proses_login.php" method="POST">
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control" id="username" name="username" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
// Tambahkan style untuk mempercantik tampilan login dengan menggunakan bootstrap 5
<style>
    body {
        background-color: #f8f9fa;
    }
    .card {
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
</style>
</html>
