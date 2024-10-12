<?php
//session untuk login
session_start();

// cek cookie
if( isset($_COOKIE['login']) ) {
    if( $_COOKIE['login'] == 'true' ){
        $_SESSION['login'] = true;
    }
}

// cek session
if( isset($_SESSION["login"]) ) {
    header("Location: dokter-dashboard.php");
    exit;
}

require 'functions.php';

if( isset($_POST["login"]) ) {

    $email = $_POST["email"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM akundokter WHERE email = '$email' AND password = '$password'");

    // cek email dan password
    if(mysqli_num_rows($result) === 1 ) {
        // set session
        $_SESSION["login"] = true;

        // cek remember me
        if( isset($_POST['remember']) ) {
            //buat cookie
            setcookie('login', 'true', time() + 60);
        }

        header("Location: dokter-dashboard.php");
            exit;
        
    }
    
    $error = true;

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login RS Bhayangkara</title>
    <link rel="stylesheet" href="style_login.css">
</head>
<body>
    <nav>
        <div class="wrapper">
            <div class="logo"><a href=''>RS Bhayangkara</a></div>
            <div class="menu">
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#profil">Profil</a></li>
                    <li><a href="#fasilitas">Fasilitas</a></li>
                    <li><a href="#jadwal">Jadwal Praktek</a></li>
                    <li><a href="#alur">Alur Pelayanan</a></li>
                    <li><a href="dokter-daftar.php" class="blue-button">Sign Up</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="login">
    
        <div class="judul_login1">
                Login
        </div>
        
        <!--pesan error -->
        <?php if( isset($error) ) : ?>
        <p style="color: red; font-style: italic;">username / password salah</p>
        <?php endif; ?>
        
        <form action="" method="post">
            <div>Email</div>
            <input class="form_email" type="text" name="email" id="email">
            <div>Password</div>
            <input class="form_password" type="password" name="password" id="password">
            <a href="">
            <div class="tombol_lupa">lupa password?</div>
            </a>
            <input class="tombol_remember" type="checkbox" name="remember" id="remember">
            <label for="remember">Remember Me</label>
            <button type="submit" class="tombol1" name="login">
                <span class="tulisan_masuk1">
                Masuk
                </span>
            </button>
            <button type="submit" class="tombol2"> 
                <span class="tulisan_masukgoogle">
                Masuk dengan Google
                </span>
            </button>
            <a href="dokter-daftar.php">
                <div class="tombol_daftar">Belum punya akun? Daftar</div>
             </a>
        </form>
        

    </div>

</body>
</html>
    
    
    
    
    