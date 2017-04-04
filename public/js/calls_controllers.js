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

    $("#OR1_btn").click(function(e){

       $("#OR1").find("#Msj").html('');
       $("#OR1").find("#Msj").removeClass("alert alert-warning alert-dismissable");
       $("#OR1").find("#Msj").fadeOut();

       $("#OR1").find("#name").val('');
       $("#OR1").find("#nit").val('');
       $("#OR1").find("#direction").val('');
       $("#OR1").find("#phone").val('');
       $("#OR1").find("#phone2").val('');
       $("#OR1").find("#id").val('');

        var email = $("#OR1").find("#mail").val();

        if(email!='')
        {
          /*
          Esta funcion sirve para evitar que la pagina se recargue con Jquery en llamadas a travez de ajax
          */
          e.preventDefault();
          $.ajax(
              {
                  //async:false,
                  //cache:false,
                  url:"user/mail",
                  type:"POST",
                  data:
                      {
                          mail: email
                      },
                  success: function(result)
                  {

                      $("#OR1").find("#name").val(result.name);
                      $("#OR1").find("#nit").val(result.nit);
                      $("#OR1").find("#direction").val(result.direction);
                      $("#OR1").find("#phone").val(result.phone);
                      $("#OR1").find("#phone2").val(result.phone2);
                      $("#OR1").find("#id").val(result.id);
                  },
                  error: function(result)
                  {

                    $("#OR1").find("#Msj").addClass("alert alert-warning alert-dismissable");
                    $("#OR1").find("#Msj").fadeIn();
                    var msj = '<button type="button" class="close" data-dismiss="alert">&times;</button>'
                              +'<strong>¡Error!</strong> No se ha encontrado el usuario indicado.';
                    $("#OR1").find("#Msj").html(msj);

                  }

              }
          );

        }

    });

    $("#OR2_btn").click(function(e){

      $("#OR2").find("#Msj").html('');
      $("#OR2").find("#Msj").removeClass("alert alert-warning alert-dismissable");
      $("#OR2").find("#Msj").fadeOut();

      $("#OR2").find("#name").val('');
      $("#OR2").find("#phone").val('');
      $("#OR2").find("#phone2").val('');
      $("#OR2").find("#id").val('');


        var email = $("#OR2").find("#mail").val();

        if(email!='')
        {
          /*
          Esta funcion sirve para evitar que la pagina se recargue con Jquery en llamadas a travez de ajax
          */
          e.preventDefault();
          $.ajax(
              {
                  url:"user/mail",
                  type:"POST",
                  data:
                      {
                          mail: email
                      },
                  success: function(result)
                  {

                      $("#OR2").find("#name").val(result.name);
                      $("#OR2").find("#phone").val(result.phone);
                      $("#OR2").find("#phone2").val(result.phone2);
                      $("#OR2").find("#id").val(result.id);
                  },
                  error: function(result)
                  {

                    $("#OR2").find("#Msj").addClass("alert alert-warning alert-dismissable");
                    $("#OR2").find("#Msj").fadeIn();
                    var msj = '<button type="button" class="close" data-dismiss="alert">&times;</button>'
                              +'<strong>¡Error!</strong> No se ha encontrado el usuario indicado.';
                    $("#OR2").find("#Msj").html(msj);
                  }

              }
          );

        }

    });

    $("#OR3_btn").click(function(e){

        $("#OR3").find("#Msj").html('');
        $("#OR3").find("#Msj").removeClass("alert alert-warning alert-dismissable");
        $("#OR3").find("#Msj").fadeOut();

        $("#OR3").find("#brand").val('');
        $("#OR3").find("#model").val('');
        $("#OR3").find("#color").val('');
        $("#OR3").find("#id").val('');

        var plate = $("#OR3").find("#plate").val();

        if(plate != '')
        {
          e.preventDefault();
          $.ajax(
              {
                  url:"car/plate",
                  type:"POST",
                  data:
                      {
                          plate: plate
                      },
                  success: function(result)
                  {

                      $("#OR3").find("#brand").val(result.brand);
                      $("#OR3").find("#model").val(result.model);
                      $("#OR3").find("#color").val(result.color);
                      $("#OR3").find("#id").val(result.id);
                  },
                  error: function(result)
                  {

                    $("#OR3").find("#Msj").addClass("alert alert-warning alert-dismissable");
                    $("#OR3").find("#Msj").fadeIn();
                    var msj = '<button type="button" class="close" data-dismiss="alert">&times;</button>'
                              +'<strong>¡Error!</strong> No se ha encontrado el vehiculo indicado.';
                    $("#OR3").find("#Msj").html(msj);
                  }

              }
          );
        }

    });

    $("#OR4_btn").click(function(e){
      var fuel = $("#OR4").find("#fuel_level").val();
      var mi = $("#OR4").find("#mi").val();
      var observations = $("#OR4").find("#observations").val();

      if(fuel != '' && mi != '')
      {



        $("#OR4").find("#Msj").html('');
        $("#OR4").find("#Msj").removeClass("alert alert-warning alert-dismissable");
        $("#OR4").find("#Msj").fadeOut();

        var owner = $("#OR1").find("#id").val();
        var contact = $("#OR2").find("#id").val();
        var car =  $("#OR3").find("#id").val();

        var cadena = "El propietario es: "+owner+" El Contacto es: "+contact+" El vehiculo es: "+car;



        if(owner != '' && contact != '' && car != '')
        {
          e.preventDefault();
          $.ajax(
              {
                  url:"car/plate",
                  type:"POST",
                  data:
                      {
                          plate: plate
                      },
                  success: function(result)
                  {

                      $("#OR3").find("#brand").val(result.brand);
                      $("#OR3").find("#model").val(result.model);
                      $("#OR3").find("#color").val(result.color);
                      $("#OR3").find("#id").val(result.id);
                  },
                  error: function(result)
                  {

                    $("#OR3").find("#Msj").addClass("alert alert-warning alert-dismissable");
                    $("#OR3").find("#Msj").fadeIn();
                    var msj = '<button type="button" class="close" data-dismiss="alert">&times;</button>'
                              +'<strong>¡Error!</strong> No se ha encontrado el vehiculo indicado.';
                    $("#OR3").find("#Msj").html(msj);
                  }

              }
          );
        }
        else
        {
          alert('Mula llene los datos');
        }
    }

    });
});
