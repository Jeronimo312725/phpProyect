<?php

   include_once('../conexion.php');

$nombres = $_POST['nombre'];
$apellidos = $_POST['apellido'];
$cor = $_POST['correo'];
$password = $_POST['password'];
$tipo = $_POST['tipoUser'];
$estado = "0";

$sqlcons = "INSERT INTO Usuario VALUES(default,'$nombres', '$apellidos', '$password', '$cor', '$tipo', '$estado')";
    if(mysqli_query($conn, $sqlcons)){ 
         echo "Se subio correctamente";
    }else{
        echo "Error en la insercion de datos". $sqlcons."<br>". mysqli_error($conn);
    }
    mysqli_close($conn);
    header("location:userList.php");
?>