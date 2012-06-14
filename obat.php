<?php
    ob_clean();
    session_start();
    if($_SESSION['user']  == null)
    {
        header("Location:index.php");
    }
    require_once 'application/obat/obatController.php';
?>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/site.css" rel="stylesheet"/>
        <link href="css/bootstrap/css/bootstrap.css" rel="stylesheet"/>
        <link href="css/bootstrap/css/bootstrap-responsive.css" rel="stylesheet"/>
        <link href="css/obat.css" rel="stylesheet"/>
        <script src="scripts/plugins/jquery-1.7.1.min.js" type="text/javascript"></script>
        <script src="scripts/plugins/bootstrap.js" type="text/javascript"></script>
        <script src="scripts/plugins/bootstrap-dropdown.js" type="text/javascript"></script>
        <script src="scripts/plugins/bootstrap-modal.js" type="text/javascript"></script>
        <script src="scripts/obat.js" type="text/javascript"></script>
        <script type="text/javascript">
            $(document).ready(function(){ $('.dropdown-toggle').dropdown(); });
        </script>
    </head>
    <body>
        <?php include_once 'navigation.php'; ?>
        <div class='container'>
            <div class='container-fluid'>
                <div class='row-fluid'>
                    <div class='span9'>
                        <table class="table table-striped" id="tblListObat">
                            <thead><tr><th>#</th><th>Nama Obat</th><th>Deskripsi</th><th>Status</th><th></th></tr></thead>
                            <tbody>
                                <?php echo showListViewObat(); ?>
                            </tbody>
                        </table>
                    </div>
                    <div class='span3'>
                        <div>
                            <button class="btn btn-success" id="addObat">Tambah Obat</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="temp-contain"></div>
    </body>
</html>