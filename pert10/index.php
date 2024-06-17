<?php
    $angka =[3,7];

    function hitungRataRata($array) {
        $jumlahAngka = count ($array);
        $total = array_sum ($array);

        $rataRata = $total / $jumlahAngka;
        return $rataRata;
    }

    $rataRata = hitungRatarata($angka);
    echo $rataRata;
?>
