<?php
   $nombre = "";
   $apellido = "";
   $correo = "";
   $contraseña = "";

   $usuario = "";

   if(!empty($_POST["nombre"])){
      $nombre = $_POST["nombre"];
   }
   if(!empty($_POST["apellido"])){
      $apellido = $_POST["apellido"];
   }

   if(!empty($_POST["correo"])){
      $correo = $_POST["correo"];
   }

   if(!empty($_POST["contraseña"])){
      $contraseña = $_POST["contraseña"];
   }
   


   $usuario = $nombre.$apellido;

   //$password=password_hash($contraseña, PASSWORD_BCRYPT);




   

   

?>