<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Giriş Yap | Kdz. Ereğli</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">B251210081</a>
            <div class="navbar-nav ms-auto">
                <a class="nav-link" href="index.php">Hakkında</a>
                <a class="nav-link active" href="login.php">Login</a>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card shadow">
                    <div class="card-header bg-primary text-white text-center">
                        <h4>Sisteme Giriş</h4>
                    </div>
                    <div class="card-body">
                        <form action="login_kontrol.php" method="POST">
                            <div class="mb-3">
                                <label class="form-label">Kullanıcı Adı (E-posta):</label>
                                <input type="text" name="username" class="form-control" placeholder="B251210081@sakarya.edu.tr" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Şifre:</label>
                                <input type="password" name="password" class="form-control" required>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Giriş Yap</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>