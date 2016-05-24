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
        echo "Cambiar clave a:" . $oUsr->getNombre();?>

        <?php
        require './form/formcambioclave.php';
        ?>
    </body>
</html>