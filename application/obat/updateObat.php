<?php
    require_once('../db/mysql.class.php');
    require_once('../db/global.inc.php');
    
    $id = $_POST["id"];
    $name = $_POST["namaobat"];
    $deskripsi = $_POST["deskripsiobat"];
    
    $sql = "UPDATE tblobat set nama = '$name',deskripsi ='$deskripsi' where id = '$id' ";
    $db->query($sql);
    
    header("Location:../../obat.php");
?>
