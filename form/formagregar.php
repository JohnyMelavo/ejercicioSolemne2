<?php 
$oProducto = new Producto();
?>

<fieldset><legend>Datos Producto</legend>
    <form method="POST" action="accform/accProductoAgregar.php">
        <tr>
            <td>ID Producto: <input type="number" name="idproducto" id="idproducto" required="true"></td>
            <td>Nombre: <input type="text" name="nombre" id="nombre" required="true"></td>
            <td>Total $USD: <input type="number" name="total" id="total" required="true"></td>
            <td>Año: <input type="number" name="ano" id="ano" required="true"></td>        
        </tr></br>
        <tr>
            <td><input type="submit" value="GUARDAR"></td>
        </tr>
    </form>
</fieldset>
