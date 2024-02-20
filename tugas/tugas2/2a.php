<?php
$nDepan = "Ismail";
$nBlk = "Abdul Fathan";
for($i = 1; $i <= 100 ; $i++ ){
    if ($i %3 == 0 && $i %5 == 0){
        echo $nDepan." ".$nBlk;
        echo "<br>";
    }else if($i %5 == 0){
        echo $nBlk;
        echo "<br>";
    }else if($i %3 == 0){
        echo $nDepan;
        echo "<br>";
    }else{
        echo $i;
        echo "<br>";
    }
}
?>