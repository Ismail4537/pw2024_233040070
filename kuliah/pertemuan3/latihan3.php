<?php
$i = 1;
echo "Mulai<br>";
while ($i <= 10) {
    echo "Hello While $i<br>";
    $i++;
}
echo "Selesai<br>";
echo "<hr>";

echo "Mulai<br>";
for ($i = 10; $i >= 1; $i--) {
    echo "Hello For $i ";
    echo "<br>";
}
echo "Selesai<br>";

echo "<hr>";


for ($i = 1; $i <= 10; $i++) {
    for ($j = 10; $j >= $i; $j--) {
        echo "*";
    }
    echo "<br>";
}
