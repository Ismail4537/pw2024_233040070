<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            background-color: salmon;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
            transition: 1s;
        }

        .kotak:hover {
            transform: scale(1.5, 1.5);
        }

        .clear {
            clear: both;
        }
    </style>
</head>

<body>
    <?php
    $angka = [1, 2, 3, 4, 5, 6, 7, 8, 9, 0];

    foreach ($angka as $a) :
    ?>
        <div class="kotak"><?= $a; ?></div>
    <?php
    endforeach;
    ?>
    <div class="clear"></div>
    <hr>
    <?= $angka[1]; ?>
    <hr>
    <?php
    $angka = [
        [1, 2, 3],
        [4, 5, 6],
        [7, 8, 9]
    ];
    foreach ($angka as $nomor) :
        foreach ($nomor as $n) :
    ?>
            <div class="kotak"><?= $n; ?></div>
        <?php
        endforeach;
        ?>
        <div class="clear"></div>
    <?php
    endforeach;
    ?>
    <div class="clear"></div>
    <hr>
    <?= $angka[1][2]; ?>
</body>

</html>