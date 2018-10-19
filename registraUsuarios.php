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
        if(empty($_POST["nombreUsr"]) || strlen($_POST["nombreUsr"]) < 3 || strlen($_POST["nombreUsr"]) > 70  ){
            $errores[] = "El nombre es requerido o no tiene la longitud permitida";
        }

        if(empty($_POST["apellidoUsr"]) || strlen($_POST["apellidoUsr"]) < 3 || strlen($_POST["apellidoUsr"]) > 70  ){
            $errores[] = "El apellido es requerido o no tiene la longitud permitida";
        }

        // El email es obligatorio y ha de tener formato adecuado
        if(!filter_var($_POST["emailUsr"], FILTER_VALIDATE_EMAIL) || empty($_POST["emailUsr"])){
            $errores[] = "No se ha indicado email o el formato no es correcto";
        }

        if(empty($_POST["clave"]) || strlen($_POST["clave"]) < 3 || strlen($_POST["clave"]) > 70  ){
            $errores[] = "La clave es requerida para completar el registro o verifique su longitud";
        }

        //}


    if(empty($errores)) {
    	
		$nombre = filtrado($_POST["nombreUsr"]);
		$PrimerApe = filtrado($_POST["apellidoUsr"]);
        $email = filtrado($_POST["emailUsr"]);
        $clave = filtrado($_POST["clave"]);
	
	//if(isset($_POST["submit"])) {	
		$insertar="INSERT INTO usuarios (Email, nombre, apellido, Password) VALUES ('$email', $nombre','$PrimerApe', '$clave')";

		//echo $insertar;
		$resultado=mysqli_query($conn, $insertar) or die ("hubo un error al insertar");
		    mysqli_close($conn);
		echo "Usuario registrada correctamente!!!<br>
              <a href='register.php'>Regresar al formulario</a> ";
	}
    



    if(isset($errores)){
        foreach ($errores as $error){
        	echo "<li> $error </li>";
        }
            echo "Usuario no se registró correctamente!!!<br>
              <a href='register.php'>Regresar al formulario</a> ";
      }

    
?>

