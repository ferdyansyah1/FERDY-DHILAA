<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konversi Nilai</title>
</head>
<body>
    <h1>Konversi Nilai</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="nilai">Masukkan Nilai:</label>
        <input type="number" id="nilai" name="nilai" required>
        <button type="submit">Konversi</button>
    </form>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nilai = intval($_POST["nilai"]);
            $konversi = "";
        if ($nilai >= 80 && $nilai <= 100) {
            $konversi = 'A';
        } elseif ($nilai >= 70 && $nilai <= 79) {
            $konversi = 'B';
        } elseif ($nilai >= 60 && $nilai <= 69) {
            $konversi = 'C';
        } elseif ($nilai >= 50 && $nilai <= 59) {
            $konversi = 'D';
        } elseif ($nilai >= 0 && $nilai < 50) {
            $konversi = 'E';
        } else {
            $konversi = 'Nilai tidak valid';
        }

        echo "<p>Nilai Konversi: <input type='text' value='$konversi' readonly></p>";
    }
?>
</body>
</html>