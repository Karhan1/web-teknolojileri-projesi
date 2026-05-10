<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Mesaj Alındı</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="alert alert-success shadow">
            <h3>Mesajınız iletildi!</h3>
            <hr>
            <p><strong>Gönderen:</strong> <?php echo $_POST['adsoyad']; ?></p>
            <p><strong>E-posta:</strong> <?php echo $_POST['email']; ?></p>
            <p><strong>Mesaj:</strong> <?php echo $_POST['mesaj']; ?></p>
            <br>
            <a href="index.php" class="btn btn-primary">Ana Sayfaya Dön</a>
        </div>
    </div>
</body>
</html>