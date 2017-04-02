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

    $("#SearchOwner").click(function(e){

       $("#msjFrm1").html('');
       $("#msjFrm1").removeClass("alert alert-warning alert-dismissable");
       $("#msjFrm1").fadeOut();

       $("#name").val('');
       $("#nit").val('');
       $("#direction").val('');
       $("#phone").val('');
       $("#phone2").val('');

        var email = $("#email").val();

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

                      $("#name").val(result.name);
                      $("#nit").val(result.nit);
                      $("#direction").val(result.direction);
                      $("#phone").val(result.phone);
                      $("#phone2").val(result.phone2);
                  },
                  error: function(result)
                  {

                    $("#msjFrm1").addClass("alert alert-warning alert-dismissable");
                    $("#msjFrm1").fadeIn();
                    var msj = '<button type="button" class="close" data-dismiss="alert">&times;</button>'
                              +'<strong>¡Error!</strong> No se ha encontrado el usuario indicado.';
                    $("#msjFrm1").html(msj);

                  }

              }
          );

        }

    });

    $("#SearchContact").click(function(e){

      $("#msjFrm2").html('');
      $("#msjFrm2").removeClass("alert alert-warning alert-dismissable");
      $("#msjFrm2").fadeOut();

      $("#name2").val('');
      $("#phone3").val('');
      $("#phone4").val('');


        var email = $("#mail2").val();

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

                      $("#name2").val(result.name);
                      $("#phone3").val(result.phone);
                      $("#phone4").val(result.phone2);
                  },
                  error: function(result)
                  {

                    $("#msjFrm2").addClass("alert alert-warning alert-dismissable");
                    $("#msjFrm2").fadeIn();
                    var msj = '<button type="button" class="close" data-dismiss="alert">&times;</button>'
                              +'<strong>¡Error!</strong> No se ha encontrado el usuario indicado.';
                    $("#msjFrm2").html(msj);
                  }

              }
          );

        }

    });

    $("#SearchCarPlate").click(function(e){

        $("#msjFrm3").html('');
        $("#msjFrm3").removeClass("alert alert-warning alert-dismissable");
        $("#msjFrm3").fadeOut();

        $("#frm3Brand").val('');
        $("#frm3Model").val('');
        $("#frm3Color").val('');

        var plate = $("#plateX").val();

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

                      $("#frm3Brand").val(result.brand);
                      $("#frm3Model").val(result.model);
                      $("#frm3Color").val(result.color);
                  },
                  error: function(result)
                  {

                    $("#msjFrm3").addClass("alert alert-warning alert-dismissable");
                    $("#msjFrm3").fadeIn();
                    var msj = '<button type="button" class="close" data-dismiss="alert">&times;</button>'
                              +'<strong>¡Error!</strong> No se ha encontrado el vehiculo indicado.';
                    $("#msjFrm3").html(msj);
                  }

              }
          );
        }

    });
});
