<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admintask - Tareas</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">

  </head>

  <body class="bg-dark">
    
    <div class="container">
      <div class="card card-register mx-auto mt-5">
        <div class="card-header">Registro de Tareas</div>
        <div class="card-body">
          <form action="registraTareas.php" method="POST">
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" id="nombretarea" name="nombretarea" class="form-control" placeholder="Nombre de Tarea" required="required" autofocus="autofocus">
                    <label for="nombredev">Nombre de la Tarea</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" id="desctarea" name="desctarea" class="form-control" placeholder="Cédula de Desarrollador" required="required">
                    <label for="cedulaDev">Descripción de Tarea</label>
                  </div>
                </div>
              </div>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Guardar</button>
            <!--<a type="submit" class="btn btn-primary btn-block" href="index.html">Guardar</a> !-->
          </form>
          <div class="text-center">
            <a class="d-block small mt-3" href="index.php">Regresar</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  </body>

</html>
