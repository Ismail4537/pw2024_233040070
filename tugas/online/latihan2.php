<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .clear {
            clear: both;
        }
    </style>
</head>

<body>
    <?php
    $mahasiswa = [
        ["Ujang", "123456", "Teknik Informatika",],
        ["Tampubolon", "123457", "Teknik Mesin",],
        ["Rehan", "123458", "Teknik Industri",],
        ["Pukorwijoyo", "123459", "Teknik Sipil",],
        ["Jiang cung", "123460", "Teknik Genjutsu",],
        ["Omori", "123461", "Teknik Ninjutsu",],
        ["Tee Lee", "123462", "Teknik Taijutsu",]
    ]
    ?>
    <ul>
        <li><?= $mahasiswa[0][0] ?></li>
        <li><?= $mahasiswa[1][0] ?></li>
        <li><?= $mahasiswa[2][0] ?></li>
        <li><?= $mahasiswa[3][0] ?></li>
        <li><?= $mahasiswa[4][0] ?></li>
        <li><?= $mahasiswa[5][0] ?></li>
        <li><?= $mahasiswa[6][0] ?></li>
    </ul>
    <hr>
    <?php
    foreach ($mahasiswa as $mhs) :
    ?>
        <ul>
            <li>Nama : <?= $mhs[0]; ?></li>
            <li>NRP : <?= $mhs[1]; ?></li>
            <li>Jurusan : <?= $mhs[2]; ?></li>
        </ul>
    <?php
    endforeach;
    ?>
    <hr>
    <?php
    $mahasiswa = [
        [
            "nama" => "Ujang",
            "nrp" => "123456",
            "jurusan" => "Teknik Informatika",
            "tugas" => [90, 80, 85]
        ],
        [
            "nama" => "Tampubolon",
            "nrp" => "123457",
            "jurusan" => "Teknik Mesin",
            "tugas" => [80, 70, 65]
        ],
        [
            "nama" => "Rehan",
            "nrp" => "123458",
            "jurusan" => "Teknik Industri",
            "tugas" => [90, 50, 95]
        ],
        [
            "nama" => "Pukorwijoyo",
            "nrp" => "123459",
            "jurusan" => "Teknik Sipil",
            "tugas" => [100, 100, 100]
        ],
        [
            "nama" => "Jiang cung",
            "nrp" => "123460",
            "jurusan" => "Teknik Genjutsu",
            "tugas" => [70, 80, 65]
        ],
        [
            "nama" => "Omori",
            "nrp" => "123461",
            "jurusan" => "Teknik Ninjutsu",
            "tugas" => [95, 80, 45]
        ],
        [
            "nama" => "Tee Lee",
            "nrp" => "123462",
            "jurusan" => "Teknik Taijutsu",
            "tugas" => [100, 90, 20]
        ]
    ];
    echo $mahasiswa[2]["tugas"][1];
    ?>
    <hr>
    <?php
    $i = 0;
    foreach ($mahasiswa as $mhs) :
    ?>
        <ul>
            <li>Nama : <?= $mhs["nama"]; ?></li>
            <li>NRP : <?= $mhs["nrp"]; ?></li>
            <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
            <li>Tugas : <?= $mhs["tugas"][0] ?>, <?= $mhs["tugas"][1] ?>, <?= $mhs["tugas"][2] ?></li>
        </ul>
    <?php
    endforeach;
    ?>
    <hr>
    <?php
    $mahasiswa = [
        [
            "nama" => "Ujang",
            "nrp" => "123456",
            "jurusan" => "Teknik Informatika",
            "gambar" => "1.jpg"
        ],
        [
            "nama" => "Tampubolon",
            "nrp" => "123457",
            "jurusan" => "Teknik Mesin",
            "gambar" => "2.jpg"
        ],
        [
            "nama" => "Rehan",
            "nrp" => "123458",
            "jurusan" => "Teknik Industri",
            "gambar" => "3.jpg"
        ],
        [
            "nama" => "Pukorwijoyo",
            "nrp" => "123459",
            "jurusan" => "Teknik Sipil",
            "gambar" => "4.jpg"
        ],
        [
            "nama" => "Jiang cung",
            "nrp" => "123460",
            "jurusan" => "Teknik Genjutsu",
            "gambar" => "5.jpg"
        ],
        [
            "nama" => "Omori",
            "nrp" => "123461",
            "jurusan" => "Teknik Ninjutsu",
            "gambar" => "6.jpg"
        ],
        [
            "nama" => "Tee Lee",
            "nrp" => "123462",
            "jurusan" => "Teknik Taijutsu",
            "gambar" => "7.jpg"
        ]
    ];
    foreach ($mahasiswa as $mhs) :
    ?>
        <ul>
            <img src="img/<?= $mhs["gambar"]; ?>" alt="">
            <li>Nama : <?= $mhs["nama"]; ?></li>
            <li>NRP : <?= $mhs["nrp"]; ?></li>
            <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
        </ul>
    <?php
    endforeach;
    ?>
</body>

</html>