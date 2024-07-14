<?php
    include_once('../clases/Empleado.php');
    $emple = new Empleado();
    //atributos de la clase Empleado    
    $emple->codigo=$_GET["inputCodigo"];
    $emple->nivelAcademico=$_GET["txtAcademico"];
    $emple->sueldoBase=$_GET["inputSueldo"];

    //atributos que hereda de la clase Persona
    $emple->asignarNombre($_GET["txtNombre"]);
    $emple->apellido=$_GET["txtApellido"];
    $emple->telefono=$_GET["inputNumero"];
    $emple->direccion=$_GET["txtDireccion"];

    echo "Sueldo liquido: ". $emple->calcularSueldoLiquido();
    echo $emple->verDatos();
    
?>