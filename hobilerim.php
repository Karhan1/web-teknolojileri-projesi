<!DOCTYPE html>

<html lang="tr">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>İlgi Alanlarım | B251210081</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

        <div class="container">

            <a class="navbar-brand" href="#">B251210081</a>

            <div class="navbar-nav ms-auto">

                <a class="nav-link" href="index.php">Hakkında</a>

                <a class="nav-link active" href="hobilerim.php">İlgi Alanlarım</a>

                <a class="nav-link" href="sehrim.php">Şehrim</a>

                <a class="nav-link" href="iletisim.php">İletişim</a>

                <a class="nav-link" href="login.php">Login</a>

            </div>

        </div>

    </nav>



    <div class="container mt-5">

        <div class="text-center mb-4">

            <h2>Hobilerim ve İlgi Alanlarım</h2>

            <hr>

        </div>



        <div class="row">

            <div class="col-md-4 mb-3">

                <div class="border p-3 text-center bg-light">

                    <h4>Karakalem</h4>

                    <p>Boş zamanlarımda karakalem portreler , manzara resimleri vb. şeyler çizmeyi severim.</p>

                </div>

            </div>

            <div class="col-md-4 mb-3">

                <div class="border p-3 text-center bg-light">

                    <h4>Yürüyüş</h4>

                    <p>Müzik dinleyerek kitap okumak yürüyüş yapmak beni rahatlatır.</p>

                </div>

            </div>

            <div class="col-md-4 mb-3">

                <div class="border p-3 text-center bg-light">

                    <h4>Yazarlık</h4>

                    <p>Düşüncelerimi , yaşanan olayları yada hayal ettiğim şeyleri şiirsel yada düz yazı halinde kağıda dokmek insanın tüm gününün yorgunluğunu alan bir etkinlik olduğu için severim.</p>

                </div>

            </div>

            <div class="col-md-4 mb-3">

                <div class="border p-3 text-center bg-light">

                    <h4>Film ve Diziler</h4>

                    <p>Özellikle asya dizileri ve ispanyol filmleri izlemeyi severim güncel filmleri merak edenler için aşağıda yer alan listeyi inceleyebilirsiniz.</p>

                </div>

            </div>

        </div>



        <div class="mt-5">

            <h3 class="text-center">İlgi Alanım: Sinema (API Verileri)</h3>

            <p class="text-center text-muted small">Bu bölümdeki bilgiler TMDB üzerinden PHP ile çekilmektedir.</p>

           

            <div class="row mt-4">

                <?php

                // API Anahtarımız ve Bağlantı Adresimiz

                $apiKey = "d014fe5b4c47c383bdd77a0e072f1943";

                $apiUrl = "https://api.themoviedb.org/3/movie/popular?api_key=$apiKey&language=tr-TR&page=1";

               

                // Veriyi internetten çekiyoruz

                $cevap = @file_get_contents($apiUrl);

               

                if($cevap) {

                    // Gelen veriyi PHP'nin anlayacağı formata çeviriyoruz

                    $veri = json_decode($cevap);

                   

                    // İlk 3 filmi listeliyoruz (Çok kalabalık olmaması için)

                    foreach(array_slice($veri->results, 0, 3) as $film) {

                        echo '

                        <div class="col-md-4 mb-4">

                            <div class="card shadow-sm">

                                <img src="https://image.tmdb.org/t/p/w500'.$film->poster_path.'" class="card-img-top">

                                <div class="card-body">

                                    <h6 class="card-title fw-bold">'.$film->title.'</h6>

                                    <p class="small">Puan: '.$film->vote_average.'</p>

                                </div>

                            </div>

                        </div>';

                    }

                } else {

                    echo '<p class="text-danger text-center">API verisi şu an alınamadı.</p>';

                }

                ?>

            </div>

        </div>

    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html> 