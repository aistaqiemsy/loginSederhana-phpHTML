<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Log In</title>
</head>
<body>

    Log In Sederhana <br>
    <form action="#" method="get">
        <input type="text" name="username"> <br>
        <input type="password" name="password"> <br>
        <input type="submit" value="Log In" name="login">
    </form>

    <!-- PHP untuk melakukan aksi log in -->
     <?php
        if (isset($_GET['login'])) {    
            // tambahkan logika AND ( && )
            $namaPengguna = $_GET['username'];
            $kataSandi = $_GET['password'];

            if($namaPengguna == "@aistaqiemsy" && $kataSandi == "123") {
                echo "<hr>";
                echo "<br>Autentikasi berhasil!<br>";
                echo "<center>Pengguna <b>$namaPengguna</b> berhasil login!</center>";
            } else {
                echo "<hr>";
                echo "Autentikasi gagal!";
            }
        }
     ?>
</body>
</html>