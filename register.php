<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTER | INFORMATIKA</title>
     <link rel="stylesheet" href="register.css">
</head>
<body>
    <h1>Login</h1>
    <form action="login.php" method="post" encytype="multipart/form-data">
        <label for="nama">Nama:</label> <br>
        <input type="text" name="email"> <br>
        <label for="email">Email:</label> <br>
        <input type="email" name="email"> <br>
        <label for="password">Password:</label> <br>
        <input type="password" name="password"> <br>
        <label for="umur">Umur:</label> <br>
        <input type="number" name="umur"> <br>
        <label for="tanggallahir">Tanggal lahir:</label> <br>
        <input type="date" name="tanggal lahir"> <br>
        <label for="warna">Warna favorit:</label> <br>
        <input type="color" name="warna"> <br>
        <label for="profil">name:profil>Uploud foto profil</label> <br>
        <input type="file" name="profil"> <br>
        <label for="jenis kelamin">jenis kelamin:</label> <br>
        <input type="radio" name="jenis_kelamin" value="laki laki">Laki-laki <br>
        <input type="radio" name="jenis_kelamin" value="perempuan">perempuan <br>
        <label for="hobi">Hobi:</label> <br>
        <input type="checkbox" name="hobi" value="membaca">membaca <br>
        <input type="checkbox" name="hobi" value="Traveling">membaca <br>
        <input type="checkbox" name="hobi" value="Olahraga">membaca <br>
        <label for="negara">Negara:</label> <br>
        <select name="negara">
            <option value="USA">USA</option>
            <option value="UK">UK</option>
            <option value="Indonesia">Indonesia</option>
        </select><br>
        <label for="biografi">Biografi singkat:</label><br>
        <textarea name="biografi" rows="4" cols="50"></textarea><br>
        <input type="checkbox" name="remember" value="1"> 
        <label for="remember">Ingatkan saya</label> <br>
        <input type="submit" value="Login"> 
    </form>
    <p>Belum punya akun? <a href="register.html"> Daftar disini</a></p>
</body>
</html>