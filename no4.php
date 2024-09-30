<!-- perkalian 1-10 dan 2-10 terbalik -->

<?php
    // for ($i = 10; $i >= 1; $i-- ) {
    //     $kali1 = $i * 1;
    //     echo "$i X 1 = $kali1 <br>";
    // };
    // echo "<br>";
    
    // $z = 10;
    // do {
    //     $kali2 = $z * 2;
    //     echo "$z X 2 = $kali2 <br>";
    //     $z--;
    // } while ($z >= 1);
    // echo "<br>";

    for ($a = 1; $a <= 2; $a++ ) {
        for ($b = 10; $b >= 1; $b-- ) {
            $kalikali = $b * $a;
            echo "$b X $a = $kalikali <br>";
        };
        echo "<br>";
    };
?>