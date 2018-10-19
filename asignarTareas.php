<html lang="en">
<?php
  $mysqli = new mysqli('localhost', 'root', '', 'admin_task');
?>


  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admintask - Proyectos</title>

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
        <div class="card-header">Asignación de Tareas</div>
        <div class="card-body">
          <form action="registraTareasAsignadas.php" method="POST">  
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">          
                    <div class="form-label-group">  
                        <select id="idproyectoA" name="idproyectoA" class="form-control" placeholder="ID Proyecto" autofocus="autofocus">
                            <option value="0">Seleccione un Proyecto</option>
                            <?php
                                $query = $mysqli -> query ("SELECT idproyecto, nombre FROM Proyectos");
                                while ($valores = mysqli_fetch_array($query)) {
                                    echo '<option value="'.$valores[idproyecto].'">'.$valores[nombre].'</option>';
                                }
                            ?>
                        </select>                      
                    </div>    
                </div>
                <div class="col-md-6">          
                    <div class="form-label-group">  
                        <select id="idtareaA" name="idtareaA" class="form-control" placeholder="ID Tarea" autofocus="autofocus">
                            <option value="0">Seleccione una Tarea</option>
                            <?php
                                $query = $mysqli -> query ("SELECT idtarea, nombre FROM Tareas");
                                while ($valores = mysqli_fetch_array($query)) {
                                    echo '<option value="'.$valores[idtarea].'">'.$valores[nombre].'</option>';
                                }
                            ?>
                        </select>                      
                    </div>    
                </div>
                <br>     
                <div class="col-md-6">
                    <div class="form-label-group">  
                        <select id="idContadorA" name="idContadorA" class="form-control" placeholder="ID Contador" autofocus="autofocus">
                            <option value="0">Seleccione un Contadores</option>
                            <?php
                                $query = $mysqli -> query ("SELECT idContador, nombre FROM Contadores");
                                while ($valores = mysqli_fetch_array($query)) {
                                    echo '<option value="'.$valores[idContador].'">'.$valores[nombre].'</option>';
                                }
                            ?>
                        </select>                      
                    </div>
                </div>
                <div class="col-md-6">     
                    <input type="text" id="horas" name="horas" class="form-control" placeholder="Horas Estimadas" required="required">
                </div>
                <br>
                <div class="col-md-6">
                    <div class="form-label-group">
                        <input type="text" id="fechaAsignacion" name="fechaAsignacion" class="form-control" placeholder="Fecha de Asignacion" required="required">
                        <label for="fechaEntrega">Fecha de Asignación (dd/mm/aaaa)</label>
                    </div>  
                </div>
                <div class="col-md-6">
                    <div class="form-label-group">
                        <input type="text" id="fechaFinalizacion" name="fechaFinalizacion" class="form-control" placeholder="Fecha de Finalización" required="required">
                        <label for="fechaEntrega">Fecha de Finalización (dd/mm/aaaa)</label>
                    </div>  
                </div>  
              </div>
            </div>
            <div class="form-group">                   
                <div class="form-label-group">
                <input type="text" id="comentarios" name="comentarios" class="form-control" placeholder="Comentarios" required="required">
                <label for="comentarios">Comentarios</label>
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
