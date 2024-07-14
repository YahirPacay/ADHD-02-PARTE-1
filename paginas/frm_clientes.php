<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>cliente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body class="bg-danger-subtle">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col "></div>
            <div class="col-4">
                <h2 class="p-5">Formulario Cliente</h2>
                <form action="../objetos/objeto_cliente.php" method="get">
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">NIT</label>
                        <input type="number" class="form-control" id="inputNit" name="inputNit" placeholder="Coloca tu Nit">
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="txtNombre" name="txtNombre" placeholder="Coloca tu Nombre">
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Apellido</label>
                        <input type="text" class="form-control" id="txtApellido" name="txtApellido" placeholder="Coloca tu Apellido">
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Telefono</label>
                        <input type="number" class="form-control" id="inputNumero" name="inputNumero" placeholder="Coloca tu Número">
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Direccion</label>
                        <input type="text" class="form-control" id="txtDireccion" name="txtDireccion" placeholder="Coloca tu Direccion">
                    </div>
                    <div class="text-center">
                        <input type="submit" class="form-control btn btn-success" value="Enviar" name="btn_enviar">
                    </div>
                </form>
            </div>
            <div class="col-4 justify-align-center">
                <div style="padding: 150px" class="text-center"></div>
                <div class="btn-group-vertical" role="group" aria-label="Basic outlined example">
                        <button type="button" class="btn btn-outline-primary"><a href="frm_persona.php" style="text-decoration:none;">Persona</a></button>
                        <button type="button" class="btn btn-outline-success"><a href="frm_empleado.php" style="text-decoration:none;">Empleado</a></button>
                        <button type="button" class="btn btn-outline-danger"><a href="frm_clientes.php" style="text-decoration:none;">Cliente</a></button>
                        <button type="button" class="btn btn-outline-dark"><a href="frm_ventas.php" style="text-decoration:none;">Ventas</a></button>
                        <button type="button" class="btn btn-outline-warning"><a href="frm_administracion.php" style="text-decoration:none;">Administracion</a></button>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>