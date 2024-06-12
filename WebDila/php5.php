<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perhitungan Billing Online</title>
</head>
<body>
    <h1>Perhitungan Billing Online</h1>
    <form method="post" action="">
        <label for="jumlahDetik">Jumlah Detik Pemakaian:</label>
        <input type="number" id="jumlahDetik" name="jumlahDetik" required><br><br>
        
        <button type="submit">Hitung Biaya</button></br>
    </form>
    <pre id="hasil">
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $jumlahDetik = intval($_POST['jumlahDetik']);
    $pulsaPer45Detik = 30; // 1 pulsa = 30 rupiah = 45 detik

    $jumlahPulsa = ceil($jumlahDetik / 45);
    $totalBiaya = $jumlahPulsa * $pulsaPer45Detik;
    $jumlahJam = ceil($jumlahDetik / 3600);
    $jumlahMenit = ceil($jumlahDetik / 60);

    echo "Jumlah Jam: " . $jumlahJam . "\n";
    echo "Jumlah Menit: " . $jumlahMenit . "\n";
    echo "Jumlah Detik Pemakaian: " . $jumlahDetik . "\n";
    echo "Jumlah Pulsa: " . $jumlahPulsa . "\n";
    echo "Total Biaya: Rp" . $totalBiaya . "\n";
}
?>
    </pre>
</body>
</html>
