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

        // El nombre del proyecto es requerido y la longitud debe ser entre 4 y 50
        if(empty($_POST["comentarios"]) || strlen($_POST["comentarios"]) < 4 || strlen($_POST["comentarios"]) > 200  ){
            $errores[] = "Se debe registrar un comentario válido";
        }
        
        // Horas de ir en números únicamente
        if(empty($_POST["horas"]) || !is_numeric(($_POST["horas"]))){
            $errores[] = "Este campo adminte solo  números";
        }
                          
                   
     //}


    if(empty($errores)) {
    	$idproyectoA = filtrado($_POST["idproyectoA"]);
		$idtareaA = filtrado($_POST["idtareaA"]);
		$idContadorA = filtrado($_POST["idContadorA"]);
        $horas = filtrado($_POST["horas"]);
        $fechaAsignacion = filtrado($_POST["fechaAsignacion"]);
        $fechaFinalizacion = filtrado($_POST["fechaFinalizacion"]);
		$comentarios = filtrado($_POST["comentarios"]);
		
	
	//if(isset($_POST["submit"])) {	
		$insertar="INSERT INTO asignaciontareas (idproyecto, idtarea, idcontador, horasestimadas, fechaAsignacion, fechaFinalizacion, comentarios)  VALUES(".$idproyectoA.','.$idtareaA.','.$idContadorA.','.$horas.','."'$fechaAsignacion'".','."'$fechaFinalizacion'".','."'$comentarios'".')';
		echo $insertar;
		$resultado=mysqli_query($conn, $insertar) or die ("hubo un error al insertar");
		    mysqli_close($conn);
		echo "Asignación registrada correctamente!!!<br>
			  <a href='asignarTareas.php'>Regresar al formulario</a>	";
	}
    



    if(isset($errores)){
        foreach ($errores as $error){
        	echo "<li> $error </li>";
        }
        echo "El Proyecto no se registró!!!<br>
			  <a href='asignarTareas.php'>Regresar al formulario</a>	";
      }

    
?>

