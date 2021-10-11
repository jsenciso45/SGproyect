
<?php
include("conexion.php")
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>EDITAR</title>
    <link rel="stylesheet" href="../css/crud-1.css">
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
    
    <form action="<?=$_SERVER['PHP_SELF']?>" method="POST"class="form-register" >
    <h1>Editar Aprendiz</h1>
        <label>Nombre: </label>
        <input type="text" name="nombre" value="<?php echo $nombre; ?>" class="controls">
        <br>
        <br>
        <label>Nombre de Ficha:</label>
        <input type="text" name="NombreFicha" value="<?php echo $nombreFicha; ?>"class="controls" >
        <br>
        <br>
        <label>Numero de Ficha:</label>
        <input type="text" name="NumeroFicha" value="<?php echo $numeroFicha; ?>" class="controls">
        <br>
        <br>
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <input type="submit" name="enviar" value="ACTUALIZAR" class="controls">
            <center><a href="indexCrud.php">REGRESAR</a></center>
        
    </form>
    <?php
        }
    ?>
   
    
</body>
</html>