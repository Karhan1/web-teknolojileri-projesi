<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Şehrim | Web Projesi</title>
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
            <p class="lead">Gezilecek Yerler ve Şehir Bilgileri</p>
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
                    <img src="img/sehir1.jpg" class="d-block w-100" alt="Şehir Görsel 1" style="height: 500px; object-fit: cover;">
                    <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50">
                        <h5>Gazi Alemdar Gemisi</h5>
                        <p>Burası şehrin en meşhur noktalarından biridir.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/sehir2.jpg" class="d-block w-100" alt="Şehir Görsel 2" style="height: 500px; object-fit: cover;">
                    <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50">
                        <h5>Cehennemağzı Mağaraları</h5>
                        <p>Tarihi dokusuyla büyüleyen bir mekan.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/sehir3.jpg" class="d-block w-100" alt="Şehir Görsel 3" style="height: 500px; object-fit: cover;">
                    <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50">
                        <h5>Ereğli Kalesi</h5>
                        <p>Şehrin tarihi dokusunu yansıtan bir kale.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/sehir4.jpg" class="d-block w-100" alt="Şehir Görsel 4" style="height: 500px; object-fit: cover;">
                    <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50">
                        <h5>Ereğli Sahili</h5>
                        <p>Doğanın ve tarımın buluştuğu bir bölge.</p>
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

        <section class="row">
            <div class="col-md-6">
                <h3>KDZ Ereğli ile ilgili Bilgiler</h3>
                <p><strong>Nüfus:</strong> 158.010</p>
                <p><strong>Ünlü Yemekleri:</strong> zılnıt , kır pidesi , kara lahana sarması en iddalı yemekleri arasındadır . bunun harici endemik osmanlı çileği tarımı en çokk bölgedir ve artık şehrin bir simgesi haline gelmiştir.</p>
            </div>
            <div class="col-md-6">
                <h3> Tarihçesi :</h3>
                <p>Antik çağlardan bugüne uzanan köklü bir geçmişe sahip olan Karadeniz Ereğli, M.Ö. 550 civarında Megaralı kolonistler tarafından "Herakleia Pontike" adıyla kurulmuş, adını mitolojik kahraman Herakles’ten alan efsanevi bir liman kentidir. Hititlerden Friglere, Roma'dan Bizans'a kadar pek çok medeniyetin izlerini taşıyan şehir, özellikle Hristiyanlığın ilk yayıldığı yerlerden biri olan Cehennemağzı Mağaraları gibi eşsiz tarihi miraslara ev sahipliği yapmaktadır. 1337 yılında Osmanlı topraklarına katılarak Türk-İslam kimliğini kazanan bölge, yüzyıllarca stratejik bir deniz üssü ve ticaret merkezi olarak önemini korumuştur.Ereğli’nin kaderi, 1829 yılında kömürün keşfiyle birlikte modern bir sanayi merkezine dönüşmüş, Cumhuriyet döneminde ise 1965 yılında kurulan devasa Erdemir fabrikasıyla Türkiye'nin ağır sanayi lokomotifi haline gelmiştir. Günümüzde hem bu devasa endüstriyel gücü hem de yemyeşil doğası ve masmavi deniziyle Karadeniz’in parlayan yıldızı olan şehir; tarihin, emeğin ve doğanın iç içe geçtiği çok özel bir mozaik sunmaktadır.</p>
            </div>
        </section>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>