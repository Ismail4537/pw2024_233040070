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
            "gambar" => "1.jpg",
            "email" => "ujang51@gmail.com"
        ],
        [
            "nama" => "Ucok Baba",
            "nrp" => "123452",
            "jurusan" => "Teknik Informatika",
            "gambar" => "2.jpg",
            "email" => "Babayaga@gmail.com"
        ],
        [
            "nama" => "Dani Sastro",
            "nrp" => "123453",
            "jurusan" => "Teknik Informatika",
            "gambar" => "3.jpg",
            "email" => "SastraSatro@gmail.com"
        ],
        [
            "nama" => "Dwi Puryanto",
            "nrp" => "123454",
            "jurusan" => "Teknik Informatika",
            "gambar" => "4.jpg",
            "email" => "Dwiyanto555@gmail.com"
        ],
        [
            "nama" => "Rehan Abduloh",
            "nrp" => "123455",
            "jurusan" => "Teknik Informatika",
            "gambar" => "5.jpg",
            "email" => "Abdul@gmail.com"
        ],
        [
            "nama" => "Rizal Fadillah",
            "nrp" => "123456",
            "jurusan" => "Teknik Informatika",
            "gambar" => "6.jpg",
            "email" => "R.Fadil6452@gmail.com"
        ],
        [
            "nama" => "Samson",
            "nrp" => "123457",
            "jurusan" => "Teknik Informatika",
            "gambar" => "7.jpg",
            "email" => "SamsonHercules@gmail.com"
        ],
        [
            "nama" => "Reza Darmawan",
            "nrp" => "123458",
            "jurusan" => "Teknik Informatika",
            "gambar" => "8.jpg",
            "email" => "RRezza@gmail.com"
        ],
        [
            "nama" => "Rio Andika",
            "nrp" => "123459",
            "jurusan" => "Teknik Informatika",
            "gambar" => "9.jpg",
            "email" => "R10Andi@gmail.com"
        ],
        [
            "nama" => "Pandu Wibowo",
            "nrp" => "123460",
            "jurusan" => "Teknik Informatika",
            "gambar" => "10.jpg",
            "email" => "P.Wibowo@gmail.com"
        ]
    ];
    foreach ($mahasiswa as $mhs) :
    ?>
        <ul>
            <img src="img/<?= $mhs["gambar"]; ?>" alt="">
            <li>NRP : <?= $mhs["nrp"]; ?></li>
            <li>Nama : <?= $mhs["nama"]; ?></li>
            <li>Email : <?= $mhs["email"]; ?></li>
            <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
        </ul>
    <?php
    endforeach;
    ?>
</body>

</html>