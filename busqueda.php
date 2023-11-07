<?php
   echo '<link rel="stylesheet" href="estilos.css">';
   require("conexion.php");
   $nombre = "";
   $apellido = "";
   $correo = "";
   if(!empty($_GET["nombre"])){
      $nombre = $_GET["nombre"];
   }
   if(!empty($_GET["apellidos"])){
      $apellido = $_GET["apellidos"];
   }

   if(!empty($_GET["email"])){
      $correo = $_GET["email"];
   }
   $conexion = new mysqli($servername, $username, $password,$database);
   $consulta = "SELECT * FROM contactos WHERE Nombre = '$nombre' OR Apellidos = '$apellido' OR Correoelectronico='$correo'";
   
   $resultado = $conexion->query($consulta);
   if($resultado -> num_rows > 0){
      echo "<table id='estilos'>
      <tr><th>ID</th><th>Nombre</th>
      <th>Apellidos</th>
      <th>Correo</th>
      <th>Telefono</th>
      <th>TelefonoMovil</th>
      <th>Registros</th>
      <th>Residencia</th>
      <th>Ciudad</th>
      <th>Restado O provincia</th>
      <th>Notas</th>
      <th>Sin viaticos</th>
      <th>Con viaticos</th></tr>";
      while($fila = $resultado->fetch_assoc()){
         echo "<tr>
            <td>".$fila["ID"]."</td> 
            <td>".$fila["Nombre"]."</td> 
            <td>".$fila["Apellidos"]."</td>
            <td>".$fila["Correoelectronico"]."</td>
            <td>".$fila["Telefonoparticular"]."</td>
            <td>".$fila["Telefonomovil"]."</td>
            <td>".$fila["Registros"]."</td>
            <td>".$fila["Residencia"]."</td>
            <td>".$fila["Ciudad"]."</td>
            <td>".$fila["Estado_provincia"]."</td>
            <td>".$fila["Notas"]."</td>
            <td>".$fila["Sin_viaticos"]."</td>
            <td>".$fila["Con_viaticos"]."</td>
            </tr>";
         
      }
      echo "</table>";
   }
?>

