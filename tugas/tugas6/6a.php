<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .odd,
        .due {
            display: inline-block;
            width: 50px;
            height: 50px;
            border: 1px solid black;
            text-align: center;
            background-color: salmon;
            line-height: 50px;
        }

        .due {
            background-color: skyblue;
        }
    </style>
</head>

<body>
    <a href="?angka=10">10</a>
    <br>
    <?php
    if (isset($_GET["angka"])) {
        $angka = $_GET["angka"];
        for ($i = $angka; $i >= 1; $i--) {
            for ($j = 1; $j <= $i; $j++) {
                if ($i % 2 == 0) {
                    echo "<div class='due'>$i</div>";
                } else {
                    echo "<div class='odd'>$i</div>";
                }
            }
            echo "<br>";
        }
    } else {
    }
    ?>
</body>

</html>