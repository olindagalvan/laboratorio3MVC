<?php

include("conexion.php");
$con=conectar();

$idarticulo=$_GET['id'];

$sql="DELETE FROM articulo  WHERE idarticulo='$idarticulo'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: articulo.php");
    }
?>
