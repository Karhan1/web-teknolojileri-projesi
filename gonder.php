<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Mesajınız Alındı</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="card shadow border-0">
            <div class="card-header bg-success text-white">
                <h3 class="mb-0">Form Gönderim Başarılı</h3>
            </div>
            <div class="card-body p-4">
                <p class="lead">Gönderilen bilgiler:</p>
                <table class="table table-striped border">
                    <tbody>
    <tr>
        <th width="30%">Ad Soyad:</th>
        <td><?php echo htmlspecialchars($_POST['adsoyad']); ?></td>
    </tr>
    <tr>
        <th>E-posta:</th>
        <td><?php echo htmlspecialchars($_POST['email']); ?></td>
    </tr>
    <tr>
        <th>Telefon:</th>
        <td><?php echo htmlspecialchars($_POST['telefon']); ?></td>
    </tr>
    <tr>
        <th>Cinsiyet:</th>
        <td><?php echo isset($_POST['cinsiyet']) ? htmlspecialchars($_POST['cinsiyet']) : 'Belirtilmedi'; ?></td>
    </tr>
    <tr>
        <th>Konu:</th>
        <td><?php echo htmlspecialchars($_POST['konu']); ?></td>
    </tr>
    <tr>
        <th>Mesaj:</th>
        <td><?php echo nl2br(htmlspecialchars($_POST['mesaj'])); ?></td>
    </tr>
    <tr>
        <th>Onay Durumu:</th>
        <td><?php echo isset($_POST['onay']) ? 'Onaylandı ' : 'Onaylanmadı '; ?></td>
    </tr>
</tbody>
                </table>
                <div class="text-center mt-4">
                    <a href="index.php" class="btn btn-outline-success">Ana Sayfaya Dön</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>