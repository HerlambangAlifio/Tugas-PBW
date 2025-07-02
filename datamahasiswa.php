<?php
    require 'function.php';
    $query = "SELECT * FROM mahasiswa";
    $rows = query($query);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATA PEMAIN</title>
    <link rel="stylesheet" href="index.css">
    
</head>
<body>
    <h1>Data Mahasiswa </h1>
    <a href="tambahdata.php">
        <button style="margin-bottom: 12px; background-color: lightblue;">Tambah Data</button>
    </a>
    
    <Table border="1px" cellspacing="0" cellpadding="12px">
        <tr>
            <th>No</th>
            <th>Gambar</th>
            <th>Nama</th>
            <th>Nim</th>
            <th>Prodi</th>
            <th>No.hp</th>  
        </tr>
        <?php 
        $i = 1;
        foreach ($rows as $pmn)  {?>
        <tr>
            <td><?= $i?></td>
            <td><img src="image/<?= $pmn["foto"] ?>" width="60px"></td>
            <td><?= $pmn["nama"] ?></td>
            <td><?= $pmn["nim"] ?></td>
            <td><?= $pmn["prodi"] ?></td>
            <td><?= $pmn["Nohp"] ?></td>
            <td><a href="hapusdata.php?id=<?= $pmn["id"] ?>">
                    <button style="margin-bottom: 12px; background-color: lightblue;">Hapus</button>
            <a href="ubahdata.php?id=<?= $pmn["id"] ?>">
                    <button style="margin-bottom: 12px; background-color: lightblue;">Edit</button>
                </a>
            </td>
        </tr>
        <?php $i++; } ?>
    </Table>
</body>
</html>