<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Registro de Usuarios</title>

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
        <div class="card-header">Registro de Usuarios</div>
        <div class="card-body">
          <form action="registraUsuarios.php" method="POST">
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" id="nombreUsr" name="nombreUsr" class="form-control" placeholder="Nombre del Usuario" required="required" autofocus="autofocus">
                    <label for="nombreUsr">Nombre</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" id="apellidoUsr" name="apellidoUsr" class="form-control" placeholder="Apellido de Usuario" required="required">
                    <label for="apellidoUsr">Apellido</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="email" id="emailUsr" name="emailUsr" class="form-control" placeholder="Correo Electrónico" required="required">
                <label for="emailusr">E-Mail</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="password" id="clave" name="clave" class="form-control" placeholder="Clave" required="required">
                    <label for="clave">Password</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="password" id="confirmClave" name= "confirmClave" class="form-control" placeholder="Confirmar clave" required="required">
                    <label for="confirmClave">Confirmar password</label>
                  </div>
                </div>
              </div>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Guardar</button>
          </form>
          <div class="text-center">
            <a class="d-block small mt-3" href="login.html">Pagina Login</a>
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
