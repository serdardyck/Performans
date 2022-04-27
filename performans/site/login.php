<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Giriş Yap</title>
   <link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
    <div class="login">
        <div class="login-screen">
           <div class="app-title">
                <h1>Giriş Yap</h1>
           </div>
        <form action="islem.php" method="post">
           <div class="login-form">
               <div class="control-group">
                   <input type="text" name="username" class="login-field" placeholder="Kullanıcı Adı" id="login-name">
                   <label for="login-name" class="login-field-icon fui-user"></label>
               </div>
               <div class="control-group">
                   <input type="password" name="password" class="login-field" placeholder="Şifre" id="login-pass">
                   <label for="login-pass" class="login-field-icon fui-user"></label>
               </div>
               <button name="giris" class="btn btn-primary btn-large btn-block">Giriş Yap</button>
               </div>
         </form>
              <a href="kayit.php"><button class="btn btn-primary btn-large btn-block">Kayıt Ol</button></a>
           </div>
    </div>
</body>
</html>