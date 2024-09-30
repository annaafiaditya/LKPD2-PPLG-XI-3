<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>No. 7</title>
    <link rel="stylesheet" href="css.css">
</head>
<body>
    <div class="isi">
        <form action="" method="post">
            <label for="nama1">Masukan nama pertama</label>
            <input type="text" name="nama1">
            <br>
            <label for="nama2">Masukan nama kedua</label>
            <input type="text" name="nama2">
            <button type="submit" name="btn">Sandingkan</button>
        </form>
        <br>
        <?php
            // echo "<h3>Fungsi yang membandingkan dua buah string nama. Memunculkan nama nya, karakter string mana yang lebih banyak serta selisih nya</h3><br><br>";
            if (isset ($_POST['btn'])){
                
                // $nama1 = "Fema Flamelina Putri";
                // $nama2 = "Artasya Legina";
                $nama1 = $_POST['nama1'];
                $nama2 = $_POST['nama2'];
                
                $jnama1 = strlen($nama1);
                $jnama2 = strlen($nama2);
                $sel = abs($jnama1 - $jnama2);
                
                if ($jnama1 > $jnama2) {
                    echo "<b>$nama1</b> memiliki jumlah karakter lebih banyak dari <b>$nama2</b> : dengan selisih $sel karakter";
                }
                else {
                    echo "<b>$nama1</b> memiliki jumlah karakter lebih sedikit dari <b>$nama2</b> : dengan selisih $sel karakter";
                }
            }
        ?>
    </div>
</body>
</html>