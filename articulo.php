
<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM articulo";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Pagina de registro del producto-compra</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="stylesheet" href="css/estiloscursos.css">
    
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
    <header>
                <h2>BIENVENIDO A STORE WOMAN</h2>
                <p>fabricamos y distribuimos ropa de alta calalidad encontraras mas que ropa un estilo ven y apropiate de tu personalidad combina los asesorios y frendad a tu gusto.</p>
            </header>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h2>INGRESE SUS DATOS</h2>
                                <form action="insertar.php" method="POST">

                                 
                                    <input type="text" class="form-control mb-3" name="idarticulo" placeholder="id articulo">
                                    <input type="number" class="form-control mb-3" name="idcompra" placeholder="idcompra">
                                    <input type="text" class="form-control mb-3" name="descripcion" placeholder="descripcion">
                                    <input type="text" class="form-control mb-3" name="marca" placeholder="marca">
                                    <input type="date" class="form-control mb-3" name="fechaenvio" placeholder="fechaenvio">
                                    <input type="date" class="form-control mb-3" name="fecha_entrega" placeholder="fecha_entrega">
                                    <input type="number" class="form-control mb-3" name="cantidad" placeholder="cantidad">
                                    <input type="number" class="form-control mb-3" name="peso" placeholder="peso">
                                    <input type="text" class="form-control mb-3" name="email" placeholder="email">
                                    
                                    <input type="submit" class="btn btn-primary">
                                  
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" border="1" >
                                <thead class="table-success table-striped" >
                                <h2>VENTAS QUE PARTICIPAN EN EL DESCUENTO </h1>
                                    <tr>
                                        <th>idarticulo</th>
                                        <th>idcompra</th>
                                        <th>descripcion</th>
                                        <th>marca</th>
                                        <th>fechaenvio</th>
                                        <th>fechaentrega</th>
                                        <th>cantidad</th>
                                        <th>peso</th>
                                        <th>email</th>
    
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['idarticulo']?></th>
                                                <th><?php  echo $row['idcompra']?></th>
                                                <th><?php  echo $row['descripcion']?></th>
                                                <th><?php  echo $row['marca']?></th>    
                                                <th><?php  echo $row['fechaenvio']?></th> 
                                                <th><?php  echo $row['fecha_entrega']?></th>
                                                <th><?php  echo $row['cantidad']?></th>
                                                <th><?php  echo $row['peso']?></th>
                                                <th><?php  echo $row['email']?></th> 

                                                
                                                <th><a href="actualizar.php?id=<?php echo $row['idarticulo'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['idarticulo'] ?>" class="btn btn-danger">Eliminar</a></th>    
                                                                                    
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                            <br>
    
                             <a href="principal.php"><button class="btn-2"> REGRESA A LA PAGINA PRINCIPAL</button>

                        </div>
                    </div>  
            </div>
            <hr>
    <footer>

       <h3> CREADO POR:OLINDA GALVAN HERNANDEZ-KARINA BARRAGAN MERCADO</h3>
    </footer>
    <hr>
    </body>
</html>