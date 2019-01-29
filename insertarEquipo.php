<?php
$conexion = new mysqli("localhost", "root", "", "liga");
if ($conexion->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
}else {
    $resultado = $conexion->query("INSERT INTO equipo (id_equipo,nombre,ciudad) VALUES (10, 'Pepe', 'Ricardo')");
	if($resultado==TRUE){
		echo "Correcto";
	}else{
		echo "Error";
	}

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="container">
    <nav>
        <div class="nav-wrapper">
        <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="index.php">Tabla Equipos</a></li>  
            
        </ul>
     </div>
    </nav>
        </nav>
    

 
    </div>
 <!-- Compiled and minified CSS -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>