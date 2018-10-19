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
        if(empty($_POST["nombredev"]) || strlen($_POST["nombredev"]) < 5 || strlen($_POST["nombredev"]) > 70  ){
            $errores[] = "La fecha de inicio del proyecto es requerido o no tiene la longitud permitida";
        }

        // Cedula de ir en números únicamente
        if(empty($_POST["ceduladev"]) || !is_numeric(($_POST["ceduladev"]))){
            $errores[] = "La cédula solo debe contener números";
        }                  
                   
        //}


    if(empty($errores)) {
    	$nombredev = filtrado($_POST["nombredev"]);
		$ceduladev = filtrado($_POST["ceduladev"]);
		
	
	//if(isset($_POST["submit"])) {	
		$insertar="INSERT INTO contadores (nombre, cedula)  VALUES('$nombredev','$ceduladev')";
		//echo $insertar;
		$resultado=mysqli_query($conn, $insertar) or die ("hubo un error al insertar");
		    mysqli_close($conn);
		echo "Contador registrado correctamente!!!<br>
              <a href='contadores.php'>Regresar al formulario</a> ";
	}
    



    if(isset($errores)){
        foreach ($errores as $error){
        	echo "<li> $error </li>";
        }
            echo "Desarrollador no se registró correctamente!!!<br>
              <a href='contadores.php'>Regresar al formulario</a> ";
      }

    
?>

