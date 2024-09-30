<!-- rata rata nilai dari array  -->

<?php
    $student = [
        [
            'nama' => 'Andi',
            'nilai' => [80, 78, 82, 78, 88]
        ],
        [
            'nama' => 'Beni',
            'nilai' => [86, 70, 80, 85, 81]
        ],
        [
            'nama' => 'Dani',
            'nilai' => [83, 91, 70, 73, 81]
        ],
        [
            'nama' => 'Eko',
            'nilai' => [89, 85, 84, 86, 88]
        ],
    ];

    $urut = 1;
    foreach ($student as $anak) {
        $nama = $anak['nama'];
        $rata = array_sum($anak['nilai']) / count($anak['nilai']);
        
        echo "$urut. $nama = " . number_format($rata, 2) . "<br>";
        $urut++; 
    }
?>