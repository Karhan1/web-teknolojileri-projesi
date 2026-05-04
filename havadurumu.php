<div class="container mt-5">

    <header class="text-center mb-5">
        <h1 class="fw-bold text-info">Ereğlinin Hava Durumu</h1>
        <p>Güncel verileri göstermektedir.</p>
    </header>

    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card shadow border-0 bg-dark text-white p-4">
                <div class="card-body">  <!-- ✅ Düzeltildi -->

                    <h3 class="mb-3">Zonguldak / Ereğli</h3>

                    <?php
                    $apiKey = getenv('WEATHER_API_KEY') ?: 'BURAYA_API_KEY';
                    $city   = "Eregli";
                    $apiUrl = "https://api.openweathermap.org/data/2.5/weather?q="
                            . urlencode($city)
                            . "&appid=$apiKey&units=metric&lang=tr";

                    $response = file_get_contents($apiUrl);

                    if ($response !== false) {
                        $data = json_decode($response);
                        $temp = round($data->main->temp);
                        $desc = htmlspecialchars($data->weather[0]->description);
                        $icon = htmlspecialchars($data->weather[0]->icon);

                        echo "<img src='https://openweathermap.org/img/wn/{$icon}@2x.png' 
                                   style='width:100px;' alt='Hava durumu ikonu'>";
                        echo "<h2 class='display-2 fw-bold'>{$temp}°C</h2>";
                        echo "<p class='fs-4 text-warning text-capitalize'>{$desc}</p>";
                    } else {
                        echo "<p class='text-danger'>Bağlantı sorunu var.</p>";
                    }
                    ?>

                </div>
            </div>

            <p class="text-center mt-3 text-muted" style="font-size: 0.8rem;">
                Veriler API üzerinden çekilmektedir.
            </p>
        </div>
    </div>
</div>