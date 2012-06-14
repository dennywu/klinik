<?php
    require_once('../db/mysql.class.php');
    require_once('../db/global.inc.php');
    
    $id = $_GET["id"];
    
    $sql = "UPDATE tblobat set status='Non Aktif' where id = '$id' ";
    $db->query($sql);
    
    header("Location:../../obat.php");
?>
