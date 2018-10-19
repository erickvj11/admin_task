<html>  
 
<?php
  $mysqli = new mysqli('localhost', 'root', '', 'admin_task');
?>


  <head>
    
  <body>    
      

      
      
      
  <div align="center">                        
    <p>Seleccione un proyecto del siguiente menú:</p>
    <p>Proyectos:
      <select>
        <option value="0">Seleccione:</option>
        <?php
          $query = $mysqli -> query ("SELECT idproyecto, nombre FROM Proyectos");
          while ($valores = mysqli_fetch_array($query)) {
            echo '<option value="'.$valores[idproyecto].'">'.$valores[nombre].'</option>';
          }
        ?>
      </select>
      <button>Enviar</button>
    </p>
  </div>
      
      
      
  </body>   
    

 </head>



</html>