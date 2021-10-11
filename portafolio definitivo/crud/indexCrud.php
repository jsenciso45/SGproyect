<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crud</title>
    <link rel="stylesheet" href="../css/crud-1.css">
    <script>
        function confirmar(){
            return confirm('A continuacion se eliminaran los datos seleccionados ¿desea continuar?')

        }

    </script>
</head>
<body>
    <?php
        include("conexion.php");
        $sql="select * from usuarios";
        $resultado=mysqli_query($conex,$sql);
    ?>
    <div class="nav-bar">

     <ul class="Nav">
     <h1 class="heading"> Cr<span>ud </span>  </h1>
        <nav class="navbar">
            <a href="../vista/index.php">Inicio</a>
        </nav>
     </ul> 
</div>
<br>
<br>
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>nombre</th>
                <th>nombre de ficha</th>
                <th>numero de ficha</th>
                <th>acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
               while($filas=mysqli_fetch_assoc($resultado)){
            ?>
            <tr>
                <td><?php echo $filas['id']?></td>
                <td><?php echo $filas['nombre']?></td>
                <td><?php echo $filas['nombreFicha']?></td>
                <td><?php echo $filas['numeroFicha']?></td>
                <td>
                    <?php echo "<a href='editar.php?id=".$filas['id']."'>EDITAR</a>"?>
                </td>
                <td>
                      <a href="agregar.php">Añadir</a>
                </td>
    
                
                <td><?php echo "<a href='eliminar.php?id=".$filas['id']."'  onclick='return confirmar()'>ELIMINAR</a>"?></td>
            </tr>
            <?php
               }
            ?>

        </tbody>
    </table>
   
    <php mysqli_close($conex);?>



</body>
</html>