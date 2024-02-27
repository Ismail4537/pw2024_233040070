<?php
echo date("l, d F Y");
echo "<br>";
echo time();
echo "<br><br>";
echo date("l, d F Y", time() + 24 * 60 * 60 * 100);
echo "<br>";
echo time() + 24 * 60 * 60 * 100;
echo "<br><br>";
echo "tanggal awal " . mktime(1, 0, 0, 1, 1, 1970) . "<br>";
echo date("l", mktime(0, 0, 0, 24, 8, 2005)) . "<br>";
echo strlen("Hello World");
