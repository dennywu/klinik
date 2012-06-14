<?php
    require_once('db/mysql.class.php');
    require_once('db/global.inc.php');
    
    $user = $_POST["Username"];
    $pass = $_POST["Password"];
    
    $sql = "SELECT * FROM tbluser where username = '$user' and password = '$pass'";
    $result = $db->query($sql);
    $row = $result->fetch();
    if($row == false){
        header("Location:../index.php");
    }
    else{
        session_start();
        $_SESSION["user"] = $row["username"];
        $_SESSION["ownerid"] = $row["ownerid"];
        header("Location:../home.php");
    }
?>
