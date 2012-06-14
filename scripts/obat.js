var CLINIC = {};
CLINIC.OBAT = {};
$(document).ready(function(){
    var obat = CLINIC.OBAT;
    $("#addObat").click(obat.addObat);
});

CLINIC.OBAT.addObat = function(){
    if($("#addObatModal").length == 0){
        $("#temp-contain").load("views/tambahObat.html",function(){
            $("#addObatModal").modal('show');
        });
    }else{
        $("#addObatModal").modal('show');
    }
}
CLINIC.OBAT.updateObat = function(id){
    $.ajax({
        type:'GET',
        url:'application/obat/getObatById.php?id='+id,
        dataType:'json',
        success:function(data){
            if(data == null)
                alert("Data Tidak DiTemukan");
            else{
                if($("#updateObatModal").length == 0){
                    $("#temp-contain").load("views/ubahObat.html",function(){
                        CLINIC.OBAT.showUpdateObat(data);
                    });
                }else{
                    CLINIC.OBAT.showUpdateObat(data);
                }
            }
               
        }
    });
}
CLINIC.OBAT.showUpdateObat = function(data){
    $("#idUpdateObat").val(data.id);
    $("#namaobatUpdateObat").val(data.nama);
    $("#deskripsiobatUpdateObat").val(data.deskripsi);
    $("#updateObatModal").modal('show');
}