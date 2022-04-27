<?php
include "baglan2.php";
    $query = $db->prepare("INSERT INTO iletişim SET 
    ad = ?,
    email = ?,
    telefon =?,
    mesaj = ?");
    $insert = $query->execute(array(
        @$_POST["ad"],
        @$_POST["email"],
        @$_POST["telefon"],
        @$_POST["mesaj"]
    )); 
    header("location:iletişim.php")
    ?>