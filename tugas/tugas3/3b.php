<?php
function urutAngka($angka)
{
    for ($i = 1; $i <= $angka; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo $i + $j - 1 . " ";
        }
        echo "<br>";
    }
}
echo urutAngka(5);
