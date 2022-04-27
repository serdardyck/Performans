<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="nav.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Rehber</title>
    <style>
        body{
            text-align:center;
            margin:0 auto;
        }
        input{
            color: red;
        }
        .alo{
            padding:8px;
            margin:1px;
            height: 56px;
            width:100px;
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
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-header">
                        <h4>Arama Kutucuğu </h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="justify-content-center ">

                                <form action="" method="GET">
                                    <div class="input-group mb-3">
                                        <input type="text" name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" class="form-control w-50 p-3 p-3 mb-2 bg-dark text-white" placeholder="buraya yazınız...">

                                    </div>
                                    <button type="submit" class="btn btn-primary">arama</button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>isim</th>
                                    <th>soyad</th>
                                    <th>telefon</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $con = mysqli_connect("localhost","root","","performans");

                                    if(isset($_GET['search']))
                                    {
                                        $filtervalues = $_GET['search'];
                                        $query = "SELECT * FROM kayitlar WHERE CONCAT(ad,soyadi,numara) LIKE '%$filtervalues%' ";
                                        $query_run = mysqli_query($con, $query);
                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $items)
                                            {
                                                ?>
                                                <tr>
                                                    <td><?= $items['id']; ?></td>
                                                    <td><?= $items['ad']; ?></td>
                                                    <td><?= $items['soyadi']; ?></td>
                                                    <td><?= $items['numara']; ?></td>
                                                </tr>
                                                <?php
                                            }
                                        }
                                        else
                                        {
                                            ?>
                                                <tr>
                                                    <td colspan="7">Sonuc Yok</td>
                                                </tr>
                                            <?php
                                        }
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>