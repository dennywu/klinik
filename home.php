<?php
    ob_clean();
    session_start();
    if($_SESSION['user']  == null)
    {
        header("Location:index.php");
    }
?>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/site.css" rel="stylesheet" />
        <link href="css/bootstrap/css/bootstrap.css" rel="stylesheet"/>
        <link href="css/bootstrap/css/bootstrap-responsive.css" rel="stylesheet"/>
        <link href="css/home.css" rel="stylesheet"/>
        <script src="scripts/plugins/jquery-1.7.1.min.js" type="text/javascript"></script>
        <script src="scripts/plugins/bootstrap.js" type="text/javascript"></script>
    </head>
    <body>
        <?php include_once 'navigation.php'; ?>
    </body>
</html>