<?php 


include_once("../conexion.php");


?>
<?php

$id_reparacion=@$_POST['id_reparacion'];
$id_usuario2=@$_POST['id_usuario2'];
$id_PC2=@$_POST['id_PC2'];
$fecha=@$_POST['fecha'];
$descripcion=@$_POST['descripcion'];



$sql="INSERT INTO reparacion VALUES('default','$id_usuario2','$id_PC2','$fecha','$descripcion')"

 echo $sql;
if(mysqli_query($conn,$sql)){
    echo "New record created successfully ";


}else{
    echo "Error: ". $sql . "<br>". mysqli_error($conn);

}
mysqli_close($conn);
header("location:reparacionesList.php")



?>
