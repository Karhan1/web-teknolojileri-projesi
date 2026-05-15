<?php include 'includes/header.php'; ?>

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
                    <label class="form-label">Telefon:</label>
                    <input type="text" v-model="telefon" name="telefon" id="telefon" class="form-control" placeholder="Örn: 05xxxxxxxxx">
                </div>

                <div class="mb-3">
                    <label class="form-label">Konu:</label>
                    <select v-model="konu" name="konu" id="konu" class="form-select">
                        <option value="">Seçiniz...</option>
                        <option value="Destek">Destek</option>
                        <option value="Öneri">Öneri</option>
                        <option value="İş Birliği">İş Birliği</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label d-block">Cinsiyet:</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" v-model="cinsiyet" name="cinsiyet" value="Erkek">
                        <label class="form-check-label">Erkek</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" v-model="cinsiyet" name="cinsiyet" value="Kadın">
                        <label class="form-check-label">Kadın</label>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Mesajınız:</label>
                    <textarea v-model="mesaj" name="mesaj" id="mesaj" class="form-control" rows="4"></textarea>
                </div>

                <div class="mb-3 form-check">
                    <input type="checkbox" v-model="onay" name="onay" id="onay" class="form-check-input">
                    <label class="form-check-label">Bilgilerimin doğruluğunu onaylıyorum.</label>
                </div>

                <div class="row mt-4">
                    <div class="col-md-6 mb-2">
                        <button type="button" onclick="validateNative()" class="btn btn-secondary w-100">
                            Native JS ile Denetle & Gönder
                        </button>
                    </div>
                    <div class="col-md-6">
                        <button type="button" @click="formuKontrolEtVue" class="btn btn-primary w-100">
                            Vue.js ile Denetle & Gönder
                        </button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>

<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

<script>
// 1. YÖNTEM: NATIVE JAVASCRIPT DENETİMİ
function validateNative() {
    const ad = document.getElementById("adsoyad").value;
    const mail = document.getElementById("email").value;
    const tel = document.getElementById("telefon").value;
    const msm = document.getElementById("mesaj").value;
    const onayKutusu = document.getElementById("onay").checked;
    
    const mailFormat = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    const rakamKontrol = /^\d+$/;

    if (ad === "" || mail === "" || tel === "" || msm === "") {
        alert("Native JS: Lütfen tüm alanları doldurun!");
        return false;
    }
    if (!mailFormat.test(mail)) {
        alert("Native JS: Geçersiz e-posta formatı!");
        return false;
    }
    if (!rakamKontrol.test(tel.replace(/\s/g, ''))) {
        alert("Native JS: Telefon sadece rakamlardan oluşmalıdır!");
        return false;
    }
    if (!onayKutusu) {
        alert("Native JS: Lütfen onay kutusunu işaretleyin!");
        return false;
    }

    alert("Native JS Denetimi Başarılı! Form gönderiliyor...");
    document.getElementById("iletisimFormu").submit();
}

// 2. YÖNTEM: VUE.JS FRAMEWORK DENETİMİ
const { createApp } = Vue
createApp({
    data() {
        return {
            adsoyad: '', email: '', telefon: '', konu: '', cinsiyet: '', mesaj: '', onay: false
        }
    },
    methods: {
        formuKontrolEtVue() {
            if (!this.adsoyad || !this.email || !this.telefon || !this.konu || !this.cinsiyet || !this.mesaj || !this.onay) {
                alert("Vue.js: Eksik alan bıraktınız!");
                return;
            }
            if (!this.email.includes("@")) {
                alert("Vue.js: E-posta adresi @ işareti içermelidir!");
                return;
            }
            if (isNaN(this.telefon.replace(/\s/g, ''))) {
                alert("Vue.js: Telefon alanı sayısal olmalıdır!");
                return;
            }
            
            alert("Vue.js Denetimi Başarılı! Form gönderiliyor...");
            document.getElementById("iletisimFormu").submit();
        }
    }
}).mount('#app')
</script>

<?php include 'includes/footer.php'; ?>