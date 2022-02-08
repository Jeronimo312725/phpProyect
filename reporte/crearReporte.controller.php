<?php 

include_once('../header.php');
include_once('../conexion.php');


$id_reporte = @$_POST['id_reporte'];
$id_usuario1 = @$_POST['id_usuario1'];
$id_PC1 = @$_POST['id_PC1'];
$descripcion = @$_POST['descripcion'];


/*echo "<br>" . $id_reporte . "<br>" . $id_usuario1 . "<br>" . $id_PC1 . "<br>" . $descripcion .  "<br><br>" ;

$sql = "INSERT INTO usuario VALUES ('default', '$id_usuario1', '$id_PC1', '$descripcion')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);*/
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
        <th>ID_Reporte</th>
        <th>ID_Usuario</th>
        <th>ID_PC</th>
        <th>Descripción</th>
    </tr>

    <tr>
        <td> <?php echo $id_reporte; ?> </td>
        <td> <?php echo $id_usuario1; ?> </td>
        <td> <?php echo $id_PC1; ?> </td>
        <td> <?php echo $descripcion; ?> </td>
    </tr>
  

</table>

</body>
</html>

<?php 
include_once('../footer.php');
?>

