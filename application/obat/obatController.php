<?php
    require_once('application/db/mysql.class.php');
    require_once('application/db/global.inc.php');

    function showListViewObat(){
        $ownerid = $_SESSION["ownerid"];
        $a="SELECT * FROM tblobat where ownerid = '$ownerid'";
        $result = mysql_query($a);
        $obat = array();
        while($row = mysql_fetch_array($result)){
            array_push($obat, $row);
        }
        
        if(count($obat) != 0){
            for($i = 0; $i < count($obat); $i++){
                $html[] = "<tr>
                            <td class='span1'>".($i + 1)."</td>
                            <td class='span3'>".$obat[$i]['nama']."</td>
                            <td class='span4'>".$obat[$i]['deskripsi']."</td>
                            <td class='span2'>".$obat[$i]['status']."</td>
                            <td class='span2'>
                                <div class='btn-group'>
                                    <a class='btn dropdown-toggle btn-mini' data-toggle='dropdown' href='#'>
                                        Action
                                        <span class='caret'></span>
                                    </a>
                                    <ul class='dropdown-menu' >
                                    <li><a href='#' onclick='CLINIC.OBAT.updateObat(".$obat[$i]['id'].")'>Ubah</a></li>";
                if($obat[$i]['status'] == "Aktif"){
                    $html[] = "<li><a href='application/obat/updateStatusObatToNonAktif.php?id=".$obat[$i]['id']."'>Non Aktif</a></li>";
                }
                else if($obat[$i]['status'] == "Non Aktif"){
                    $html[] = "<li><a href='application/obat/updateStatusObatToAktif.php?id=".$obat[$i]['id']."'>Aktif</a></li>";
                }                        
                //$html[] = "<li><a href=''>Hapus</a></li>
                $html[] = "</ul</div></td></tr>";
            }
            return join('',$html);
        }
    }
?>
