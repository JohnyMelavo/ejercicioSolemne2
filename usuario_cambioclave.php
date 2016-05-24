<?php include('valida_acceso.php'); ?>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <!-- URL de prueba http://jsfiddle.net/33hmj/ -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="js/md5/md5.js"></script>
    <body>



        <?php
        $oUsr = ($_SESSION["oUsuario"]);
        echo "Cambiar clave a:" . $oUsr->getNombre();
        ?>


        <form id="cambioclave" >
            <fieldset>
                <legend>Personal information:</legend>
                Clave Actual:<br>
                <input type="text" name="claveactual" id="claveactual"><br>
                Nueva Clave:<br>
                <input type="text" name="clavenueva" id="clavenueva"><br>
                <br>
                Repetir Clave:<br>
                <input type="text" name="repetirclave" id="repetirclave"><br>
                <br>
                <div id="mensaje"></div>
                <input type="button" name="enviar" value ="Enviar" onclick="Cambiar()">

            </fieldset>
        </form>
    </body>
    <script>
        function Cambiar() {
            var clave;
            var claveactual = "<?= $oUsr->getClave(); ?>";
            var dato = $("#claveactual").val();
            clave = CryptoJS.MD5(dato).toString();

            if (claveactual != clave) {
                alert("Clave actual no corresponde");
                return;
            }

            if ($("#clavenueva").val() != $("#repetirclave").val()) {
                alert("Su nueva clave no coincide");
                return;
            }

            $.ajax({
                url: 'accform/accUsuarioUPDClave.php',
                type: 'POST',
                data: "newpwd=" + CryptoJS.MD5($("#clavenueva").val()).toString(),
                success: function (datos) {
                    alert("clave cambiada");
                }
            });
        }
    </script> 
</html>