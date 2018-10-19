<?php
include("conexion.php");

$conn=Conectar();


    function filtrado($datos){
        $datos = trim($datos); // Elimina espacios antes y después de los datos
        $datos = stripslashes($datos); // Elimina backslashes \
        $datos = htmlspecialchars($datos); // Traduce caracteres especiales en entidades HTML
        return $datos;
    }
    

	//if(isset($_POST["submit"]) && $_SERVER["REQUEST_METHOD"] == "POST"){
                
        // El nombre de la tarea  es requerido y la longitud debe ser mayor a 5 y menor a 70
        if(empty($_POST["nombretarea"]) || strlen($_POST["nombretarea"]) < 5 || strlen($_POST["nombretarea"]) > 70  ){
            $errores[] = "El nombre de la tarea del proyecto es requerido o no tiene la longitud permitida";
        }


        // La descripción de la tarea es requerida y la longitud debe ser mayor a 5 y menor a 70
        if(empty($_POST["desctarea"]) || strlen($_POST["desctarea"]) < 5 || strlen($_POST["desctarea"]) > 70  ){
            $errores[] = "La descripción de la tarea es requerida o no tiene la longitud permitida";
        }


        //}


    if(empty($errores)) {
    	$nombretarea = filtrado($_POST["nombretarea"]);
		$desctarea = filtrado($_POST["desctarea"]);
		
	
	//if(isset($_POST["submit"])) {	
		$insertar="INSERT INTO tareas (nombre, descripcion)  VALUES('$nombretarea','$desctarea')";
		//echo $insertar;
		$resultado=mysqli_query($conn, $insertar) or die ("hubo un error al insertar");
		    mysqli_close($conn);
		echo "Tarea registrada correctamente!!!<br>
              <a href='tareas.php'>Regresar al formulario</a> ";
	}
    



    if(isset($errores)){
        foreach ($errores as $error){
        	echo "<li> $error </li>";
        }
            echo "Tarea no se registró correctamente!!!<br>
              <a href='tareas.php'>Regresar al formulario</a> ";
      }

    
?>

