<?php

 include_once("../conexion.php");
 include_once("../header.php");

?>

<body>

<table class="table table-striped">
  
<tr>
        <td>ID</td>
        <td>Sala</td>
        <td>Sistema Operativo</td>
        <td>Motherboard</td>
        <td>RAM</td>
        <td>Velocidad RAM</td>
        <td>Procesador</td>
        <td>Graficos</td>
        <td>HDD</td>
        <td>Mouse</td>
        <td>Teclado</td>
        <td>Panel frontal</td>
        <td>DVD/CD</td>
        <td>Ventiladores</td>
        <td>Ult pasta termica</td>
        <td>Ult mantenimiento</td>
        <td>Salidas video</td>
    </tr>

      <?php
          $table = "computador";
          $sql = "SELECT * FROM $table WHERE 1";
          $result = mysqli_query($conn, $sql);
          while($row = mysqli_fetch_array($result)){
      ?>
      
    <tr>
 
       <td><?php echo $row['id_computador']?></td>
       <td><?php echo $row['id_sala1']?></td>
       <td><?php echo $row['sistema_operativo']?></td>
       <td><?php echo $row['motherboard']?></td>
       <td><?php echo $row['ram']?></td>
       <td><?php echo $row['velocidad_ram']?></td>
       <td><?php echo $row['procesador']?></td>
       <td><?php echo $row['tipo_graficos']?></td>
       <td><?php echo $row['capacidad_disco']?></td>
       <td><?php echo $row['mouse']?></td>
       <td><?php echo $row['teclado']?></td>
       <td><?php echo $row['estado_panel_frontal']?></td>
       <td><?php echo $row['lectora_cd']?></td>
       <td><?php echo $row['ventiladores']?></td>
       <td><?php echo $row['cambio_pasta_termica']?></td>
       <td><?php echo $row['ultimo_mantenimiento']?></td>
       <td><?php echo $row['salidas_video']?></td>
       <td><a href="ctrl_computador.php?EDITAME=<?php echo $row['id_computador']; ?>" class="btn btn-primary" ><i class="bi bi-pencil"></i></a></td>
       <td><a href="ctrl_computador.php?EDITAME=<?php echo $row['id_computador']; ?>" class="btn btn-danger" ><i class="bi bi-trash"></i></a></td>
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