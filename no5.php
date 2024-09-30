<?php
$bil1 = [80, 77, 65, 89, 55, 12, 90, 86];
$bil2 = [77, 99, 55, 81, 45, 90, 91, 98];

$ada = array_intersect($bil1, $bil2);
$tidak = array_diff($bil1, $bil2);

echo "Bilangan yang ada di kedua variable <br>" . implode(', ', $ada). "<br><br>";
echo "Bilangan yang TIDAK ada di kedua variable <br>" . implode(', ', $tidak);

?>