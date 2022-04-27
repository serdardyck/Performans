<?php
include "baglan2.php";
$id = @$_GET['duzenle'];  
$query = $db->query("SELECT * FROM kayitlar WHERE id = '{$id}'")->fetch(PDO::FETCH_ASSOC);
if (isset($_POST["duzenle"])) {
$query = $db->prepare("UPDATE kayitlar SET
ad = :ad,
soyadi = :soyadi,
numara = :numara
WHERE id = :id");
$update = $query->execute(array(
     "ad" => $_POST["ad"],
     "soyadi" => $_POST["soyadi"],
     "numara" => $_POST["numara"],
     "id" => $id
));
if($update){
    echo "Kayıt İşlemi Tamamlandı, Lütfen Biraz Bekleyin";
    header("Refresh:2;kaydet.php");
} else{
     echo "Bir Hata Oluştu Lütfen Tekrar Giriş Yapmayı Deneyiniz";
}

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>not defteri</title>
    <link rel="stylesheet" href="nav.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        .ortala{
            text-align:center;
            padding:50px
            
        }
        input{
            margin:0 auto;
        }
        h4{
            color:red;
        }
        .col-md-6{
            margin:0 auto;
        }
        .container{
          margin:
        }
    </style>
</head>
<body>
<header>
            <h1>Serdar Company</h1>
            <nav>
                <ul class="nav__links">
                    <li><a href="anasayfa.php">Ana Sayfa</a></li>
                    <li><a href="arama.php">Rehber</a></li>
                    <li><a href="kaydet.php">Kayıt</a></li>
                    <li><a href="hakimizda.php">Hakımızda</a></li>
                    <li><a href="iletişim.php">İletişim</a></li>
                </ul>
            </nav>
            <a class="cta" href="cikiş.php">Çıkış Yap</a>
            <p class="menu cta">Menu</p>
        </header>
        <div id="mobile__menu" class="overlay">
            <a class="close">&times;</a>
            <div class="overlay__content">
                <a href="index.php">Ana Sayfa</a>
                <a href="arama.php">Rehber</a>
                <a href="kaydet.php">Kayıt</a>
                <a href="hakimizda.php">Hakımızda</a>
                <a href="iletişim.php">İletişim</a>
                <a href="cikiş.php">Çıkış Yap</a>
            </div>
        </div>
        <script type="text/javascript" src="mobile.js"></script>
</div>
<form action=""method="post" class="ortala">
  <div class="form-group justify-content-center">
      <label><b>isim</b></label>
     <input type="text" value="<?=$query['ad'] ?>" class="form-control w-50 p-3 p-3 mb-2 bg-dark text-white" name="ad">
     <label><b>soyad</b></label>
     <input type="text" value="<?=$query['soyadi'] ?>" class="form-control w-50 p-3 p-3 mb-2 bg-dark text-white" name="soyadi">
     <label><b>soyad</b></label>
     <input type="text" value="<?=$query['numara'] ?>" class="form-control w-50 p-3 p-3 mb-2 bg-dark text-white" name="numara">
    <!--<textarea class="form-control w-50 p-3 p-3 mb-2 bg-dark text-white" id="exampleFormControlTextarea1" rows="6" placeholder="Buraya Yazınız..." name="notcuk"></textarea>-->
    <button type="submit" name="duzenle"class="btn btn-primary">Kaydet</button>
  </div>
</form>
</body>
</html>