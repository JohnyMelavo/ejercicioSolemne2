<?php
$oProducto = new Producto();
?>

<fieldset>
    <form method="POST" action="accform/accProductoAgregar.php">
        <tr>
            <td>ID Producto: <input type="number" name="idproducto" id="idproducto" required="true"</td>
            <td>Nombre: <input type="text" name="nombre" id="nombre" required="true"</td>
            <td>Total $: <input type="number" name="total" id="total" required="true"</td>
            <td>Año: <input type="number" name="anio" id="anio" required="true"</td>
        </tr></br>
        <tr>
            <td><input type="submit" name="guardar"></td>
        </tr>
    </form>

</fieldset>


</form>

<?php
/*
  <form method="post" action="accform/accProductoAgregar.php">
  <?php
  While($Registro=$oProducto->Selecciona()){

  ?>

  <input type="checkbox" name=elimina<?=$Registro->IdProducto()?> value="<?=$Registro->IdProducto()?>">
  <?=$Registro->Nombre()?>/<?=$Registro->Ano()?>
  <br>
  <?php
  }

  ?>

 *  */
?>