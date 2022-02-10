<?php
   
    include_once("../header.php");

?>
<!-- Se hace el formulario -->
<body>
   
<div class="class container">


    <div class="container my-5">

        <h2>Nuevo computador</h2>

            <form class="row g-3 my-3" action="ctrl_computador.php" action="post">

                <div class="col-md-2">
                    <label for="validationCustom01" class="form-label">Identificador del PC</label>
                    <input type="text" class="form-control" name="id_pc">
                    <label for="inputPassword4" class="form-label">Sistema operativo</label>
                    <input type="text" class="form-control" name="so_pc">
                </div>
                
                <div class="class container my-3">

                    <div class="col-3">
                        <label for="validationCustom02" class="form-label">Motherboard</label>
                        <input type="text" class="form-control" name="mobo_pc" placeholder="ASUS H61M-K">
                    </div>
                    
                </div>

                <div class="col-md-4">
                    <label for="validationCustom03" class="form-label">Lugar ubicado:</label>
                    <select name="sala" class="form-select">
                    <option selected>Sala 1</option>
                    <option>Sala 2</option>
                    <option>Sala 3</option>
                    <option>Sala 4</option>
                    <option>Sala 5</option>
                    <option>Sala 6</option>
                    </select>
                </div>

                <div class="class container my-3">

                    <div class="col-3">
                        <label for="validationCustom04" class="form-label">Procesador</label>
                        <input type="text" class="form-control" name="procesador" placeholder="Intel Pentium E5300">
                    </div>

                    <div class="col-3">
                        <label for="validationCustom05" class="form-label">Cantidad RAM</label>
                        <input type="text" class="form-control" name="cantidad_ram" placeholder="4GB">
                    </div>

                    <div class="col-3">
                        <label for="validationCustom06" class="form-label">Velocidad RAM</label>
                        <input type="text" class="form-control" name="velocidad_ram" placeholder="1333mhz">
                    </div>

                    <div class="col-3">
                        <label for="validationCustom07" class="form-label">Tipo de graficos</label>
                        <input type="text" class="form-control" name="tipo_graficos" placeholder="Dedicados/Integrados">
                    </div>

                    <div class="col-3">
                        <label for="validationCustom08" class="form-label">Capacidad disco</label>
                        <input type="text" class="form-control" name="capacidad_disco" placeholder="500GB">
                    </div>

                    <div class="col-3">
                        <label for="validationCustom09" class="form-label">Mouse</label>
                        <input type="text" class="form-control" name="mouse" placeholder="">
                    </div>

                    <div class="col-3">
                        <label for="validationCustom10" class="form-label">Teclado</label>
                        <input type="text" class="form-control" name="teclado" placeholder="">
                    </div>

                    <div class="col-3">
                        <label for="validationCustom11" class="form-label">Estado del panel frontal</label>
                        <input type="text" class="form-control" name="panel_frontal" placeholder="">
                    </div>

                    <div class="col-3">
                        <label for="validationCustom12" class="form-label">Lectora CD/DVD</label>
                        <input type="text" class="form-control" name="lectora_dvd" placeholder="">
                    </div>

                    <div class="col-3">
                        <label for="validationCustom13" class="form-label">Ventiladores</label>
                        <input type="text" class="form-control" name="ventiladores" placeholder="">
                    </div>

                    <div class="col-3">
                        <label for="validationCustom14" class="form-label">Ultima pasta termica</label>
                        <input type="text" class="form-control" name="ultima_termica" placeholder="">
                    </div>

                    <div class="col-3">
                        <label for="validationCustom15" class="form-label">Ultimo mantenimiento</label>
                        <input type="text" class="form-control" name="ultimo_man" placeholder="">
                    </div>

                    <div class="col-3">
                        <label for="validationCustom16" class="form-label">Salidas de video</label>
                        <input type="text" class="form-control" name="salidas_video" placeholder="">
                    </div>
                    
                </div>
                
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>

                

            </form>

    </div>

</body>

<?php

   include_once("../footer.php");

?>   
