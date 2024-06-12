<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perhitungan Pembayaran</title>
</head>
<body>
    <h1>Perhitungan Pembayaran</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="nama">Nama Barang:</label>
        <input type="text" id="nama" name="nama" required><br><br>
    <label for="harga">Harga Barang (Rp):</label>
    <input type="number" id="harga" name="harga" step="0.01" required><br><br>
    
    <label for="jumlah">Jumlah:</label>
    <input type="number" id="jumlah" name="jumlah" required><br><br>
    
    <button type="submit">Hitung</button>
</form>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = htmlspecialchars($_POST["nama"]);
        $harga = floatval($_POST["harga"]);
        $jumlah = intval($_POST["jumlah"]);

        $diskon = 0;
        if ($jumlah >= 3) {
            $diskon = $harga * 0.1 * $jumlah; // Diskon 10% dari harga barang dikalikan jumlah
        }

        $totalBayar = ($harga * $jumlah) - $diskon;

        echo "<p><input type='text' value='Nama Barang: $nama' readonly></p>";
        echo "<p><input type='text' value='Harga: Rp" . number_format($harga, 2, ',', '.') . "' readonly></p>";
        echo "<p><input type='text' value='Jumlah: $jumlah' readonly></p>";
        echo "<p><input type='text' value='Diskon: Rp" . number_format($diskon, 2, ',', '.') . "' readonly></p>";
        echo "<p><input type='text' value='Total Bayar: Rp" . number_format($totalBayar, 2, ',', '.') . "' readonly></p>";
    }
?>
</body>
</html>