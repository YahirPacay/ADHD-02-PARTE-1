<?php
    include_once("../clases/Administracion.php");
    //crear un nuevo objeto
    $admin = new Administracion();
    //atributos Heredados de persona
    $admin->asignarNombre($_POST["txtNombre"]);
    $admin->apellido=$_POST["txtApellido"];
    $admin->direccion=$_POST["txtDireccion"];
    $admin->telefono=$_POST["inputNumero"];
    //atrinuto heredado de empleado
    $admin->codigo=$_POST["inputCodigo"];
    $admin->sueldoBase=$_POST["inputSueldo"];
    $admin->nivelAcademico=$_POST["txtAcademico"];
    //atributo de la clase 
    $admin->bonificacion=$_POST["inputBonificacion"];
    echo "<br> Sueldo liquido: ". $admin->calcularSueldoLiquido();
    echo $admin->verDatos();
?>