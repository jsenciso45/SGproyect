
<?php
include("conexion.php")
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>EDITAR</title>
</head>
<body>

    <?php
        if(isset($_POST['enviar'])){
            $id=$_POST['id'];
            $nombre=$_POST['nombre'];
            $nombreFicha=$_POST['NombreFicha'];
            $numeroFicha=$_POST['NumeroFicha'];

            $sql="update usuarios set nombre='".$nombre."'  ,nombreFicha='".$nombreFicha."' ,numeroFicha='".$numeroFicha."' where id='".$id."'";

            $resultado=mysqli_query($conex,$sql);

            if($resultado){
                echo "<script language='JavaScript'>
                alert('Los datos fueron actualizados correctamente');
                location.assign('indexCrud.php');
                </script>";


            }else{
                echo "<script language='JavaScript'>
                alert('ERROR: Los datos NO fueron actualizados correctamente');
                location.assign('indexCrud.php');
                </script>";

            }
            mysqli_close($conex);


        }else{
            $id=$_GET['id']; 
            $sql="select * from usuarios where id='".$id."'";
            $resultado=mysqli_query($conex,$sql);
    
            $fila=mysqli_fetch_assoc($resultado);
            $nombre=$fila["nombre"];
            $nombreFicha=$fila["nombreFicha"];
            $numeroFicha=$fila["numeroFicha"];
    
      
            mysqli_close($conex);
    ?>
    <h1>Editar Aprendiz</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="POST">
        <label>Nombre: </label>
        <input type="text" name="nombre" value="<?php echo $nombre; ?>">
        <br>
        <br>
        <label>Nombre de Ficha:</label>
        <input type="text" name="NombreFicha" value="<?php echo $nombreFicha; ?>">
        <br>
        <br>
        <label>Numero de Ficha:</label>
        <input type="text" name="NumeroFicha" value="<?php echo $numeroFicha; ?>">
        <br>
        <br>
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <input type="submit" name="enviar" value="ACTUALIZAR">
        <a href="indexCrud.php">Regresar</a>
    </form>
    <?php
        }
    ?>
   
    
</body>
</html>