<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN | INFORMATIKA</title>
     <link rel="stylesheet" href="login.css">
   
</head>
<body>
    <h1>Login</h1>
    <form action="login.php" method="post" encytype="multipart/form-data">
        <label for="email">Email:</label> <br>
        <input type="email" name="email"> <br>
        <label for="password">Password:</label> <br>
        <input type="password" name="password"> <br>
        <input type="checkbox" name="remember" value="1"> 
        <label for="remember">Ingatkan saya</label> <br>
        <input type="submit" value="Login"> 
    </form>
    <p>Belum punya akun? <a href="register.html"> Daftar disini</a></p>
</body>
</html>