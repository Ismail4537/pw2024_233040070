<?php
// hitung volum 2 kubus
// sisi kubus a=9, kubus b=4
// $sA = 9;
// $sB = 4;
// $vA = $sA * $sA * $sA;
// $vB = $sB * $sB * $sB;
// echo "Volume A = $vA<br>";
// echo "Volume B = $vB<br>";
// echo "Total =" . $vA + $vB . "<br>";
function totalVolumeDuaKubus($sA, $sB)
{
    return
        "Total Volume A = " . $sA * $sA * $sA .
        "<br> Total Volume B = " . $sB * $sB * $sB .
        "<br> Total Volume = " . $sB * $sB * $sB + $sA * $sA * $sA . "<br>";
}
echo totalVolumeDuaKubus(9, 4) . "<br>";
echo totalVolumeDuaKubus(19, 24) . "<br>";
