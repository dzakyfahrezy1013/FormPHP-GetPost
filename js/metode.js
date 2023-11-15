$(document).ready(function(){

    $("input[type=radio]").change(function(){
     var method = $(this).val();
     $("#form").attr("method", method); 
    });
    
    $("#submit").click(function(){ 
        var nama = $("#nama").val();
        var alamat = $("#alamat").val();
        
        if( nama != '' || alamat !='' ){
            return true; 
        }	
        else{
            alert("Tolong diisi...!!!!!!");
            return false;
        }
    });
    });