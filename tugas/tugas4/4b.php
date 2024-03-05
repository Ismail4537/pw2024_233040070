<?php
$hardware = [
    "Motherboard",
    "Processor",
    "Hard Disk",
    "PC Coller",
    "VGA Card",
    "SSD"
];
echo "<b>Macam-macam hardware komputer</b><br>";
foreach ($hardware as $item => $barang) {
    echo $item + 1 . ". " . $barang . "<br>";
}
echo "<br>";
$hardware[] = "Card reader";
$hardware[] = "Modem";
sort($hardware);
echo "<b>Macam-macam hardware komputer baru</b><br>";
foreach ($hardware as $item => $barang) {
    echo $item + 1 . ". " . $barang . "<br>";
}
