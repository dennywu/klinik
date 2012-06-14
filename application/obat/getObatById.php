<?php
    require_once('../db/mysql.class.php');
    require_once('../db/global.inc.php');

    $id = $_GET['id'];
    $sql = "SELECT * FROM tblobat where id = '$id'";
    $result = mysql_query($sql);
    $obat;
    while($row = mysql_fetch_array($result)){
        $obat = $row;
    }
    echo json_encode($obat);
?>
