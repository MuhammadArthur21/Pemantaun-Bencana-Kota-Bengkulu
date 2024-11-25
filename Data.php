<?php
// Ambil data dari BMKG API
$data = simplexml_load_file("https://data.bmkg.go.id/DataMKG/TEWS/autogempa.xml") or die("Gagal mengakses!");

// Ambil koordinat lintang dan bujur dari data BMKG
$lintang = $data->gempa->Lintang;
$bujur = $data->gempa->Bujur;
$magnitudo = $data->gempa->Magnitude;
?>

<!DOCTYPE html>
<html>

<head>
    <title>Peta Lokasi Gempa</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <style>
        #map {
            height: 400px;
        }
    </style>
</head>

<body>
    <h2>Lokasi Gempa di Peta</h2>
    <div id="map"></div>

    <script>
        // Peta dimulai dengan koordinat Lintang dan Bujur dari PHP
        var map = L.map('map').setView([<?php echo $lintang; ?>, <?php echo $bujur; ?>], 10);

        // Menambahkan layer peta OpenStreetMap
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png').addTo(map);

        // Menambahkan marker di lokasi gempa dan popup dengan informasi magnitudo
        L.marker([<?php echo $lintang; ?>, <?php echo $bujur; ?>]).addTo(map)
            .bindPopup("Gempa Magnitudo: <?php echo $magnitudo; ?>")
            .openPopup();
    </script>
</body>

</html>