<!-- Nama: Muhammad Dhias Habibi
Nim: 23051450246
Kelas: 2383B -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Operasi Perhitungan Bangun Ruang</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <center>
        <div class="container">
            <div class="judul">
                <h3>PROSES PERHITUNGAN DARI RUMUS BANGUN RUANG</h3>
            </div>
            <div class="isi">
                <form method="post">
                    <?php
                    // Tentukan label default
                    $labelX = "X:";
                    $labelY = "Y:";
                    $labelZ = "Z:";
                    $formulaDescription = "Pilih rumus untuk melihat penjelasan.";
                    $operation = isset($_POST['operation']) ? $_POST['operation'] : '';

                    // Perbarui label sesuai dengan operator yang dipilih
                    if ($operation == 'Kubus') {
                        $labelX = "Sisi (s)";
                        $labelY = "-";
                        $labelZ = "-";
                        $formulaDescription = "Luas Permukaan Kubus: L = 6 × s²";
                    } elseif ($operation == 'Balok') {
                        $labelX = "Panjang (p)";
                        $labelY = "Lebar (l)";
                        $labelZ = "Tinggi (t)";
                        $formulaDescription = "Luas Permukaan Balok: L = 2 × [(p × l) + (p × t) + (l × t)]";
                    } elseif ($operation == 'Prisma_Segitiga') {
                        $labelX = "Alas Segitiga (a)";
                        $labelY = "Tinggi Segitiga (t)";
                        $labelZ = "Tinggi Prisma";
                        $formulaDescription = "Volume Prisma Segitiga: V = (1/2 × a × t) × Tinggi Prisma";
                    } elseif ($operation == 'Limas_Segiempat') {
                        $labelX = "Luas Alas (L)";
                        $labelY = "Tinggi (t)";
                        $labelZ = "-";
                        $formulaDescription = "Volume Limas Segiempat: V = 1/3 × L × t";
                    } elseif ($operation == 'Tabung') {
                        $labelX = "Jari-jari (r)";
                        $labelY = "Tinggi (t)";
                        $labelZ = "-";
                        $formulaDescription = "Volume Tabung: V = π × r² × t";
                    } elseif ($operation == 'Kerucut') {
                        $labelX = "Jari-jari (r)";
                        $labelY = "Garis Pelukis (s)";
                        $labelZ = "-";
                        $formulaDescription = "Luas Permukaan Kerucut: L = (π × r × s) + (π × r²)";
                    } elseif ($operation == 'Bola') {
                        $labelX = "Jari-jari (r)";
                        $labelY = "-";
                        $labelZ = "-";
                        $formulaDescription = "Luas Permukaan Bola: L = 4 × π × r²";
                    }
                    ?>

                    <!-- Tampilkan deskripsi rumus yang dipilih -->
                    <div><b><?php echo $formulaDescription; ?></b></div><br>

                    <!-- Input berdasarkan label yang dihasilkan -->
                    <b><?php echo $labelX; ?></b> <input type="number" name="num1" placeholder="Masukkan Sesuai Rumus"><br><br>
                    <?php if ($labelY != "-") : ?>
                        <b><?php echo $labelY; ?></b> <input type="number" name="num2" placeholder="Masukkan Sesuai Rumus"><br><br>
                    <?php endif; ?>
                    <?php if ($labelZ != "-") : ?>
                        <b><?php echo $labelZ; ?></b> <input type="number" name="num3" placeholder="Masukkan Sesuai Rumus"><br><br>
                    <?php endif; ?>
                    <!-- Dropdown untuk memilih operator -->
                    <div class="nav-operator">
                        <button class="button" type="button">
                            OPERATOR
                        </button>
                        <ul class="drop-down">
                            <li><button type="submit" name="operation" value="Kubus">Luas Permukaan Kubus</button></li>
                            <li><button type="submit" name="operation" value="Balok">Luas Permukaan Balok</button></li>
                            <li><button type="submit" name="operation" value="Prisma_Segitiga" <?php if ($operation == 'Prisma_Segitiga') echo 'selected'; ?>>Volume Prisma Segitiga</button></li>
                            <li><button type="submit" name="operation" value="Limas_Segiempat" <?php if ($operation == 'Limas_Segiempat') echo 'selected'; ?>>Volume Limas Segiempat</button></li>
                            <li><button type="submit" name="operation" value="Tabung"><?php if ($operation == 'Tabung') echo 'selected'; ?>Volume Tabung</button></li>
                            <li><button type="submit" name="operation" value="Kerucut"><?php if ($operation == 'Kerucut') echo 'selected'; ?>Luas Permukaan Kerucut</button></li>
                            <li><button type="submit" name="operation" value="Bola"><?php if ($operation == 'Bola') echo 'selected'; ?>Luas Permukaan Bola </button></li>
                        </ul>
                    </div>
                    <!-- Tombol Hitung -->
                    <button class="button" type="submit" name="calculate">HITUNG</button>
                    <button class="buttonclear" type="submit" name="clear" value="true">HAPUS</button>
                </form>

                <!-- PHP untuk menampilkan hasil perhitungan -->
                <div class="output-box">
                    <?php
                    if (isset($_POST['clear'])) {
                        echo "";
                    } elseif ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['calculate'])) {
                        // Memastikan variabel hanya didefinisikan jika ada input
                        $num1 = isset($_POST['num1']) ? $_POST['num1'] : 0;
                        $num2 = isset($_POST['num2']) ? $_POST['num2'] : 0;
                        $num3 = isset($_POST['num3']) ? $_POST['num3'] : 0;

                        if ($operation == 'Kubus') {
                            echo "<div class='result'>Luas Permukaan Kubus: " . (6 * $num1 * $num1) . "</div>";
                        } elseif ($operation == 'Balok') {
                            echo "<div class='result'>Luas Permukaan Balok: " . ((2 * $num1 * $num2) + (2 * $num1 * $num3) + (2 * $num2 * $num3)) . "</div>";
                        } elseif ($operation == 'Prisma_Segitiga') {
                            $luas_alas = 0.5 * $num1 * $num2;
                            $volume = $luas_alas * $num3;
                            echo "<div class='result'>Volume Prisma: " . $volume . "</div>";
                        } elseif ($operation == 'Limas_Segiempat') {
                            echo "<div class='result'>Volume Limas: " . (1 / 3 * ($num1) * $num2) . "</div>";
                        } elseif ($operation == 'Tabung') {
                            echo "<div class='result'>Volume Tabung: " . (3.14 * $num1 * $num1 * $num2) . "</div>";
                        } elseif ($operation == 'Kerucut') {
                            echo "<div class='result'>Luas Permukaan Kerucut: " . (3.14 * $num1 * ($num1 + $num2)) . "</div>";
                        } elseif ($operation == 'Bola') {
                            echo "<div class='result'>Luas Permukaan Bola: " . (4 * 3.14 * $num1 * $num1) . "</div>";
                        }
                    }
                    ?>
                </div>
                <div class="footer">Create By &copy;Dhias Habibi</div>
            </div>
        </div>
    </center>
</body>

</html>