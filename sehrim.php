<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Şehrim | Karadeniz Ereğli</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">B251210081</a>
            <div class="navbar-nav ms-auto">
                <a class="nav-link" href="index.php">Hakkında</a>
                <a class="nav-link" href="ozgecmis.php">Özgeçmiş</a>
                <a class="nav-link active" href="sehrim.php">Şehrim</a>
                <a class="nav-link" href="iletisim.php">İletişim</a>
                <a class="nav-link" href="login.php">Login</a>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <header class="text-center mb-5">
            <h1>Şehrim: Karadeniz Ereğli</h1>
            <p class="lead text-muted">Tarihin, Sanayinin ve Doğanın Buluştuğu Nokta</p>
        </header>

        
        <div id="sehirSlider" class="carousel slide shadow-lg rounded overflow-hidden mb-5" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#sehirSlider" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#sehirSlider" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#sehirSlider" data-bs-slide-to="2"></button>
                <button type="button" data-bs-target="#sehirSlider" data-bs-slide-to="3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/sehir1.jpg" class="d-block w-100" alt="Gazi Alemdar Gemisi" style="height: 500px; object-fit: cover;">
                    <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded p-2">
                        <h5>Gazi Alemdar Gemisi</h5>
                        <p>Kurtuluş Savaşı'nın tek deniz çatışmasının kahramanı ve tarihi bir miras.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/sehir2.jpg" class="d-block w-100" alt="Cehennemağzı Mağaraları" style="height: 500px; object-fit: cover;">
                    <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded p-2">
                        <h5>Cehennemağzı Mağaraları</h5>
                        <p>Tarihin ve mitolojinin bir araya geldiği nefes kesici büyülü bir mekan.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/sehir3.jpg" class="d-block w-100" alt="Ereğli Kalesi" style="height: 500px; object-fit: cover;">
                    <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded p-2">
                        <h5>Ereğli Kalesi</h5>
                        <p>Şehrin tarihi dokusunu yansıtan ve eşsiz manzara sunan kale.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/sehir4.jpg" class="d-block w-100" alt="Ereğli Sahili" style="height: 500px; object-fit: cover;">
                    <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded p-2">
                        <h5>Ereğli Sahili</h5>
                        <p>Deniz manzarası ile insanı büyüleyen sakin bir sahil.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#sehirSlider" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#sehirSlider" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>

        <section class="row mb-5">
            <article class="col-md-6 border-end">
                <h3>KDZ Ereğli ile İlgili Bilgiler</h3>
                <p><strong>Nüfus:</strong> 158.010</p>
                <p><strong>Ünlü Yemekleri:</strong> Zılbıt, kır pidesi ve kara lahana sarması en iddialı lezzetleri arasındadır. Bunun haricinde endemik Osmanlı çileği tarımı bu bölgede yoğundur ve şehrin bir simgesi haline gelmiştir.</p>
            </article>
            <article class="col-md-6 ps-md-4">
                <h3>Tarihçesi</h3>
                <p style="text-align: justify;">Antik çağlardan bugüne uzanan köklü bir geçmişe sahip olan Karadeniz Ereğli, M.Ö. 550 civarında Megaralı kolonistler tarafından "Herakleia Pontike" adıyla kurulmuş efsanevi bir liman kentidir. Ereğli’nin kaderi, 1829 yılında kömürün keşfiyle modern bir sanayi merkezine dönüşmüş, Cumhuriyet döneminde ise 1965 yılında kurulan Erdemir fabrikasıyla Türkiye'nin ağır sanayi lokomotifi haline gelmiştir.</p>
            </article>
        </section>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>