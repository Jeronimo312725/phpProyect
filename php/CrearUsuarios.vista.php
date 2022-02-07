<?php

include_once('header.php')
?>
<div class="row"> 
<div class="offset-md-3 col-md-6">
<form  action ="CrearUsuario.controller.php" method ="post" class="row g-3">
  <div class="col-md-4">
    <label for="validationDefault01" class="form-label">Nombres</label>
    <input type="text" class="form-control" name="nombres" id="validationDefault01"  required>
  </div>
  <div class="col-md-4">
    <label for="validationDefault02" class="form-label">Apellidos</label>
    <input type="text" class="form-control" name="apellidos"  id="validationDefault02"  required>
  </div>
  <div class="col-md-4">
    <label for="validationDefaultUsername" class="form-label">Apodo</label>
    <div class="input-group">
      <span class="input-group-text"  id="inputGroupPrepend2">@</span>
      <input type="text" class="form-control" name="apodo" id="validationDefaultUsername"  aria-describedby="inputGroupPrepend2" required>
    </div>
  </div>
  <div class="col-md-6">
    <label for="validationDefault03" class="form-label">Ciudad</label>
    <input type="text" class="form-control" name="ciudad"  id="validationDefault03" required>
  </div>
  <div class="col-md-7">
    <label for="validationDefault03" class="form-label">Telefono</label>
    <input type="text" class="form-control" name="telefono"  id="validationDefault03" required>
  </div>
 
    </select>
  </div>
 
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
      <label class="form-check-label" for="invalidCheck2">
        Agree to terms and conditions
      </label>
    </div>
  </div>
  <div class="col-12">
    <button class="btn btn-primary" type="submit">Enviar</button>
  </div>
</form>
</div>


<?php 
include_once('footer.php')

?>






