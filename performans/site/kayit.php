<?php
require 'baglan.php';
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Kayıt Ol</title>
   <link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
    <div class="login">
        <div class="login-screen">
           <div class="app-title">
                <h1>Kayıt Ol</h1>
           </div>
        <form action="islem.php" method="post">
           <div class="login-form">
               <div class="control-group">
                   <input type="text" name="username" class="login-field" placeholder="Kullanıcı Adı" id="login-name">
                   <label for="login-name" class="login-field-icon fui-user"></label>
               </div>
               <div class="control-group">
                   <input type="password" name="password_again" class="login-field" placeholder="Şifre" id="login-pass">
                   <label for="login-pass" class="login-field-icon fui-user"></label>
               </div>
               <div class="control-group">
                   <input type="password" name="password" class="login-field" placeholder="Tekrar Şifre" id="login-pass">
                   <label for="login-pass" class="login-field-icon fui-user"></label>
               </div>
               <button href="login.php" name="kayit" class="btn btn-primary btn-large btn-block">Kayıt Ol</button>
           </div>
        </form>
        <a href="login.php"><button href="index.php" class="btn btn-primary btn-large btn-block">Giriş Yap</button></a>
        </div>
    </div>
</body>
</html>