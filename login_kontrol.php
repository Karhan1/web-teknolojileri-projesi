<?php
// Formdan gelen verileri alıyoruz
$user = $_POST['username'];
$pass = $_POST['password'];

// Ödev kurallarına göre kullanıcı adı ve şifre kontrolü

if ($user == "B251210081@sakarya.edu.tr" && $pass == "B251210081") {
    // Başarılıysa kullanıcıya hoşgeldin diyoruz
    echo "<!DOCTYPE html>
    <html>
    <head>
        <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css' rel='stylesheet'>
        <meta charset='UTF-8'>
    </head>
    <body class='container mt-5 text-center'>
        <div class='alert alert-success'>
            <h2>Hoşgeldin $pass</h2>
            <p>Giriş işleminiz başarıyla gerçekleşti.</p>
            <a href='index.php' class='btn btn-primary'>Ana Sayfaya Dön</a>
        </div>
    </body>
    </html>";
} else {
    // Başarısızsa login sayfasına geri gönder (Javascript ile hata mesajı vererek)
    echo "<script>
            alert('Hatalı kullanıcı adı veya şifre!');
            window.location.href='login.php';
          </script>";
}
?>