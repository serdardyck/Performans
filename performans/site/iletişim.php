<!DOCTYPE html>
<html>
<head>
	<title>İletişim</title>
	<link rel="stylesheet" href="iletişim.css">
	<link rel="stylesheet" href="nav.css">
	<link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
<head>  
<body>
<header>
            <h1>Serdar Company</h1>
            <nav>
                <ul class="nav__links">
                    <li><a href="hakimizda.php">Hakımızda</a></li>
                    <li><a href="iletişim.php">İletişim</a></li>
                </ul>
            </nav>
            <a class="cta" href="login.php">Giriş Yap</a>
            <p class="menu cta">Menu</p>
        </header>
        <div id="mobile__menu" class="overlay">
            <a class="close">&times;</a>
            <div class="overlay__content">
                <a href="hakimizda.php">Hakımızda</a>
                <a href="iletişim.php">İletişim</a>
                <a href="cikiş.php">Çıkış Yap</a>
            </div>
        </div>
        <script type="text/javascript" src="mobile.js"></script>
	<div class="container">
		<form action="iletişim-host.php" method="POST">
		 <div class="contact-box row">
			<div class="left"></div>
			<div class="right">
				<h2>Bize Ulaşın</h2>
				<input type="text" class="field" name="ad"  placeholder="Adınız">
				<input type="text" class="field" name="email" placeholder="Emailiniz">
				<input type="text" class="field" name="telefon" placeholder="Telfon">
			 <textarea type="text" class="field" name="mesaj" placeholder="mesajınızı giriniz...."></textarea>
				<button class="btn">Gönder</button>
			</div>
		 </div>
	  </form>
	</div>
</body>
</html>