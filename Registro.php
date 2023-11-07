<?php
   $nombre = "";
   $apellido = "";
   $correo = "";
   $contraseña = "";
   $usuario = "";
   
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
      if(empty($_POST["nombre"])){
         echo "el nombre es requerido";
      }else{

         $nombre = $_POST["nombre"];
      }
      if(empty($_POST["apellido"])){
            echo "el apellido es requerido ";
      }else{
            $apellido = $_POST["apellido"];
      }
         
      if(empty($_POST["correo"])){
         echo "el correo es requerido";
      }else{
         $correo = $_POST["correo"];
      }
      
      if(!empty($_POST["contraseña"])){
         $contraseña = $_POST["contraseña"];
      }
      
   }   

   $usuario = $nombre.$apellido;
   require('conexion.php');
   $conexion = new mysqli($servername, $username, $password,$database);
   if (!$conexion) {
    die("Conexion fallida: " . mysqli_connect_error());
  }

   $sql = "INSERT INTO registro (Usuario, Contraseña ,Correo)
   VALUES ('$usuario', '$contraseña', '$correo');";

   if (mysqli_multi_query($conexion, $sql)) {
       echo "registrado correctamente ";
    } else {
       echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
    }
  
  mysqli_close($conexion);

?>