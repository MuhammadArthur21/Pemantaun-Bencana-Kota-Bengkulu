<?php
$data = simplexml_load_file("https://data.bmkg.go.id/DataMKG/TEWS/autogempa.xml") or die("Gagal mengakses!");
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Gempabumi Terbaru</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th,
        td {
            padding: 8px 12px;
            border: 1px solid #ddd;
            text-align: left;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        img {
            max-width: 100%;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Gempabumi Terbaru</h2>
        <table>
            <tr>
                <th>Tanggal</th>
                <td><?php echo $data->gempa->Tanggal; ?></td>
            </tr>
            <tr>
                <th>Jam</th>
                <td><?php echo $data->gempa->Jam; ?></td>
            </tr>
            <tr>
                <th>DateTime</th>
                <td><?php echo $data->gempa->DateTime; ?></td>
            </tr>
            <tr>
                <th>Magnitudo</th>
                <td><?php echo $data->gempa->Magnitude; ?></td>
            </tr>
            <tr>
                <th>Kedalaman</th>
                <td><?php echo $data->gempa->Kedalaman; ?> km</td>
            </tr>
            <tr>
                <th>Koordinat</th>
                <td><?php echo $data->gempa->point->coordinates; ?></td>
            </tr>
            <tr>
                <th>Lintang</th>
                <td><?php echo $data->gempa->Lintang; ?></td>
            </tr>
            <tr>
                <th>Bujur</th>
                <td><?php echo $data->gempa->Bujur; ?></td>
            </tr>
            <tr>
                <th>Lokasi</th>
                <td><?php echo $data->gempa->Wilayah; ?></td>
            </tr>
            <tr>
                <th>Potensi</th>
                <td><?php echo $data->gempa->Potensi; ?></td>
            </tr>
            <tr>
                <th>Dirasakan</th>
                <td><?php echo $data->gempa->Dirasakan; ?></td>
            </tr>
        </table>
        <h3>Shakemap:</h3>
        <img src="https://data.bmkg.go.id/DataMKG/TEWS/<?php echo $data->gempa->Shakemap; ?>" alt="Shakemap">
        
        <meta http-equiv="refresh" content="60">

    </div>
</body>

</html>