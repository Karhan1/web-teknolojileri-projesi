<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>İletişim | Rana Nur Yüksel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">B251210081</a>
            <div class="navbar-nav ms-auto">
                <a class="nav-link" href="index.php">Hakkında</a>
                <a class="nav-link" href="sehrim.php">Şehrim</a>
                <a class="nav-link" href="hobilerim.php">İlgi Alanlarım</a>
                <a class="nav-link active" href="iletisim.php">İletişim</a>
                <a class="nav-link" href="login.php">Login</a>
            </div>
        </div>
    </nav>

    <div id="app" class="container mt-5 mb-5">
        <h2 class="text-center mb-4">Bana Ulaşın</h2>
        <div class="row justify-content-center">
            <div class="col-md-7 bg-light p-4 rounded shadow-sm border">
                <form id="iletisimFormu" action="gonder.php" method="POST">
                    <div class="mb-3">
                        <label class="form-label">Ad Soyad:</label>
                        <input type="text" v-model="adsoyad" name="adsoyad" id="adsoyad" class="form-control" placeholder="Adınızı giriniz">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">E-posta:</label>
                        <input type="email" v-model="email" name="email" id="email" class="form-control" placeholder="Örn: ad@domain.com">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Konu:</label>
                        <select v-model="konu" name="konu" id="konu" class="form-select">
                            <option value="">Seçiniz...</option>
                            <option value="Öneri">Öneri</option>
                            <option value="Şikayet">Şikayet</option>
                            <option value="İş Birliği">İş Birliği</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label d-block">Cinsiyet:</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="cinsiyet" value="Kadın" v-model="cinsiyet">
                            <label class="form-check-label">Kadın</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="cinsiyet" value="Erkek" v-model="cinsiyet">
                            <label class="form-check-label">Erkek</label>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Mesajınız:</label>
                        <textarea v-model="mesaj" name="mesaj" id="mesaj" class="form-control" rows="4"></textarea>
                    </div>

                    <div class="mb-3 form-check">
                        <input type="checkbox" v-model="onay" name="onay" id="onay" class="form-check-input">
                        <label class="form-check-label">Bilgilerin doğruluğunu onaylıyorum.</label>
                    </div>

                    <div class="row g-2">
                        <div class="col-6">
                            <button type="button" onclick="formuKontrolEtNative()" class="btn btn-info w-100 text-white">JS ile Denetle</button>
                        </div>
                        <div class="col-6">
                            <button type="button" @click="formuKontrolEtVue" class="btn btn-primary w-100">Vue.js ile Kontrol Et & Gönder</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
    function formuKontrolEtNative() {
        var ad = document.getElementById("adsoyad").value;
        var mail = document.getElementById("email").value;
        var konu = document.getElementById("konu").value;
        var onay = document.getElementById("onay").checked;

        if (ad == "" || mail == "" || konu == "") {
            alert("Native JS: Lütfen tüm alanları doldurunuz!");
            return false;
        }
        if (!mail.includes("@")) {
            alert("Native JS: Geçersiz e-posta!");
            return false;
        }
        alert("Native JS: Form doğrulandı (Sunucuya gönderilmedi).");
    }
    </script>

    <script>
    const { createApp } = Vue
    createApp({
        data() {
            return {
                adsoyad: '',
                email: '',
                konu: '',
                cinsiyet: '',
                mesaj: '',
                onay: false
            }
        },
        methods: {
            formuKontrolEtVue() {
                if (!this.adsoyad || !this.email || !this.konu || !this.onay) {
                    alert("Vue.js: Lütfen zorunlu alanları doldurun ve onay kutusunu işaretleyin!");
                    return;
                }
                if (!this.email.includes("@")) {
                    alert("Vue.js: Lütfen geçerli bir e-posta girin!");
                    return;
                }
                // Her şey tamamsa formu gönder
                alert("Vue.js: Denetim başarılı! Veriler gönderiliyor...");
                document.getElementById("iletisimFormu").submit();
            }
        }
    }).mount('#app')
    </script>
</body>
</html>