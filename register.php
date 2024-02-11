<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
        <div class="login-register-container">
            <img src="img/kayit.png">
            <form action="register.php" method="POST" class="register-form">
                <h2>Kayıt Ol</h2>
                <input type="text" name="username" placeholder="Kullanıcı Adı" required>
                <input type="password" name="password" placeholder="Şifre" required>
                <button type="submit">Kayıt Ol</button>
            </form>
            <p>Üye girişi için <a href="index.php">tıkla</a>.</p>
        </div>
    </div>
    <?php 
    
    
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    echo "Kullanıcı adı: $username <br> Şifre: $password <br> Kayıt başarılı!";
}
    ?>
</body>
</html>