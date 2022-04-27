<?php
include "baglan2.php";
$query = $db->prepare("INSERT INTO kayitlar SET 
ad = ?,
soyadi = ?,
numara =?");
$insert = $query->execute(array(
    @$_POST["ad"],
    @$_POST["soyadi"],
    @$_POST["numara"]
)); 
$query = $db->prepare("DELETE FROM kayitlar WHERE id = :id");
$delete = $query->execute(array(
   'id' => @$_GET['sil']
));
header("location:kaydet.php")
?>