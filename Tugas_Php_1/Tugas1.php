<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Operasi Penjumlahan dan Pengurangan</title>
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
                    <b>X: <input id="input" type="number" name="num1" placeholder="Masukkan Sesuai Rumus"><br><br></b>
                    <b>Y: <input id="input" type="number" name="num2" placeholder="Masukkan Sesuai Rumus"><br><br></b>
                    <b>Z: <input id="input" type="number" name="num3" placeholder="Masukkan Sesuai Rumus"><br><br></b>
                    <div class="nav-operator">
                        <button class="button" type="button">
                            OPERATOR
                        </button>
                        <ul class="drop-down">
                            <li><button type="submit" name="operation" value="Kubus">Luas Permukaan Kubus <br> [L = 6 × s²(X)]</button></li>
                            <li><button type="submit" name="operation" value="Balok">Luas Permukaan Balok <br> [L= 2 × [p(X) × l(Y)] + [p(X) × t(Z)] + [l(Y) × t(Z)]]</button></li>
                            <li><button type="submit" name="operation" value="Prisma_Segitiga">Volume Prisma Segitiga <br> [V = (1/2 × Alas(X) × Tinggi(Y)) × Tinggi Prisma(Z)]</button></li>
                            <li><button type="submit" name="operation" value="Limas_Segiempat">Volume Limas Segiempat <br> [V = 1/3 × (Luas Alas(X)) × Tinggi(Y)]</button></li>
                            <li><button type="submit" name="operation" value="Tabung">Volume Tabung <br> [V = π × r²(X) × t(Y)]</button></li>
                            <li><button type="submit" name="operation" value="Kerucut">Luas Permukaan Kerucut <br> [L = (π × r(X) × s(Y)) + (π × r²(X))]</button></li>
                            <li><button type="submit" name="operation" value="Bola">Luas Permukaan Bola <br> [L = 4 × π × X²]</button></li>
                        </ul>
                    </div>
                    <button class="buttonclear" type="submit" name="clear" value="true">HAPUS</button>
                </form>

                <div class="output-bo×">
                    <?php
                    if (isset($_POST['clear'])) {
                        echo "";
                    } elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
                        $num1 = $_POST['num1'];
                        $num2 = $_POST['num2'];
                        $num3 = $_POST['num3'];

                        if (isset($_POST['operation'])) {
                            if ($_POST['operation'] == 'Kubus') {
                                echo "<div class='result'>Luas Permukaan Kubus: " . (6 * $num1 * $num1) . "</div>";
                            } elseif ($_POST['operation'] == 'Balok') {
                                echo "<div class='result'>Luas Permukaan Balok: " . ((2 * $num1 * $num2) + (2 * $num1 * $num3) + (2 * $num2 * $num3)) . "</div>";
                            } elseif ($_POST['operation'] == 'Prisma_Segitiga') {
                                $luas_alas = 0.5 * $num1 * $num2;
                                echo "<div class='result'>Luas Alas Prisma: " . $luas_alas . "<br>" . "</div>";
                                $volume = $luas_alas * $num3;
                                echo "<div class='result'>Volume Prisma: " . $volume . "</div>";
                            } elseif ($_POST['operation'] == 'Limas_Segiempat') {
                                echo "<div class='result'>Volume Limas: " . (1 / 3 * ($num1) * $num2) . "</div>";
                            } elseif ($_POST['operation'] == 'Tabung') {
                                echo "<div class='result'>Volume Tabung: " . (3.14 * $num1 * $num1 * $num2) . "</div>";
                            } elseif ($_POST['operation'] == 'Kerucut') {
                                echo "<div class='result'>Luas Permukaan Kerucut: " . (3.14 * $num1 * ($num1 + $num2)) . "</div>";
                            } elseif ($_POST['operation'] == 'Bola') {
                                echo "<div class='result'>Luas Permukaan Bola: " . (4 * 3.14 * $num1 * $num1) . "</div>";
                            }
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