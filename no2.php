<!-- program kompensasi gaji pelembur lembur yang lebihdari 8 jam, 1 jam pertama 50rb dan jam selanjutnya 25rb -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>No. 2</title>
    <link rel="stylesheet" href="css.css">
</head>
<body>
    <div class="isi">
        <form action="" method="post">
            <label for="jamKerja">Masukan Jam kerja</label>
            <input type="number" name="jamKerja" required>
            <button type="submit" name="btn">lihat</button>
        </form>
        <br>
        <?php
            if (isset($_POST['btn'])) {
                $lembur = $_POST['jamKerja'];
                $jam = $lembur - 8;
            
                $kompensasi = 0;
                if ($jam >= 1) {
                    $kompensasi += 50000;
                    if ($jam > 1) {
                        $kompensasi +=  ($jam - 1) * 25000;
                    }
                }
            
                echo "Lama kerja : $lembur Jam<br>
                    Jam lebih : $jam Jam<br>
                    Jumlah gaji tambahan : Rp." . number_format($kompensasi, 0, ',', '.') . ".";
            }
        ?>
    </div>  
</body>
</html>