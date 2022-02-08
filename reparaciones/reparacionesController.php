<?php 
include_once('../header.php')

?>
$id_reparacion=@$_POST['id_reparacion'];
$id_usuario2=@$_POST['id_usuario2'];
$id_PC2=@$_POST['id_PC2'];
$fecha=@$_POST['fecha'];
$descripcion=@$_POST['descripcion'];


echo $id_reparacion."<br> <br>"; 
echo $id_usuario2. "<br> <br>";  
echo $id_PC2 ."<br> <br>";  
echo $fecha. "<br> <br>";  
echo $descripcion ;

<?php


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

  
</head>
<body>
<table class="table table-dark table-striped">
<tr>
            <!--<th>ID</th>-->
            <th>id_reparacion</th>
            <th>id_usuario2</th>
            <th>id_PC2</th>
            <th>Fecha</th>
            <th>Descripcion</th>
           <!-- <th>Total</th>-->
        </tr>
        <?php
              echo "<td>". $id_reparacion.['id_reparacion']"</td>";
              echo "<td>".$id_usuario2."</td>";
              echo "<td>".$id_PC2 ."</td>";
              echo "<td>".$fecha."</td>";
              echo "<td>".$descripcion ."</td>";
            
          ?>
        </tr>

</body>


<?php 
include_once('../footer.php')

?>