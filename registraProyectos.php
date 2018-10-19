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
                
        // La fecha de inicio de proyecto es requerido y la longitud debe ser de 10 con formato DD/MM/YYYY
        if(empty($_POST["fechaInicio"]) || strlen($_POST["fechaInicio"]) < 10 || strlen($_POST["fechaInicio"]) > 10  ){
            $errores[] = "La fecha de inicio del proyecto es requerido o no tiene la longitud permitida";
        }

        // La fecha de inicio de proyecto es requerido y la longitud debe ser de 10 con formato DD/MM/YYYY
        if(empty($_POST["fechaEntrega"]) || strlen($_POST["fechaEntrega"]) < 10 || strlen($_POST["fechaEntrega"]) > 10  ){
            $errores[] = "La fecha de entrega del proyecto es requerido o no tiene la longitud permitida";
        }
        
        // El nombre del proyecto es requerido y la longitud debe ser entre 4 y 50
        if(empty($_POST["nombreProyecto"]) || strlen($_POST["nombreProyecto"]) < 4 || strlen($_POST["nombreProyecto"]) > 50  ){
            $errores[] = "El nombre del proyecto es requerido o no tiene la longitud permitida";
        }

        // El nombre del proyecto es requerido y la longitud debe ser entre 4 y 50
        if(empty($_POST["descripcionProyecto"]) || strlen($_POST["descripcionProyecto"]) < 4 || strlen($_POST["descripcionProyecto"]) > 200  ){
            $errores[] = "Se debe registrar una descripción válida";
        }
        
                          
                   
     //}


    if(empty($errores)) {
    	$fechaInicio = filtrado($_POST["fechaInicio"]);
		$fechaEntrega = filtrado($_POST["fechaEntrega"]);
		$nombreProyecto = filtrado($_POST["nombreProyecto"]);
		$descripcionProyecto = filtrado($_POST["descripcionProyecto"]);
		
	
	//if(isset($_POST["submit"])) {	
		$insertar="INSERT INTO proyectos (nombre, fechaInicio, fechaEntrega, descripcion)  VALUES('$nombreProyecto','$fechaInicio','$fechaEntrega','$descripcionProyecto')";
		//echo $insertar;
		$resultado=mysqli_query($conn, $insertar) or die ("hubo un error al insertar");
		    mysqli_close($conn);
		echo "Protecto registrado correctamente!!!<br>
			  <a href='Proyectos.php'>Regresar al formulario</a>	";
	}
    



    if(isset($errores)){
        foreach ($errores as $error){
        	echo "<li> $error </li>";
        }
        echo "El Proyecto no se registró!!!<br>
			  <a href='Proyectos.php'>Regresar al formulario</a>	";
      }

    
?>

