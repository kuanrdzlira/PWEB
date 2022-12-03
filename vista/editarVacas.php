<?php
$editar = new ControladorVacas;
$editar->editarVacas();

$tipos=ControladorVacas::getTipoBovinos();


$proyecto=ControladorVacas::consultaVacasId();
//var_dump($proyecto);

foreach($proyecto as $row=>$item){
}
?>
<div class="col-6 offset-md-3>
<div class="card">
<div class="card-header">Registro de las vacas</div>
<div class="card-body">
<form action="" enctype="multipart/form-data" method="POST">

<div class="mb-3">
<label for="id" class="form-label">Numero de arete</label>
<input type="text" class="form-control form-control-sm" id="NumArete" name="NumArete" value="<?=$item[0]?>" readonly="true">
</div>



<div class="mb-3">
    <label for="Bovino" class="form-label">Tipo de bovino</label>
    <input  name="tipoBovino" id="tipoBovino" class="form-control form-control-sm" value="<?=$item[1]?>">
      <?php
      foreach ($tipos as $row => $item) {
         echo '
         <option value="'.$item[0].'">'.$item[1].'</option> 
         ';  
      }
      ?>
      </select>
 </div>

<div class="mb-3">
    <label for="caracteristicas" class="form-label">Peso del bovino</label>
    <input type="peso" class="form-control form-control-sm" id="peso" name="peso" value="<?=$item[2]?>">
</div>

<div class="mb-3">
 <a class="btn btn-danger" href="index.php?seccion=listaProyectos">Cancelar</a>
 <input type="submit" class="btn btn-success" name="editar" value="Actualizar">

</div>
</form>
</div>
</div>
</div>