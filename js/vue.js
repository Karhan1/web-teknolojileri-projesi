// Native JavaScript ile kontrol
function validateNative() {
    var email = document.getElementById("email").value;
    var tel = document.getElementById("tel").value;
    if (email === "" || !email.includes("@")) { alert("Email formatı hatalı!"); return false; }
    if (isNaN(tel)) { alert("Telefon sadece rakam olmalı!"); return false; }
    alert("Native JS: Form geçerli.");
}

// Vue.js Framework ile kontrol 
const { createApp } = Vue
createApp({
    data() {
        return {
            adsoyad: '',
            email: '',
            telefon: '', // Yeni eklendi
            konu: '',
            cinsiyet: '',
            mesaj: '',
            onay: false
        }
    },
    methods: {
        formuKontrolEtVue() {
            // Tüm alanların doluluk kontrolü
            if (!this.adsoyad || !this.email || !this.telefon || !this.konu || !this.cinsiyet || !this.mesaj || !this.onay) {
                alert("Vue.js: Lütfen tüm alanları doldurun, cinsiyet seçin ve onay kutusunu işaretleyin!");
                return;
            }

            // E-posta format kontrolü
            if (!this.email.includes("@")) {
                alert("Vue.js: Lütfen geçerli bir e-posta girin!");
                return;
            }

            // Telefon sayısal kontrol (Regex: Sadece rakam)
            const sayiKontrol = /^\d+$/;
            if (!sayiKontrol.test(this.telefon)) {
                alert("Vue.js: Telefon alanı sadece rakamlardan oluşmalıdır!");
                return;
            }

            // Her şey tamamsa formu gönder
            alert("Vue.js: Denetim başarılı! Veriler gönderiliyor...");
            document.getElementById("iletisimFormu").submit();
        }
    }
}).mount('#app')