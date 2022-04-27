<?php
include "baglan2.php";
$query = $db->prepare("DELETE FROM kayitlar WHERE id = :id");
$delete = $query->execute(array(
   'id' => @$_GET['sil']
));

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>kayıt</title>
    <link rel="stylesheet" href="nav.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Convergence&family=Lato:wght@300;400;700;900&family=Mukta:wght@300;400;600;700;800&family=Noto+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        .ortala{
            margin-left: 10%;
            margin-right:10%;
            width: 1150px;
        }
        .yazı{
            text-align:center;
            padding:20px
            
        }
        input{
            margin:0 auto;
        }
        }
    </style>
</head>
<body>
<header>
            <h1>Serdar Company</h1>
            <nav>
                <ul class="nav__links">
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
                <a href="arama.php">Rehber</a>
                <a href="kaydet.php">Kayıt</a>
                <a href="hakimizda.php">Hakımızda</a>
                <a href="iletişim.php">İletişim</a>
                <a href="cikiş.php">Çıkış Yap</a>
            </div>
        </div>
        <script type="text/javascript" src="mobile.js"></script>   
        <br>
        <br> 
</div class="yazı">
<form action="kaydet-host.php" method="POST" class="yazı">
  <div class="form-group justify-content-center">
      <h5>İsim</h5><br>
      <input type="text" class="form-control w-50 p-3 p-3 mb-2 bg-dark text-white" placeholder="Adınızı buraya yazınız..." name="ad"><br>
      <h5>Soyad</h5><br>
      <input type="text" class="form-control w-50 p-3 p-3 mb-2 bg-dark text-white" placeholder="Soyadınızı buraya yazınız..."name="soyadi"><br>
      <h5>Telefon</h5><br>
      <input type="text" class="form-control w-50 p-3 p-3 mb-2 bg-dark text-white" placeholder="Telefonunuzu buraya yazınız..."name="numara"><br>
      <button name="yazı"type="submit" class="btn btn-primary">Kaydet</button>
     <!--<textarea class="form-control w-50 p-3 p-3 mb-2 bg-dark text-white" id="exampleFormControlTextarea1" rows="6" placeholder="Buraya Yazınız..." name="notcuk"></textarea>-->
  </div>
</form>
<br>
<div class="ortala">
<h2>Geçmiş</h2>
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">isim</th>
      <th scope="col">soyad</th>
      <th scope="col">telefon</th>
      <th>Düzenle</th>
      <th>Sil</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $query = $db->query("SELECT * FROM kayitlar", PDO::FETCH_ASSOC);
    if ( $query->rowCount() ){
         foreach( $query as $row ){?>
    <tr>
      <th scope="row"><?=$row['id']?></th>
      <td><?=$row['ad']?></td>
      <td><?=$row['soyadi']?></td>
      <td><?=$row['numara']?></td>
      <td><a href="duzenle.php?duzenle=<?=$row['id']?>"><button class="btn btn-info btn-sm">Düzenle</button></a></td>
      <td><a href="kaydet.php?sil=<?=$row["id"] ?>"><button class="btn btn-danger btn-sm">sil</button></a></td>
    </tr>
    <?php
    }}
    ?>

  </tbody>
</table>

</div>
</body>
</html>