<!-- Se crea vista de paso donde se mostraran los datos Julian -->
<?php

 include_once("../conexion.php");
 include_once("../header.php");

?>

<body>

<table class="table table-striped">
  
<tr>
        <td>ID</td>
        <td>Nombres</td>
        <td>Apellidos</td>
        <td>Correo</td>
        <td>Opciones</td>
    </tr>

      <?php
          $table = "Usuario";
          $sql = "SELECT * FROM $table WHERE 1";
          $result = mysqli_query($conn, $sql);
          while($row = mysqli_fetch_array($result)){
      ?>
      
    <tr>
 
       <td><?php echo $row['id_usuario']?></td>
       <td><?php echo $row['nombre']?></td>
       <td><?php echo $row['apellido']?></td>
       <td><?php echo $row['email']?></td>
       <td></td>

    </tr>

    <!-- Se repite el ciclo dentro de la tabla para que me cree un espacio con estilo -->
    <?php
        }
    ?>

</table>

</body>


<?php
include_once("../footer.php");
?>