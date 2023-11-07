<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos2.css">
    <title>Busqueda</title>
</head>
<div id="Cabezera">
        <a href="Cerrar_Sesion.php">Cerrar Sesion</a>
    </div>
</hea>                               
<body>
    <?php
       session_start();
       if(!isset($_SESSION["usuario"])){
            header("Location:Registro_Sesion.html");
       };
    ?>

    <div id="formulario">
        <form action="busqueda.php" method="get" >
            <input type="text" name="nombre" placeholder="nombre"><br>
            <input type="text" name="apellidos" placeholder="apellidos"><br>
            <input type="email" name="email" placeholder="email"><br>
            <input type="submit" value="buscar">
    
        </form>
    </div>
    <div>
        <footer>
            Copyright &copy:2023
        </footer>
    </div>
    <?php
       require("busqueda.php");
    ?>
</body>
</html>