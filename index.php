<?php
/**
 * Created by PhpStorm.
 * User: luiscobian
 * Date: 2019-04-05
 * Time: 11:22
 */
?>
<b>Nombre: </b><input type="text" name="nombre" id="nombre"> <br><br>
<input type="file" name="foto" id="foto"><br>
<button onclick="convert();" >Convertir</button>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="application/javascript">

    function convert() {
        var archivo = $('#foto')[0].files[0];
        var reader = new FileReader();

        reader.addEventListener("load", function () {
            //alert(reader.result);
            var campos = new Object();
            campos.nombre = $('#nombre').val();
            campos.foto = reader.result;
            var json = JSON.stringify(campos);
            alert(json);
        },false);

        if(archivo){
            reader.readAsDataURL(archivo);
        }

    }

</script>
