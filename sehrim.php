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
                <a class="nav-link" href="hobilerim.php">İlgi Alanlarım</a>
                <a class="nav-link" href="iletisim.php">İletişim</a>
                <a class="nav-link" href="login.php">Login</a>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <header class="text-center mb-5">
            <h1>Şehrim: Karadeniz Ereğli</h1>
            <p class="text-muted">Tarihin ve Doğanın Buluştuğu Nokta</p>
        </header>

        <div id="sehirSlider" class="carousel slide shadow rounded overflow-hidden mb-5" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="img/sehir1.jpg" class="d-block w-100" alt="Slider 1" style="height: 400px; object-fit: cover;">
        </div>
        <div class="carousel-item">
            <img src="img/sehir2.jpg" class="d-block w-100" alt="Slider 2" style="height: 400px; object-fit: cover;">
        </div>
        <div class="carousel-item">
            <img src="img/sehir3.jpg" class="d-block w-100" alt="Slider 3" style="height: 400px; object-fit: cover;">
        </div>
        <div class="carousel-item">
            <img src="img/sehir4.jpg" class="d-block w-100" alt="Slider 4" style="height: 400px; object-fit: cover;">
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
            <article class="col-md-6 mb-4">
                <h3 class="text-primary">Ereğli Hakkında Bilgiler</h3>
                <hr>
                <p><strong>Nüfus:</strong> 158.010</p>
                <p><strong>Ünlü Yemekleri:</strong> Zılbıt, kır pidesi ve kara lahana sarması en sevilen lezzetleridir. Ayrıca meşhur Osmanlı Çileği bu bölgede yetişir.</p>
            </article>

            <article class="col-md-6">
                <h3 class="text-primary">Tarihçesi</h3>
                <hr>
                <p>Antik çağlardan bugüne uzanan köklü bir geçmişe sahip olan Karadeniz Ereğli, efsanevi bir liman kentidir. 1829 yılında kömürün keşfiyle sanayi kenti olmuş, Erdemir fabrikasıyla da Türkiye'nin en önemli yerlerinden biri haline gelmiştir.</p>
                
                <div class="mt-4">
                    <p class="fw-bold">Şehri Keşfet:</p>
                    <a href="mirasimiz.php" class="btn btn-primary me-2">Mirasımız</a>
                    
                </div>
            </article>
        </section>
        
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>