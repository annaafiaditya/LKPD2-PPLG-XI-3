<!-- fungsi menerima data array serta angka yang di cari. tampilkan angka yang dicari dan berapa jumlah nya -->

<?php
    $data = [80, 90, 75, 100, 85, 100, 66];
    $cari = 100;

    $jumlah = array_count_values($data);

    echo "Jumlah angka $cari = $jumlah[$cari]";

?>