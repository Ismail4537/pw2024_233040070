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
