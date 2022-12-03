<?php
  $numvacas =ControladorVacas::consultarVacasT();
  $numvacasM =ControladorVacas::consultarVacasM();
  $numvacasS =ControladorVacas::consultarVacasS();
  
  foreach($numvacas as $row=>$item2){}
  foreach($numvacasM as $row=>$item3){}
  foreach($numvacasS as $row=>$item4){}

  //consulta promedio para graficar
  $promedioPH = ControladorVacas::getPhAvg();
  foreach ($promedioPH as $data) {
	  $vaca[] = $data["numArete"];
    $promedioph[] = $data["promedioPH"];
    $promediocc[] = $data["promedioCC"];
  }

 // var_dump($promediocc);
?>

<!--FILA-->
<div class="container">
  <div class="row">
    <div class="col-lg-4">
    <!--SMALL BOX-->
      <div class="small-box bg-info">
        <div class="inner">
            <h4 id="vacasRegistradas"><?=$item2[0]?></h4>
            <p>Vacas registradas</p>
        </div>
        <div class="icon">
          <i class="bi bi-clipboard2-plus-fill"></i>
        </div>
        <a style="cursor:pointer;" class="small-box-footer" href="index.php?seccion=listaVacas">Mas informacion <i class="fas fa-arrow-circle-right"></i> </a>
      </div>
    </div>

    <div class="col-lg-4">
      <!--SMALL BOX-->
      <div class="small-box bg-danger">
        <div class="inner">
          <h4 id="vacasMastitis"><?=$item3[0]?></h4>
          <p>Vacas con Mastitis</p>
        </div>
        <div class="icon">
          <i class="bi bi-clipboard2-plus-fill"></i>
        </div>
        <a href="index.php?seccion=listaVacasMastitis" style="cursor:pointer;" class="small-box-footer" >Mas informacion <i class="fas fa-arrow-circle-right"></i></a> 
      </div>
    </div>

    <div class="col-lg-4">
      <!-- SMALL BOX -->
      <div class="small-box bg-success">
          <div class="inner">
            <h4 id="vacasSanas"><?=$item4[0]?></h4>
              <p>Vacas Sanas</p>
          </div>
          <div class="icon">
            <i class="bi bi-clipboard2-plus-fill"></i>
          </div>
          <a href="index.php?seccion=listaVacasSanas" style="cursor:pointer;" class="small-box-footer">Mas informacion <i class="fas fa-arrow-circle-right"></i> 
        </div>
      </div>
    </div>
  </div>


  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="card card-info">
          <div class="card-header">
            <h3 class="card-title">Vacas en total: <?=$item2[0]?></h3>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <div class="card-body">
            <div class="chart">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                  <div class="container-fluid">
                    <div class="row mb-2">
                      <div class="col-sm-6">
                      </div>
                      <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                        </ol>
                      </div>
                    </div>
                  </div><!-- /.container-fluid -->
                </section>

                <!-- Main content -->
                <section class="content">
                  <div class="container-fluid">
                    <div class="row">
                      <div class="col-md-6">
                        <!-- AREA CHART -->
                        <div class="card card-primary">
                          <div class="card-header">
                            <h3 class="card-title">Promedio de PH por vacas</h3>
                            <div class="card-tools">
                              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                              </button>
                              <button type="button" class="btn btn-tool" data-card-widget="remove">
                                <i class="fas fa-times"></i>
                              </button>
                            </div>
                          </div>
                          <div class="card-body">
                            <!-- Chratjs   GRAFICA DE PROMEDIO DE PH-->
                            <div>
                              <canvas id="promedioPH"></canvas>
                              
                            </div>
                          </div>
                          <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                      </div>
                      <!-- /.col (LEFT) -->
                      <div class="col-md-6">
                        <!-- LINE CHART -->
                        <div class="card card-info">
                          <div class="card-header">
                            <h3 class="card-title">Promedio de Conductividad por vacast</h3>
                            <div class="card-tools">
                              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                              </button>
                              <button type="button" class="btn btn-tool" data-card-widget="remove">
                                <i class="fas fa-times"></i>
                              </button>
                            </div>
                          </div>
                          <div class="card-body">
                          <!-- Chratjs   GRAFICA DE PROMEDIO DE CC-->
                          <div>
                              <canvas id="promedioCC"></canvas>
                              
                            </div>
                        </div>
                        <!-- /.card-body -->
                      </div>
                      <!-- /.card -->
                    </div>
                    <!-- /.col (RIGHT) -->
                  </div>
                  <!-- /.row -->
                </div><!-- /.container-fluid -->
              </section>
            </div>
          </div>
        </div>
    </div>
  </div>
</div>


<!-- GRAFICAS -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>



<script>
  //const labels = ['ene', 'feb', 'mar', 'abri', 'mayo', 'jun', 'jul'];
  const labels = <?php echo json_encode($vaca)?>;
  
  const data = {
    labels: labels,
    datasets: [{
      //label: 'Promedio de PH en Vacas',
      label: 'PH',
      //data: [65, 59, 80, 81, 56, 55, 40],
      data: <?php echo json_encode($promedioph)?>,
      backgroundColor: [
        'rgba(255, 99, 132, 0.2)',
        'rgba(255, 159, 64, 0.2)',
        'rgba(255, 205, 86, 0.2)',
        'rgba(75, 192, 192, 0.2)',
        'rgba(54, 162, 235, 0.2)',
        'rgba(153, 102, 255, 0.2)',
        'rgba(201, 203, 207, 0.2)'
      ],
      borderColor: [
        'rgb(255, 99, 132)',
        'rgb(255, 159, 64)',
        'rgb(255, 205, 86)',
        'rgb(75, 192, 192)',
        'rgb(54, 162, 235)',
        'rgb(153, 102, 255)',
        'rgb(201, 203, 207)'
      ],
      borderWidth: 1
    }]
  };

  const config = {
    type: 'bar',
    data: data,
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    },
  };

  var myChart = new Chart(
    document.getElementById('promedioPH'),
    config
  );
</script>

<script>
  //const labels = ['ene', 'feb', 'mar', 'abri', 'mayo', 'jun', 'jul'];
  const labels2 = <?php echo json_encode($vaca)?>;
  
  const data2 = {
    labels: labels2,
    datasets: [{
      //label: 'Promedio de PH en Vacas',
      label: 'Conductividad',
      //data: [65, 59, 80, 81, 56, 55, 40],
      data: <?php echo json_encode($promediocc)?>,
      backgroundColor: [
        'rgba(255, 99, 132, 0.2)',
        'rgba(255, 159, 64, 0.2)',
        'rgba(255, 205, 86, 0.2)',
        'rgba(75, 192, 192, 0.2)',
        'rgba(54, 162, 235, 0.2)',
        'rgba(153, 102, 255, 0.2)',
        'rgba(201, 203, 207, 0.2)'
      ],
      borderColor: [
        'rgb(255, 99, 132)',
        'rgb(255, 159, 64)',
        'rgb(255, 205, 86)',
        'rgb(75, 192, 192)',
        'rgb(54, 162, 235)',
        'rgb(153, 102, 255)',
        'rgb(201, 203, 207)'
      ],
      borderWidth: 1
    }]
  };

  const config2 = {
    type: 'bar',
    data: data2,
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    },
  };

  var myChart = new Chart(
    document.getElementById('promedioCC'),
    config2
  );
</script>