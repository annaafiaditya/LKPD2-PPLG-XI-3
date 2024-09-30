<!-- perkalian angka 5 dimana puluhannya di hapus sampai 50 -->

<?php
    for ($i = 1; $i <= 11; $i++) {
        $puluhan = $i*5;
        if ($puluhan % 10 == 5 ) {
            echo "$i X 5 = $puluhan <br>";
        }
    }

?>