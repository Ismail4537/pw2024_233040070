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
        [
            "nama" => "Ujang Sumantri",
            "nrp" => "123451",
            "jurusan" => "Teknik Informatika",
            "gambar" => "1.jpg"
        ],
        [
            "nama" => "Ucok Baba",
            "nrp" => "123452",
            "jurusan" => "Teknik Informatika",
            "gambar" => "2.jpg"
        ],
        [
            "nama" => "Dani Sastro",
            "nrp" => "123453",
            "jurusan" => "Teknik Informatika",
            "gambar" => "3.jpg"
        ],
        [
            "nama" => "Dwi Purwono",
            "nrp" => "123454",
            "jurusan" => "Teknik Informatika",
            "gambar" => "4.jpg"
        ],
        [
            "nama" => "Rehan Abduloh",
            "nrp" => "123455",
            "jurusan" => "Teknik Informatika",
            "gambar" => "5.jpg"
        ],
        [
            "nama" => "Rizal Fadillah",
            "nrp" => "123456",
            "jurusan" => "Teknik Informatika",
            "gambar" => "6.jpg"
        ],
        [
            "nama" => "Samson",
            "nrp" => "123457",
            "jurusan" => "Teknik Informatika",
            "gambar" => "7.jpg"
        ],
        [
            "nama" => "Reza Darmawan",
            "nrp" => "123458",
            "jurusan" => "Teknik Informatika",
            "gambar" => "8.jpg"
        ],
        [
            "nama" => "Rio Andika",
            "nrp" => "123459",
            "jurusan" => "Teknik Informatika",
            "gambar" => "9.jpg"
        ],
        [
            "nama" => "Pandu Wibowo",
            "nrp" => "123460",
            "jurusan" => "Teknik Informatika",
            "gambar" => "10.jpg"
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