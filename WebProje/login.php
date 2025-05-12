<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


// Kullanıcı adı ve şifre burada tanımlanabilir
$valid_username = "b231210***@sakarya.edu.tr";
$valid_password = "b231210***";

// Formdan gelen kullanıcı adı ve şifreyi al
$username = $_POST['username'];
$password = $_POST['password'];

// Girilen kullanıcı adı ve şifrenin doğruluğunu kontrol et
if ($username === $valid_username && $password === $valid_password) {
    // Doğruysa ana sayfaya yönlendir
    echo "Bilgileriniz doğrudur";
    exit;
} else {
    // Yanlışsa tekrar login sayfasına yönlendir
    header("refresh:5;url=login.html");
    echo "Kullanıcı adı veya şifre yanlış. 5 saniye içinde tekrar giriş sayfasına yönlendirileceksiniz.";
    exit;
}
?>
