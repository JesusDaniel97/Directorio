<?php echo '<link rel="stylesheet" href="estilos2.css">';?>
<?php
       session_start();
       if(!isset($_SESSION["usuario"])){
            header("Location:Registro_Sesion.html");
       }
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos2.css">
    <title>Busqueda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>                               
<body>
    <div>
      <ul>
          <?php echo "<li><h3 style='color:white;'>".$_SESSION["usuario"]."</i></h3>";?>
          <li style="float:right"><a href="Cerrar_Sesion.php">Cerrar sesion</a></li>
        </ul>
  </div>

    <div id="formulario">
        <form action="busqueda.php" method="get" >
            <input type="text" name="nombre" placeholder="nombre"><br>
            <input type="text" name="apellidos" placeholder="apellidos"><br>
            <input type="text" name="registro" placeholder="Registro"><br>
             <p style="color:white;">BUSQUEDA POR ESTADO</p>

            <select name="estado">
                <option value="AGUACALIENTES">AGUACALIENTES</option>
                <option value="BAJA CALIFORNIA">BAJA CALIFORNIA</option>
                <option value="BAJA CALIFORNIA SUR">BAJA CALIFORNIA SUR</option>
                <option value="CAMPECHE">CAMPECHE</option>
                <option value="CHIAPAS">CHIAPAS</option>
                <option value="CHIHUAHUA">CHIHAHUA</option>
                <option value="CIUDAD DE MEXICO">CIUDAD DE MEXICO</option>
                <option value="COAHUILA">COAHUILA</option>
                <option value="COLIMA">COLIMA</option>
                <option value="DURANGO">DURANGO</option>
                <option value="ESTADO DE MEXICO">ESTADO DE MEXICO</option>
                <option value="GUANAJUATO">GUANAJUATO</option>
                <option value="GUERRERO">GUERRERO</option>
                <option value="HIDALGO">HIDALGO</option>
                <option value="JALISCO">JALISCO</option>
                <option value="MICHOACAN">MICHOACAN</option>
                <option value="MORELOS">MORELOS</option>
                <option value="NARAYIT">NAYARIT</option>
                <option value="NUEVO LEON">NUEVO LEON</option>
                <option value="OAXACA">OAXACA</option>
                <option value="PUEBLA">PUEBLA</option>
                <option value="QUERETARO">QUERETARO</option>
                <option value="QUINTANA ROO">QUINTANA ROO</option>
                <option value="SAN LUIS POTOSI">SAN LUIS POTOSI</option>
                <option value="SINALOA">SINALOA</option>
                <option value="SONORA">SONORA</option>
                <option value="TABASCO">TABASCO</option>
                <option value="TAMAULIPAS">TAMAULIPAS</option>
                <option value="TLAXCALA">TLAXCALA</option>
                <option value="VERACRUZ">VERACRUZ</option>
                <option value="YUCATAN">YUCATAN</option>
                <option value="ZACATECAS">ZACATECAS</option>
            </select>
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
