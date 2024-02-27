<?php
function urutanAngka($angka)
{
    $nomorAwal = 1;
    for ($i = 1; $i <= $angka; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo $nomorAwal . ' ';
            $nomorAwal++;
        }
        echo "<br>";
    }
}
$nilai = $_POST['a'];
urutanAngka($nilai);
// urutanAngka(5);