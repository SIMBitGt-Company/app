$(document).ready(

    function()
    {


    $("#NewUser").click(function(){
        $('#DivRegUsuario').show();
        $('#DivRegCar').hide();
        $('#DivRegBrand').hide();
    });

    $("#NewCar").click(function(){
        $('#DivRegUsuario').hide();
        $('#DivRegCar').show();
        $('#DivRegBrand').hide();
    });

    $("#NewBrand").click(function(){
        $('#DivRegUsuario').hide();
        $('#DivRegCar').hide();
        $('#DivRegBrand').show();
    });



});