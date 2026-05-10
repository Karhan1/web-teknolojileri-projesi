<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>İletişim | B251210081</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">B251210081</a>
            <div class="navbar-nav ms-auto">
                <a class="nav-link" href="index.php">Hakkında</a>
                <a class="nav-link" href="sehrim.php">Şehrim</a>
                <a class="nav-link active" href="iletisim.php">İletişim</a>
                <a class="nav-link" href="login.php">Login</a>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <h2 class="text-center mb-4">Bana Ulaşın</h2>
        <div class="row justify-content-center">
            <div class="col-md-6 bg-light p-4 rounded shadow-sm">
                <form id="iletisimFormu" action="gonder.php" method="POST" onsubmit="return formuKontrolEt()">
                    <div class="mb-3">
                        <label class="form-label">Ad Soyad:</label>
                        <input type="text" name="adsoyad" id="adsoyad" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">E-posta Adresi:</label>
                        <input type="email" name="email" id="email" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Mesajınız:</label>
                        <textarea name="mesaj" id="mesaj" class="form-control" rows="4"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Gönder</button>
                    <button type="reset" class="btn btn-outline-secondary w-100 mt-2">Temizle</button>
                </form>
            </div>
        </div>
    </div>

    <script>
    function formuKontrolEt() {
        var ad = document.getElementById("adsoyad").value;
        var mail = document.getElementById("email").value;
        var msg = document.getElementById("mesaj").value;

        if (ad == "" || mail == "" || msg == "") {
            alert("Lütfen tüm bilgileri doldurunuz!");
            return false;
        }
        
        if (!mail.includes("@")) {
            alert("Geçersiz giriş! E-posta adresi '@' içermelidir.");
            return false;
        }
        
        return true;
    }
    </script>
</body>
</html>