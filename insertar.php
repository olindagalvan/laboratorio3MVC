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

$sql="INSERT INTO articulo VALUES($idarticulo, $idcompra ,'$descripcion','$marca','$fechaenvio','$fecha_entrega',$cantidad, $peso,'$email')";
var_dump($sql);

$query= mysqli_query($con,$sql);

if($query){
    Header("Location: articulo.php");
    
}else {
}
?>


