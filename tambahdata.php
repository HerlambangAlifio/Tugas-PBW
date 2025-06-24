<?php
require 'function.php';

if (isset($_POST['submit'])) {
    if (tambahdata($_POST) > 0) {
        echo "
        <script>
            alert('Data berhasil ditambahkan!');
            document.location.href = 'datamahasiswa.php';
        </script>";
    } else {
        echo "
        <script>
            alert('Data gagal ditambahkan!');
            document.location.href = 'datamahasiswa.php';
        </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
     <link rel="stylesheet" href="index.css">
</head>
<body>
    <h1>Tambah Data Mahasiswa</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="nama">Nama : </label>
        <input type="text" name="nama" id="nama" required/><br>

        <label for="nim">Nim : </label>
        <input type="text" name="nim" id="nim" required /><br>

        <label for="prodi">Prodi : </label>
        <input type="text" name="prodi" id="prodi" required/><br>

        <label for="Nohp">No.hp : </label>
        <input type="text" name="Nohp" id="Nohp" required/><br>

        <button type="submit" name="submit">Tambah Data</button>
    </form>
</body>
</html>