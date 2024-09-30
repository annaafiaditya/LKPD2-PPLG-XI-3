<!-- menghitung pecahan uang lembar dan koin -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uang</title>
    <link rel="stylesheet" href="css.css">
</head>
<body>
    <div class="isi">
        <form action="" method="post">
            <label for="uang">Masukan Uang</label>
            <input type="number" name="uang" required>
            <button type="submit" name="btn">Hitung</button>
        </form>
        <br>
        <?php
            if (isset ($_POST['btn'])) {
                $uang = $_POST['uang'];
                $u = [100000, 50000, 20000, 10000, 5000, 2000, 1000, 500];
                
                echo "Uang : Rp. ". number_format($uang) . "<br><br>";
                foreach ($u as $money) {
                    $lembar = intval($uang / $money);
                    $uang %= $money;
                    echo "Pecahan " . number_format($money) . " = $lembar <br>";
                }
            }
        ?>
    </div>
</body>
</html>
