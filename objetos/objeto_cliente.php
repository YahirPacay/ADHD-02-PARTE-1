<?php
    //incluir el archivo Cliente.php para poder utilizar
    //el código que contienen
    include_once('../clases/Cliente.php');
    //crear un objeto de tipo Cliente = instanciar la clase
    $cliente = new Cliente();
    
    $cliente->nit=$_GET["inputNit"];
    $cliente->telefono=$_GET["inputNumero"];
    $cliente->apellido=$_GET["txtApellido"];
    $cliente->asignarNombre($_GET["txtNombre"]);
    $cliente->direccion=$_GET["txtDireccion"];
    
    echo $cliente->verDatos();
    //echo "<br>". $cliente->nombreCompleto();
?>