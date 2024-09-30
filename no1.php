<!-- pengkondisian untuk mengecek apakah pada sebuah string mengandung angka , jika ya maka memunculkan sebuah angkanya -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>No. 1</title>
    <link rel="stylesheet" href="css.css">
</head>
<body>
    <div class="isi">
        <form method="post">
            <label for="kata">Masukkan kalimat:</label>
            <input type="text" id="kata" name="kata" required>
            <input type="submit" value="Cek Angka">
        </form>
        <br>
        <?php
            // $kata = "Selamat ulang tahun yang ke-17!";
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $kata = $_POST['kata'];
                function cekAngkanya($kata) {
                    preg_match_all('/\d++/', $kata, $matches);
                    // preg_replace('/\0-9/', " ", $matches);
                    
                    if (!empty($matches[0])) {
                        $masuk = $matches[0][0];
                        $misah = str_split($masuk);
                        $gabung = implode(',', $misah);
                        return "Teks mengandung angka: $gabung";
                    } else {
                        return "Teks tidak mengandung angka";
                    }
                }
                
                $hasil = cekAngkanya($kata);
                echo $kata
                    . "<br>"
                    .  $hasil;
            }
        ?>
    </div>
</body>
</html>