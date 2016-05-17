<?php
include("../librerias.php");

$oPro=new Producto();
foreach ($_POST as $id){
	$oPro->agregarProducto($id,$nombre,$total,$ano);	
};


?>



<script>
	document.location.href="<?=PATHURL?>exportaciones_add.php";
</script>