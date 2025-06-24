<?php
$koneksi = mysqli_connect("localhost:3307", "root", "", "TugasPBW"); // ganti sesuai database Anda

function query($query) {
    global $koneksi;
    $result = mysqli_query($koneksi, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambahdata($data) {
    global $koneksi;
    $Nama = $data["nama"];
    $Nim = $data["nim"];
    $Prodi = $data["prodi"];
    $Nohp = $data["Nohp"];



    $query = "INSERT INTO mahasiswa (nama, nim, prodi, Nohp) 
              VALUES ('$Nama', '$Nim', '$Prodi', '$Nohp')";
    mysqli_query($koneksi, $query);

    return mysqli_affected_rows($koneksi);
}




function hapusdata($id) {
    global $koneksi;
    mysqli_query($koneksi, "DELETE FROM mahasiswa WHERE id = $id");
    return mysqli_affected_rows($koneksi);
}
?>