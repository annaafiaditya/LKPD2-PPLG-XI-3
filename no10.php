<!-- jumlah usia lebih dan kurang dari 17 -->

<?php
    $umur = [ 12, 15, 17, 20, 25, 30, 35, 40, 45, 50];

    $dewasa = 0;
    $anak = 0;

    foreach ($umur as $usia) {
        if ($usia >= 17) {
            $dewasa++;
        }
        else {
            $anak++;
        }
        echo "$usia,";
    }
    echo "<br>Jumlah kategori Dewasa : $dewasa  <br>
        Jumlah Kategori Anak-Anak : $anak";
?>