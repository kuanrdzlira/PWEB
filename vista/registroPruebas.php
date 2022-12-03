<?php
$insertar= new ControladorVacas;
$insertar -> guardarPruebas();


?>
<div class="row">
  <div class="col-12">
  <form action=" " enctype="multipart/form-data" method="POST">
  
  <div class="mb-3">
    <label for="NumArete" class="form-label">Numero de arete</label>
    <input type="text" class="form-control" id="NumArete" name="NumArete">
  </div>
  


 

  <div class="mb-3">
    <label for="fecha" class="form-label">Fecha</label>
    <input type="date" data-date="" data-date-format="YYYY MMMM DD" class="form-control" id="fecha" name="fecha">

    <!--<input type="date" class="form-control" id="fecha" name="fecha">-->
  </div>
  <div class="mb-3">
    <label for="ph1" class="form-label">Prueba PH 1</label>
    <input type="text" class="form-control" id="ph1" name="ph1">
  </div>
  <div class="mb-3">
    <label for="ph2" class="form-label">Prueba PH 2</label>
    <input type="text" class="form-control" id="ph2" name="ph2">
  </div>
  <div class="mb-3">
    <label for="ph3" class="form-label">Prueba PH 3</label>
    <input type="text" class="form-control" id="ph3" name="ph3">
  </div>
  <div class="mb-3">
    <label for="ph4" class="form-label">Prueba PH 4</label>
    <input type="text" class="form-control" id="ph4" name="ph4">
  </div>

  <div class="mb-3">
    <label for="cond1" class="form-label">Prueba de conductividad 1</label>
    <input type="text" class="form-control" id="cond1" name="cond1">
  </div>
  <div class="mb-3">
    <label for="cond2" class="form-label">Prueba de conductividad 2</label>
    <input type="text" class="form-control" id="cond2" name="cond2">
  </div>
  <div class="mb-3">
    <label for="cond3" class="form-label">Prueba de conductividad 3</label>
    <input type="text" class="form-control" id="cond3" name="cond3">
  </div>
  <div class="mb-3">
    <label for="cond4" class="form-label">Prueba de conductividad 4</label>
    <input type="text" class="form-control" id="cond4" name="cond4">
  </div>



  <div class="mb-3">
  <input type="submit" class="btn btn-primary" name="guardar" value="Guardar">

</div>
</form>
</div>

  </div>
