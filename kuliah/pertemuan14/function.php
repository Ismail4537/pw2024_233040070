<?php
function koneksi()
{
    $db = mysqli_connect("localhost", "root", "", "pw2024_233040070") or die("Koneksi ke database gagal!");
    return $db;
}

function query($syntax)
{
    $conn = koneksi();

    $result = mysqli_query($conn, $syntax) or die(mysqli_error($conn));

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data)
{
    $conn = koneksi();
    $nama = htmlspecialchars($data['nama']);
    $nim = htmlspecialchars($data['nim']);
    $email = htmlspecialchars($data['email']);
    $jurusan = htmlspecialchars($data['jurusan']);
    $syntax = "INSERT INTO mahasiswa VALUES (NULL, '$nama', '$nim', '$email', '$jurusan')";
    mysqli_query($conn, $syntax) or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);
}
function edit($data)
{
    $conn = koneksi();
    $id = $data['id'];
    $nama = htmlspecialchars($data['nama']);
    $nim = htmlspecialchars($data['nim']);
    $email = htmlspecialchars($data['email']);
    $jurusan = htmlspecialchars($data['jurusan']);
    $syntax = "UPDATE `mahasiswa` SET `nama` = '$nama', `nim` = '$nim', `email` = '$email', `jurusan` = '$jurusan' WHERE `mahasiswa`.`id` = $id";
    mysqli_query($conn, $syntax) or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);
}

function hapus($id)
{
    $conn = koneksi();
    $syntax = "DELETE FROM mahasiswa WHERE id = $id";
    mysqli_query($conn, $syntax) or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);
}
