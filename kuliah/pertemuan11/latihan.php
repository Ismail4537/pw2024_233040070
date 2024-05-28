<?php
// koneksi ke data base
$conn = mysqli_connect("localhost", "root", "", "pw2024_233040070");
if (mysqli_connect_errno()) {
    echo "Koneksi ke database gagal : " . mysqli_connect_error();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Document</title>
</head>

<body>
    <div class="container">
        <h1>Daftar Mahasiswa</h1>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">NIM</th>
                    <th scope="col">Email</th>
                    <th scope="col">Jurusan</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <?php
            $result = mysqli_query($conn, "SELECT * FROM mahasiswa") or die(mysqli_error($conn));
            $no = 1;
            ?>
            <section id="row">
                <!-- fetch row -->
                <!-- <?php
                        // $rows = [];
                        // while ($row = mysqli_fetch_row($result)) {
                        //     $rows[] = $row;
                        // }
                        // $mahasiswa = $rows;
                        ?>
                <tbody>
                    <?php //foreach ($mahasiswa as $mhs) : 
                    ?>
                        <tr>
                            <th scope="row">
                                <?php
                                //echo $no++
                                ?>
                            </th>
                            <td>
                                <?php
                                //echo $mhs[1];
                                ?>
                            </td>
                            <td>
                                <?php
                                //echo $mhs[2];
                                ?>
                            </td>
                            <td>
                                <?php
                                //echo $mhs[3];
                                ?>
                            </td>
                            <td>
                                <?php
                                //echo $mhs[4];
                                ?>
                            </td>
                            <td>
                                <a href="" class="badge text-decoration-none text-bg-success">Ubah</a>
                                <a href="" class="badge text-decoration-none text-bg-danger">Hapus</a>
                            </td>
                        </tr>
                    <?php //endforeach; 
                    ?>
                </tbody> -->
            </section>
            <section id="assoch">
                <!-- fetch row -->
                <?php
                $rows = [];
                while ($row = mysqli_fetch_assoc($result)) {
                    $rows[] = $row;
                }
                $mahasiswa = $rows;
                ?>
                <tbody>
                    <?php foreach ($mahasiswa as $mhs) : ?>
                        <tr>
                            <th scope="row">
                                <?php
                                echo $no++
                                ?>
                            </th>
                            <td>
                                <?php
                                echo $mhs['nama'];
                                ?>
                            </td>
                            <td>
                                <?php
                                echo $mhs['nim'];
                                ?>
                            </td>
                            <td>
                                <?php
                                echo $mhs['email'];
                                ?>
                            </td>
                            <td>
                                <?php
                                echo $mhs['jurusan'];
                                ?>
                            </td>
                            <td>
                                <a href="" class="badge text-decoration-none text-bg-success">Ubah</a>
                                <a href="" class="badge text-decoration-none text-bg-danger">Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </section>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>