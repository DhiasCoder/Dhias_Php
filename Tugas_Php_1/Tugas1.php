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
                    <b>ANGKA 1: <input type="number" name="num1"><br><br></b>
                    <b>ANGKA 2: <input type="number" name="num2"><br><br></b>
                    <b>ANGKA 3: <input type="number" name="num3"><br><br></b>
                    <div class="nav-operator">
                        <button class="button" type="button">
                            OPERATOR
                        </button>
                        <ul class="drop-down">
                            <li><button type="submit" name="operation" value="Kubus">Luas Permukaan Kubus <br> Luas Permukaan=6×s²</button></li>
                            <li><button type="submit" name="operation" value="Balok">Luas Permukaan Balok <br> L= 2 × (p × l + p × t + l × t)</button></li>
                            <li><button type="submit" name="operation" value="Prisma_Segitiga">Volume Prisma Segitiga <br> V = (1/2 × Alas Segitiga × Tinggi Segitiga) × Tinggi Prisma</button></li>
                            <li><button type="submit" name="operation" value="Limas_Segiempat">Volume Limas Segiempat <br> V = 1/3 × (Panjang × Lebar) × Tinggi</button></li>
                            <li><button type="submit" name="operation" value="Tabung">Volume Tabung <br> V = πr²t</button></li>
                            <li><button type="submit" name="operation" value="Kerucut">Luas Permukaan Kerucut <br> L = (π r s) + (π r²)</button></li>
                            <li><button type="submit" name="operation" value="Bola">Luas Permukaan Bola <br> L = 4πr²</button></li>
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
                                echo "<div class='result'>Luas alas Prisma: " . $luas_alas . "<br>" . "</div>";
                                $volume = $luas_alas * $num3;
                                echo "<div class='result'>Volume Prisma: " . $volume . "</div>";
                            } elseif ($_POST['operation'] == 'Limas_Segiempat') {
                                echo "<div class='result'>Volume Limas: " . (1 / 3 * ($num1 * $num2) * $num3) . "</div>";
                            } elseif ($_POST['operation'] == 'Tabung') {
                                echo "<div class='result'>Volume Tabung: " . (3.14 * $num1 * $num1 * $num2) . "</div>";
                            } elseif ($_POST['operation'] == 'Kerucut') {
                                echo "<div class='result'>Luas Permukaan Kerucut: " . ((3.14 * $num1 * $num1) + (3.14 * $num1 * $num2)) . "</div>";
                            } elseif ($_POST['operation'] == 'Bola') {
                                echo "<div class='result'>Luas Permukaan Bola: " . (4 * 3.14 * $num1 * $num1) . "</div>";
                            }
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </center>

</body>

</html>