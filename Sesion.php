<?php
 $contraseña = "123456";
 if($_POST["contraseña"] == $contraseña){
    session_start();
    $_SESSION["usuario"] = $_POST["usuario"];
    header("Location:index.php");

}else{
    header("Location:Registro_Sesion.html");
}


?>