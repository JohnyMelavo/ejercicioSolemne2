<?php
include("../librerias.php");
$oPro=new Producto();
$id = $_POST['idproducto'];
$nombre = $_POST['nombre'];
$total = $_POST['total'];
$ano = $_POST['anio'];

$oPro->Agrega($id,$nombre,$total,$ano);	

?>

<script>
	document.location.href="<?=PATHURL?>exportaciones_add.php";
</script>