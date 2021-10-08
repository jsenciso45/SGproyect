<?php
    $id=$_GET['id'];
    include("conexion.php");

    $sql="delete from usuarios where id='".$id."'";
    $resultado=mysqli_query($conex,$sql);

    if($resultado){
        echo "<script language='JavaScript'>
        alert('Los datos fueron Eliminados correctamente');
        location.assign('indexCrud.php');
        </script>";


    }else{
        echo "<script language='JavaScript'>
        alert('ERROR: Los datos NO fueron Eliminados correctamente');
        location.assign('indexCrud.php');
        </script>";

    }
    

?>