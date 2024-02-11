<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div class="container">

    <div class="login-register-container">
    <img src="img/uyelik.png">
        <form action="login.php" method="POST" class="login-form">
            
            <h2>Giriş Yap</h2>
            <input type="text" name="username" placeholder="Kullanıcı Adı" required>
            <input type="password" name="password" placeholder="Şifre" required>
            <button type="submit">Giriş Yap</button>
        </form>
        
        <p>Üye değil misin? Kayıt olmak için <a href="register.php">tıkla</a>.</p>
    </div>
</div>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username === "kullanici" && $password === "sifre") {
        echo "Giriş başarılı. Hoş geldiniz, $username!";
    } else {
        echo "Kullanıcı adı veya şifre hatalı.";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

        
    echo "Kullanıcı adı: $username <br> Şifre: $password <br> Kayıt başarılı!";
}
?>

</body>
</html>
