<?php
    require_once('../db/mysql.class.php');
    require_once('../db/global.inc.php');
    
    $name = $_POST["namaobat"];
    $deskripsi = $_POST["deskripsiobat"];
    session_start();
    $ownerid = $_SESSION["ownerid"];
    $sql = "INSERT INTO tblobat (nama,deskripsi,status,ownerid) values ('$name','$deskripsi','Aktif','$ownerid')";
    $db->query($sql);
    
    header("Location:../../obat.php");
?>
