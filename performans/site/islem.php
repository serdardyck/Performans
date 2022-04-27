<?php
ob_start();
session_start();
require "baglan.php";

if(isset($_POST['kayit'])){
   $username = $_POST['username'];
   $password = $_POST['password'];
   $password_again = @$_POST['password_again'];

   if(!$username){
       echo "Kullanıcı Adı Alanı Boş bırakılamaz";
   } elseif(!$password || !$password_again){
       echo "Şifre Alanı Boş Bırakılamaz";
   } elseif($password != $password_again){
       echo "Girdiginiz Şifreler Birbirleriyle Aynı Değil";
   } else{
         // veritabanı kayıt islemi
         $sorgu = $db->prepare('INSERT INTO kullanici SET user_name = ?, user_password = ?');
         $ekle = $sorgu->execute([
            $username,$password
         ]);
         if($ekle){
             echo "Kayıt İşlemi Tamamlandı, Lütfen Biraz Bekleyin";
             header("Refresh:1;login.php");
         } else{
              echo "Bir Hata Oluştu Lütfen Tekrar Giriş Yapmayı Deneyiniz";
         }
   }
}
if(isset($_POST['giris'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    if(!$username){
        echo "Kullanıcı Adınız Yanlış Lütfen Tekrar Deneyiniz";
    } elseif(!$password){
        echo"Şifreniz Yanlış Lütfen Tekrar Deneyiniz";
    } else{
        $kullanici_sor = $db->prepare("SELECT * FROM kullanici WHERE user_name = ? && user_password = ?");
        $kullanici_sor->execute([
            $username, $password
        ]);
        $say = $kullanici_sor->rowCount();
        if($say==1){
            $_SESSION['username']=$username;
            echo "Girişiniz Başarılı Bir Şekilde Tamamlandı, Lütfen Bekleyiniz";
            header("Refresh:1;site2/kaydet.php");
        } else{
            echo "Bir Hata Oluştu Lütfen Tekrar Deneyiniz";
        }
    }
}



?>