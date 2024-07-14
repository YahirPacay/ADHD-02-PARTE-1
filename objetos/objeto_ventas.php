<?php
    include_once('../clases/Ventas.php');
    $ventas = new Ventas();

    $ventas->tipoContratacion="Empleado permanente";
    $ventas->comisionVenta=$_GET["inputComisionVentas"];
    //atributos que hereda de la clase empleado y persona
    //empleado    
    $ventas->codigo=$_GET["inputCodigo"];
    $ventas->nivelAcademico=$_GET["txtAcademico"];
    $ventas->sueldoBase=$_GET["inputSueldo"];
    //persona
    $ventas->asignarNombre($_GET["txtNombre"]);
    $ventas->apellido=$_GET["txtApellido"];
    $ventas->telefono=$_GET["inputNumero"];
    $ventas->direccion=$_GET["txtDireccion"];

    echo "Sueldo liquido: ". $ventas->calcularSueldoLiquido();
    echo $ventas->verDatos();
?>