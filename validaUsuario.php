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

        // El usuario es requerido y la longitud debe ser entre 4 y 50
        if(empty($_POST["inputEmail"]) || strlen($_POST["inputEmail"]) < 4 || strlen($_POST["inputEmail"]) > 200  ){
            $errores[] = "Debe registrar un usuario válido";
        }
        
        // La contraseña es requerida y la longitud debe ser entre 4 y 50
        if(empty($_POST["inputPassword"]) || strlen($_POST["inputPassword"]) < 4 || strlen($_POST["inputPassword"]) > 200  ){
            $errores[] = "Debe registrar un usuario válido";
        }
                  
                   
     //}


    if(empty($errores)) {
    	$usuario = filtrado($_POST["inputEmail"]);
		$password = filtrado($_POST["inputPassword"]);
		
		
	
	//if(isset($_POST["submit"])) {	
		
        $validar="SELECT count(*) from usuarios where email = ".$usuario.'and password ='.$password;

        echo $validar;
		$resultado=mysqli_query($conn, $insertar) or die ("hubo un error al consultar");

        if(empty($resultado>0)) {

            
        }

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

