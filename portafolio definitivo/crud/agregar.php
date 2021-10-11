<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/crud-1.css">
</head>
<body>
<?php
        if(isset($_POST['enviar'])){
            $nombre=$_POST['nombre'];
            $nombreFicha=$_POST['NombreFicha'];
            $numeroFicha=$_POST['NumeroFicha'];

            include("conexion.php");
            $sql="insert into usuarios (nombre, nombreFicha, numeroFicha)
            values('".$nombre."','".$nombreFicha."','".$numeroFicha."')";

            $resultado=mysqli_query($conex,$sql);

            if($resultado){
                echo "<script language='JavaScript'>
                alert('Los datos fueron ingresados correctamente a la bd');
                location.assign('indexCrud.php');
                </script>";


            }else{
                echo "<script language='JavaScript'>
                alert('ERROR: Los datos NO fueron ingresados correctamente a la bd');
                location.assign('indexCrud.php');
                </script>";

            }
            mysqli_close($conex);
        }else{
    ?>




    <form action="<?=$_SERVER['PHP_SELF']?>" method="POST" class="form-register" >
        <h1>Agrgar Aprendiz</h1>
        <label>Nombre: </label>
        <input type="text" name="nombre" class="controls">
        <br>
        <br>
        <label>Nombre de Ficha:</label>
        <input type="text" name="NombreFicha"  class="controls">
        <br>
        <br>
        <label>Numero de Ficha:</label>
        <input type="text" name="NumeroFicha" class="controls" >
        <br>
        <br>
        <input type="submit" name="enviar" value="AGREGAR"  class="controls">
        <center><a href="indexCrud.php">REGRESAR</a></center>
        
    <?php 
    }
    ?>

    </form>
</body>
</html>