<?php 

include_once('../conexion.php');

$id_reporte = @$_POST['id_reporte'];
$id_usuario1 = @$_POST['id_usuario1'];
$id_PC1 = @$_POST['id_PC1'];
$descripcion = @$_POST['descripcion'];
$password = "password";

echo "<br>" . $id_reporte . "<br>" . $id_usuario1 . "<br>" . $id_PC1 . "<br>" . $descripcion .  "<br><br>" ;

/*$sql = "INSERT INTO usuario VALUES ('default', '$id_reporte', '$id_usuario1', '$id_PC1', '$descripcion')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);*/
?>



?>