

/* FORMULARIO */    

$(document).on('submit', '#reg-form', function()
    {

        var data = $(this).serialize();
        //$('#bk_enviando').show();
        
        $.ajax({
        
        type : 'POST',
        url  : 'consulta.php',
        data : data,
        success :  function(data)
                   {                         
                        $("#pop_box").fadeIn().show(function()
                        {  
                            $("#pop_box").delay(3000).fadeOut(1000).hide(function()    
                            {
                               // $(".result").html(data);
                               // $('#bk_enviando').hide();
                            });
                        });
                        
                        console.log('ENVIADO');
                        document.getElementById("reg-form").reset();
                   }
        });
        return false;
    });

//FIN
/*
function hide1() {
    $("#hide2").fadeIn(3000).fadeOut(3000, hide2);
}*/