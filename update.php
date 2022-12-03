<?php

include("conexion.php");
$con=conectar();

$idarticulo=$_POST['idarticulo'];
$idcompra=$_POST['idcompra'];
$descripcion=$_POST['descripcion'];
$marca=$_POST['marca'];
$fechaenvio=$_POST['fechaenvio'];
$fecha_entrega=$_POST['fecha_entrega'];
$cantidad=$_POST['cantidad'];
$peso=$_POST['peso'];
$email=$_POST['email'];

$sql="UPDATE articulo SET  descripcion='$descripcion',marca='$marca',fechaenvio='$fechaenvio',fecha_entrega='$fecha_entrega',cantidad='$cantidad',peso='$peso',email='$email' WHERE idarticulo='$idarticulo'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: articulo.php");
    }
?>


