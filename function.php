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

    $foto = upload();
    if (!$foto) {
        return 0; // upload gagal
    }

    $query = "INSERT INTO mahasiswa (nama, nim, prodi, Nohp, foto) 
              VALUES ('$Nama', '$Nim', '$Prodi', '$Nohp', '$foto')";
    mysqli_query($koneksi, $query);

    return mysqli_affected_rows($koneksi);
}

function upload() {
    $namaFile = $_FILES['foto']['name'];
    $tmpName = $_FILES['foto']['tmp_name'];
    $error = $_FILES['foto']['error'];
    $ukuran = $_FILES['foto']['size'];

    // cek apakah tidak ada gambar yang diupload
    if ($error === 4) {
        echo "<script>alert('Pilih gambar terlebih dahulu!');</script>";
        return false;
    }

    // cek ekstensi file
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = strtolower(pathinfo($namaFile, PATHINFO_EXTENSION));
    if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo "<script>alert('Yang diupload bukan gambar!');</script>";
        return false;
    }

    // cek ukuran file (misal max 2MB)
    if ($ukuran > 2 * 1024 * 1024) {
        echo "<script>alert('Ukuran gambar terlalu besar!');</script>";
        return false;
    }

    // generate nama file unik
    $namaFileBaru = uniqid() . '.' . $ekstensiGambar;
    move_uploaded_file($tmpName, 'image/' . $namaFileBaru);

    return $namaFileBaru;
}

function hapusdata($id) {
    global $koneksi;
    mysqli_query($koneksi, "DELETE FROM mahasiswa WHERE id = $id");
    return mysqli_affected_rows($koneksi);
}

function ubahdata($data, $id) {
    global $koneksi;
    $Nama = $data["nama"];
    $Nim = $data["nim"];
    $Prodi = $data["prodi"];
    $Nohp = $data["Nohp"];

    // cek apakah user memilih gambar baru atau tidak
    if ($_FILES['foto']['error'] === 4) {
        // jika tidak ada gambar yang diupload, tetap gunakan foto lama
        $foto = query("SELECT foto FROM mahasiswa WHERE id = $id")[0]['foto'];
    } else {
        // jika ada gambar baru, upload dan ganti foto lama
        $foto = upload();
        if (!$foto) {
            return 0; // upload gagal
        }
    }

    $query = "UPDATE mahasiswa SET 
              nama = '$Nama', 
              nim = '$Nim', 
              prodi = '$Prodi', 
              Nohp = '$Nohp', 
              foto = '$foto' 
              WHERE id = $id";
    
    mysqli_query($koneksi, $query);
    
    return mysqli_affected_rows($koneksi);
}
?>