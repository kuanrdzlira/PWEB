<?php
    $insertar= new ControladorVacas;
    $insertar -> guardarBovino();

    $insertarV= new ControladorVacas;
    $insertarV -> guardarVacuna();

    $insertarI= new ControladorVacas;
    $insertarI->guardarInformacion();

    $tipos=ControladorVacas::getTipoBovinos();
    $tiposV=ControladorVacas::getTipoVacunas();
?>
<div class="container">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
        <h5>Datos Generales</h5>
            <hr>
          <form action=" " enctype="multipart/form-data" method="POST">
            <div class="row">
              <div class="col-md-4">
                <div class="mb-3 input-group-sm">
                  <label for="NumArete" class="form-label">Numero de arete</label>
                  <input type="text" class="form-control" id="NumArete" name="NumArete">
                </div>

                <div class="mb-3 input-group-sm">
                  <label for="Bovino" class="form-label">Tipo de bovino</label>
                  <select name="tipoBovino" id="tipoBovino" class="form-control form-control-sm" >
                    <?php
                    foreach ($tipos as $row => $item) {
                      echo '
                      <option value="'.$item[0].'">'.$item[1].'</option> 
                      ';  
                    }
                    ?>
                    </select>
                </div>

                <div class="mb-3 input-group-sm">
                  <label for="peso" class="form-label">Peso del bovino</label>
                  <input type="text" class="form-control" id="peso" name="peso">
                </div>
              </div>

              <div class="col-md-4">
                  <div class="mb-3 input-group-sm">
                    <label for="Vacuna" class="form-label">Vacuna aplicada</label>
                    <select name="tipoVacuna" id="tipoVacuna" class="form-control form-control-sm" >
                      <?php
                        foreach ($tiposV as $row => $item) {
                          echo '
                          <option value="'.$item[0].'">'.$item[1].'</option> 
                          ';  
                        }
                      ?>
                    </select>
                </div>

                <div class="mb-3 input-group-sm">
                  <label for="fechaV" class="form-label">Fecha de la vacuna aplicada</label>
                  <input type="text" class="form-control" id="fechaV" name="fechaV">
                </div>

                <div class="mb-3 input-group-sm">
                  <label for="partos" class="form-label">Numero de partos</label>
                  <input type="text" class="form-control" id="partos" name="partos">
                </div>
              </div>

              <div class="col-md-4">
                <div class="mb-3 input-group-sm">
                  <label for="inseminacion" class="form-label">Tipo de inseminación</label>
                  <input type="text" class="form-control" id="inseminacion" name="inseminacion">
                </div>

                <div class="mb-3 input-group-sm">
                  <label for="nInseminacion" class="form-label">Numero de inseminación</label>
                  <input type="text" class="form-control" id="nInseminacion" name="nInseminacion">
                </div>

                <div class="mb-3 input-group-sm">
                  <label for="fechaP" class="form-label">Fecha de la prueba</label>
                  <input type="text" class="form-control" id="fechaP" name="fechaP">
                </div>
              </div>
            </div>

           
            <h5>Registro de Pruebas</h5>
            <hr>

            <div class="row">
              <div class="col-md-3">
                <div class="mb-3 input-group-sm">
                  <label for="cph1" class="form-label">Prueba PH 1</label>
                  <input type="text" class="form-control" id="cph1" name="cph1">
                </div>

                <div class="mb-3 input-group-sm">
                  <label for="cph2" class="form-label">Prueba PH 2</label>
                  <input type="text" class="form-control" id="cph2" name="cph2">
                </div>
                      </div>
                      <div class="col-md-3">
                      <div class="mb-3 input-group-sm">
                  <label for="cph3" class="form-label">Prueba PH 3</label>
                  <input type="text" class="form-control" id="cph3" name="cph3">
                </div>

                <div class="mb-3 input-group-sm">
                  <label for="cph4" class="form-label">Prueba PH 4</label>
                  <input type="text" class="form-control" id="cph4" name="cph4">
                </div>
                      </div>


              <div class="col-md-3">
                <div class="mb-3 input-group-sm">
                  <label for="cc1" class="form-label">Prueba Conductividad 1</label>
                  <input type="text" class="form-control" id="cc1" name="cc1">
                </div>

                <div class="mb-3 input-group-sm">
                  <label for="cc2" class="form-label">Prueba Conductividad 2</label>
                  <input type="text" class="form-control" id="cc2" name="cc2">
                </div>
                      </div>
                      <div class="col-md-3">

              <div class="mb-3 input-group-sm">
                <label for="cc3" class="form-label">Prueba Conductividad 3</label>
                <input type="text" class="form-control" id="cc3" name="cc3">
              </div>

              <div class="mb-3 input-group-sm">
                <label for="cc4" class="form-label">Prueba Conductividad 4</label>
                <input type="text" class="form-control" id="cc4" name="cc4">
              </div>
              </div>
            </div>
            
              
            
            

            

            

            

            
              
            <div class="mb-3 input-group-sm">
              <input type="submit" class="btn btn-primary" name="guardar" value="Guardar">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
    
