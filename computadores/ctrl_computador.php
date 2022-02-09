<?php 

    include_once('conexion.php');
    include_once('header.php');





    $conn = mysqli_connect("db4free.net", "udev_edu", "OscarJavier", "sgmudev");

    if($conn === false){

        die("Error: no se pudo conectar. "
                .mysqli_connect_error());

    }

    $idcomputador = $_REQUEST['id_pc'];
    $sistema_operativo = $_REQUEST['so_pc'];
    $idsala = $_REQUEST['sala'];
    $motherboard = ['mobo_pc'];
    $ram = $_REQUEST['cantidad_ram'];
    $velocidadram = ['velocidad_ram'];
    $procesador = $_REQUEST['procesador'];
    $tipograficos = $_REQUEST['tipo_graficos'];
    $capacidaddiscoduro = $_REQUEST['capacidad_disco'];
    $mouse = $_REQUEST['mouse'];
    $teclado = $_REQUEST['teclado'];
    $panelfrontal = $_REQUEST['panel_frontal'];
    $lectoradvd = $_REQUEST['lectora_dvd'];
    $ventiladores = $_REQUEST['ventiladores'];
    $pastatermica = $_REQUEST['ultima_termica'];
    $ultimomantenimiento = $_REQUEST['ultimo_man'];
    $salidavideo = $_REQUEST['salidas_video'];



    $sql = "INSERT INTO usuario VALUES ('$idcomputador', '$idsala', '$sistema_operativo', '$motherboard', '$ram', 
    '$velocidadram', '$procesador', '$tipograficos', '$capacidaddiscoduro', '$mouse', '$teclado', '$panelfrontal',
    '$lectoradvd', '$ventiladores', '$pastatermica', '$ultimomantenimiento', '$salidavideo')";

    if(mysql_query($conn, $sql)){
        echo "<h3>Datos guardados</h3>";

    } else{

        echo "error".mysql_error($conn);
    }

    mysqli_close($conn);



    include_once('footer.php');

?>