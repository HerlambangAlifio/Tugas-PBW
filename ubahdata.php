<?php
require 'function.php';

$id = $_GET['id'];

$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];

if (isset($_POST['submit'])) {
    if (ubahdata($_POST,$id) > 0) {
        echo "
        <script>
           alert('Data berhasil diubah!');
           document.location.href = 'datamahasiswa.php';
       </script>";
    } else {
       echo "
       <script>
           alert('Data gagal diubah!');
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
    <title>Ubah data</title>
     <link rel="stylesheet" href="index.css">
</head>
<body>
    <h1>Ubah Data Mahasiswa</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="nama">Nama : </label>
        <input type="text" name="nama" id="nama" required value="<?= $mhs["nama"]; ?>"/><br>
    
        <label for="nim">Nim : </label>
        <input type="text" name="nim" id="nim" required value="<?= $mhs["nim"]; ?>"/><br>

        <label for="prodi">Prodi : </label>
        <input type="text" name="prodi" id="prodi" required value="<?= $mhs["prodi"]; ?>"/><br>

        <label for="Nohp">No.hp : </label>
        <input type="text" name="Nohp" id="Nohp" required value="<?= $mhs["Nohp"]; ?>"/><br>

        <label>foto</label>
        <input type="file" name="foto"required/><br>

        <button type="submit" name="submit">Tambah Data</button>
    </form>
</body>
</html>