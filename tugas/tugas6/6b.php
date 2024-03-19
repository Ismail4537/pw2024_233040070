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
    <form action="" method="post">
        <input type="number" name="angka">
        <input type="submit" value="Save">
    </form>
    <?php
    if (isset($_POST["angka"])) {
        $angka = $_POST["angka"];
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
    }
    ?>
</body>

</html>