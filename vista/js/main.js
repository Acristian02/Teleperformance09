$(document).ready(function () {
   

    $("#btnRegistrar").click(function () {

        var nombre = $("#txtNombre").val();
        var correo = $("#txtCorreo").val();

        var objData = new FormData();

        objData.append("nombre", nombre);
        objData.append("correo", correo);
    

        $.ajax({
           
  
            url: "control/RegistroControl.php",
            type: "post",
            dataType: "json",
            data: objData,
            cache: false,
            contentType: false,
            processData: false,
            success: function (respuesta) {
                if (respuesta == "ok") {

                }
            }
        })
        alert("Registro completado");
    })
   





})