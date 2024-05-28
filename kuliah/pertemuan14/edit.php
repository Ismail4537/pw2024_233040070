<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Mahasiswa</title>
</head>

<body>
    <?php
    require 'function.php';
    $conn = koneksi();
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
    } else {
        echo "<script>
            alert('Tidak ada data yang di pilih');
            document.location.href = 'index.php';
            </script>";
        return;
    }
    $mahasiswa = query("SELECT * FROM mahasiswa WHERE id = $id");
    if (isset($_POST['edit'])) {
        if (edit($_POST) > 0) {
            echo "<script>
            alert('Data berhasil di edit');
            document.location.href = 'index.php';
            </script>";
        }
    }
    foreach ($mahasiswa as $mhs) :
    ?>
        <div class="container col-8">
            <h1>Edit Mahasiswa</h1>
            <form action="" method="post">
                <input type="hidden" name="id" value="<?= $mhs['id'] ?>">
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Mahasiswa</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="<?= $mhs['nama'] ?>" required>
                </div>
                <div class="mb-3">
                    <label for="nim" class="form-label">NIM mahasiswa</label>
                    <input type="nim" class="form-control" id="nim" name="nim" value="<?= $mhs['nim'] ?>" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email Mahasiswa</label>
                    <input type="text" class="form-control" id="email" name="email" value="<?= $mhs['email'] ?>" required>
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="jurusan" class="form-label">Jurusan Mahasiswa</label>
                    <input type="text" class="form-control" id="jurusan" name="jurusan" value="<?= $mhs['jurusan'] ?>" required>
                </div>
                <button type="submit" name="edit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    <?php endforeach ?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>