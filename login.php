<?php include 'includes/header.php'; ?>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card shadow">
                    <div class="card-header bg-primary text-white text-center">
                        <h4>Sisteme Giriş</h4>
                    </div>
                    <div class="card-body">
                        <form action="login_kontrol.php" method="POST" onsubmit="return loginKontrol()">
                            <div class="mb-3">
                                <label class="form-label">Kullanıcı Adı (E-posta):</label>
                                <input type="text" name="username" class="form-control" placeholder="öğrencinumaran@sakarya.edu.tr" required>
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
    <script>
function loginKontrol() {
    // Formdaki değerleri alıyoruz
    var email = document.getElementsByName("username")[0].value;
    var sifre = document.getElementsByName("password")[0].value;

    // 1. Boş alan kontrolü
    if (email.trim() === "" || sifre.trim() === "") {
        alert("Kullanıcı adı ve şifre alanları boş bırakılamaz!");
        return false; // Formun gönderilmesini engeller
    }

    // 2. Mail formatı kontrolü (@sakarya.edu.tr ile mi bitiyor?)
    // endsWith metodu ile istenen formatı denetliyoruz
    if (!email.toLowerCase().endsWith("@sakarya.edu.tr")) {
        alert("Lütfen geçerli bir Sakarya Üniversitesi mail adresi giriniz!\nÖrn: b2412100001@sakarya.edu.tr");
        return false;
    }

    // Her şey doğruysa form gönderilir
    return true;
}
</script>
</body>
</html>