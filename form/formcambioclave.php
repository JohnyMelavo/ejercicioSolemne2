
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
            data: "clave=" + CryptoJS.MD5($("#clavenueva").val()).toString(),
            success: function (datos) {
                alert("clave cambiada");
            }
        });
    }
</script> 