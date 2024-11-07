<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Operasi Penjumlahan dan Pengurangan</title>
    <link href="./style.css" rel="stylesheet">
</head>

<body>
    <center>
        <div class="container">
            <div class="isi">
                <form method="post">
                    Angka 1: <input type="number" name="num1"><br><br>
                    Angka 2: <input type="number" name="num2"><br><br>
                    Angka 3: <input type="number" name="num3"><br><br>
                    <div class="nav-operator">
                        <button class="button" type="button">
                            OPERATOR
                        </button>
                        <ul class="drop-down">
                            <li><button type="submit" name="operation" value="Kubus">Luas Permukaan Kubus</button></li>
                            <li><button type="submit" name="operation" value="Balok">Luas Permukaan Balok</button></li>
                            <li><button type="submit" name="operation" value="Prisma_Segitiga">Volume Prisma Segitiga</button></li>
                            <li><button type="submit" name="operation" value="Limas_Segiempat">Volume Limas Segiempat</button></li>
                            <li><button type="submit" name="operation" value="Tabung">Volume Tabung</button></li>
                            <li><button type="submit" name="operation" value="Kerucut">Luas Permukaan Kerucut</button></li>
                            <li><button type="submit" name="operation" value="Bola">Luas Permukaan Bola</button></li>
                        </ul>
                    </div>
                    <button class="buttonclear" type="submit" name="clear" value="true">Hapus Hasil</button>
                </form>

                <div class="output-box">
                    <?php
                    if (isset($_POST['clear'])) {
                        echo "";
                    } elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
                        $num1 = $_POST['num1'];
                        $num2 = $_POST['num2'];
                        $num3 = $_POST['num3'];

                        if (isset($_POST['operation'])) {
                            if ($_POST['operation'] == 'Kubus') {
                                echo "Luas Permukaan Kubus: " . (6 * $num1 * $num2);
                            } elseif ($_POST['operation'] == 'Balok') {
                                echo "Luas Permukaan Balok: " . ((2 * $num1 * $num2) + (2 * $num1 * $num3) + (2 * $num2 * $num3));
                            } elseif ($_POST['operation'] == 'Prisma_Segitiga') {
                                $luas_alas = 0.5 * $num1 * $num2;
                                echo "Luas alas Prisma: " . $luas_alas . "<br>";
                                $volume = $luas_alas * $num3;
                                echo "Volume Prisma: " . $volume;
                            } elseif ($_POST['operation'] == 'Limas_Segiempat') {
                                echo "Volume Limas: " . (1 / 3 * $num1 * $num1 * $num2);
                            } elseif ($_POST['operation'] == 'Tabung') {
                                echo "Volume Tabung: " . (3.14 * $num1 * $num1 * $num2);
                            } elseif ($_POST['operation'] == 'Kerucut') {
                                echo "Luas Permukaan Kerucut: " . ((3.14 * $num1 * $num1) + (3.14 * $num1 * $num2));
                            } elseif ($_POST['operation'] == 'Bola') {
                                echo "Luas Permukaan Bola: " . (4 * 3.14 * $num1 * $num1);
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