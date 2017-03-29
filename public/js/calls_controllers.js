$(document).ready(

    function()
    {

    $("#frmRegBrand").on('submit',function(e){

        /*$("#mensaje").html("");
        $("#mensaje").removeClass("alert-success");
        $("#mensaje").removeClass("alert-danger");
        $("#mensaje").fadeOut();*/

        e.preventDefault();
        
        var name = $("#name").val();
        var description = $("#description").val();

        //$.ajaxSetup(CSRF:token)
        $.ajax(
            {
                url:"brand",
                type:"POST",
                data:
                    {
                        name: name, 
                        description: description
                    },
                success: function(data)
                {
                    $("#mensaje").addClass("alert-success");
                    $("#mensaje").fadeIn();
                    $("#mensaje").children(0).html("Exito!");
                    $("#mensaje").html(data.msj);
                },
                error: function(data)
                {
                    $("#mensaje").addClass("alert-danger");
                    $("#mensaje").fadeIn();
                    $("#mensaje").children(0).html("Error!");
                    $("#mensaje").html(data.msj);
                }

            }
        );
        
    });



});