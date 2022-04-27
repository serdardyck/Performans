<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="hakimizda.css">
    <link rel="stylesheet" href="galeri.css">
    <link rel="stylesheet" href="nav.css">
    <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <title>hakımızda</title>
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
        <img src="images/benimfoto.jpg" alt="" class="alt">
           <h2>serdar dayıcık</h1>
           <h4>Serdar dayıcık | | Developer</h4>
        <div class="metin">
             Merhabalar Ben Serdar Dayıcık 17 yaşındayım Yahya Günsur Mesleki Ve Teknik Anadolu Lisesinde Okuyorum.<br>
              Bu siteyi insanlar sadece telefonu değilde bilgisayarlarındanda telefon rehberi kulanabilsin diye yaptım
             ve bu siteyi yaparken gercekten cok uğraştım iyi dersler hocam.
        </div>
        <div class="full-img" id="fullimgBox">
        <img src="images/img1.jpg" id="fullimg">
        <span onclick="closefullimg()">X</span>
    </div>
    <div class="img-gallery">
        <img src="images/img1.jpg" onclick="openfullimg(this.src)">
        <img src="images/img2.jpg" onclick="openfullimg(this.src)">
        <img src="images/img3.jpg" onclick="openfullimg(this.src)">
        <img src="images/img4.jpg" onclick="openfullimg(this.src)">
        <img src="images/img5.jpg" onclick="openfullimg(this.src)">
        <img src="images/img6.jpg" onclick="openfullimg(this.src)">
        <img src="images/img7.jpg" onclick="openfullimg(this.src)">
        <img src="images/img8.jpg" onclick="openfullimg(this.src)">
        <img src="images/img9.jpg" onclick="openfullimg(this.src)">
        <img src="images/img10.jpg" onclick="openfullimg(this.src)">
        <img src="images/img11.jpg" onclick="openfullimg(this.src)">
        <img src="images/img12.jpg" onclick="openfullimg(this.src)">

    </div>

   <script>
       var fullimgBox = document.getElementById("fullimgBox");
       var fullimg = document.getElementById("fullimg");

       function openfullimg(pic){
        fullimgBox.style.display ="flex";
        fullimg.src = pic;
       }
       function closefullimg(){
        fullimgBox.style.display ="none";

       }
   </script>
</body>
</html>