<?php
   $servername = "localhost";
   $username = "root";
   $password = "";
   $database = "directorio";
   
   
   $conexion = new mysqli($servername, $username, $password,$database);
   if ($conexion->connect_error) {
      die("Connection failed: " . $conexion->connect_error);
    }
    
    //$consulta = 'SELECT *FROM contactos';
    //$resultado = $conexion->query($consulta);

    /*while($fila = $resultado->fetch_assoc()) {
      echo "id: " . $fila["ID"]. " - Nombre: " . $fila["Nombre"]. " Apellido " . $fila["Apellidos"]."Correo".$fila["Correo electrónico"]."<br>";
    }*/

?>