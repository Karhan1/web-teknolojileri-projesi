<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>İletişim | Rana Nur Yüksel</title>
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

    <div class="container mt-5 mb-5">
        <h2 class="text-center mb-4">Bana Ulaşın</h2>
        <div class="row justify-content-center">
            <div class="col-md-7 bg-light p-4 rounded shadow-sm border">
                <form id="iletisimFormu" action="gonder.php" method="POST" onsubmit="return formuKontrolEt()">
                    
                    <div class="mb-3">
                        <label class="form-label fw-bold">Adınız Soyadınız:</label>
                        <input type="text" name="adsoyad" id="adsoyad" class="form-control" placeholder="Ad Soyad giriniz">
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold">E-posta Adresiniz:</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="ad@ornek.com">
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold">Konu:</label>
                        <select name="konu" id="konu" class="form-select">
                            <option value="">Lütfen seçiniz...</option>
                            <option value="Soru">Soru</option>
                            <option value="Öneri">Öneri / Tavsiye</option>
                            <option value="İş Birliği">İş Birliği</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold d-block">Beni nereden duydunuz?</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="kaynak" id="r1" value="GitHub">
                            <label class="form-check-label" for="r1">GitHub</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="kaynak" id="r2" value="LinkedIn">
                            <label class="form-check-label" for="r2">LinkedIn</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="kaynak" id="r3" value="Diğer">
                            <label class="form-check-label" for="r3">Diğer</label>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold">Mesajınız:</label>
                        <textarea name="mesaj" id="mesaj" class="form-control" rows="4"></textarea>
                    </div>

                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="onay" name="onay">
                        <label class="form-check-label" for="onay">Girilen verilerin doğruluğunu onaylıyorum.</label>
                    </div>

                    <div class="row g-2">
                        <div class="col-6">
                            <button type="button" onclick="formuKontrolEt()" class="btn btn-info w-100 text-white">JS ile Denetle</button>
                        </div>
                        <div class="col-6">
                            <button type="submit" class="btn btn-primary w-100">Kontrol Et ve Gönder</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
    function formuKontrolEt() {
        var ad = document.getElementById("adsoyad").value;
        var mail = document.getElementById("email").value;
        var konu = document.getElementById("konu").value;
        var onay = document.getElementById("onay").checked;

        if (ad == "" || mail == "" || konu == "") {
            alert("Lütfen isim, e-posta ve konu alanlarını doldurunuz!");
            return false;
        }
        
        if (!mail.includes("@") || !mail.includes(".")) {
            alert("Lütfen geçerli bir e-posta formatı giriniz!");
            return false;
        }

        if (!onay) {
            alert("Lütfen verilerin doğruluğunu onaylayınız!");
            return false;
        }
        
        alert("Form başarıyla doğrulandı!");
        return true;
    }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>