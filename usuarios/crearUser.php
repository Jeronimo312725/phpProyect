<!-- Formulario Usuarios con su rtespectivas extenciones -->
<?php
   
    include_once("../header.php");

?>
<!-- Se hace el formulario -->
<body>
   <div class = "row">
       <div class = "offset-md-3 col-6">
<form class="row g-3 needs-validation" novalidate action="" method="post">
  <div class="col-md-6">
    <label for="validationCustom01" class="form-label">Nombre</label>
    <input type="text" class="form-control" name="nombre" required>
    <div class="valid-feedback">
      Ingresa tu nombre
    </div>
  </div>
  <div class="col-md-6">
    <label for="validationCustom02" class="form-label">Apellido</label>
    <input type="text" class="form-control" name="apellido" required>
    <div class="valid-feedback">
      Ingresa tu Apellido
    </div>
  </div>
  <div class="col-mb-3">
    <label for="validationCustom3" class="form-label">Correo</label>
    <input type="email" class="form-control" case="correo" require>
    <div id="emailHelp" class="form-text">Ingrese su correo</div>
</div>
  <div  class="col-md-6">
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Contraseña</label>
    <input type="password" class="form-control" name="password" require>
    <div class="valid-feedback">
        Ingrese su contraseña
        </div>
    </div>
  </div>
  <div class="col-md-9">
    <label for="validationCustom04" class="form-label">Tipo de usuario</label>
    <select class="form-select" case="tipoUser" required>
      <option selected disabled value="">Seleccione</option>
      <option>Administrador</option>
      <option>Plantel educativo</option>
      <option>Docente</option>
    </select>
    <div class="invalid-feedback">
      Ingrese un tipo
    </div>
  </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
      Acepte los terminos
      </label>
      <div class="invalid-feedback">
          hola
      </div>
    </div>
  </div>
  <div class="col-12">
    <button class="btn btn-primary" type="submit">Guardar</button>
  </div>
</form>

</body>

<?php

   include_once("../footer.php");

?>   

