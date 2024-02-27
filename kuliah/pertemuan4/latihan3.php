<?php
function cetak_angka($angka)
{
    for ($i = 1; $i <= $angka; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo $i . " ";
        }
        echo "<br>";
    }
    return;
}
cetak_angka(5);
echo "<hr>";
cetak_angka(16);
