<?php
$oProducto = new Producto();
?>

<fieldset><legend>Cambiando su clave</legend>
    <form method="POST" action="../accform/accUsuarioUPDClave.php">
        <div>Contraseña actual:</div>
        <div><input name="clave" type=text></div>
        <br>
        <div>Contraseña nueva:</div>
        <div><input name="claveNueva" type="password"></div>
        <br>
        <div>Repita contraseña nueva:</div>
        <div><input name="claveNueva2" type="password"></div>
        <input type="submit" value=Acceder>
    </form>
</fieldset>