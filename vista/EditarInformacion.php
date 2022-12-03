<div class="col-12">
    <a class ="btn btn-primary" href="index.php?seccion=guardarProyecto"> Nuevo Proyecto</a>
<table class="table">
    <thead>
        <tr>
        <th>Numero Arete</th>
        <th>Partos</th>
        <th>Numero de encimaciones</th>
        <th>Tipo de enceminacion</th>
        <th>Cuadro PH 1</th>
        <th>Cuadro PH 2</th>
        <th>Cuadro PH 3</th>    
        <th>Cuadro PH 4</th>
        <th>Cuadro Conductividad 1</th>
        <th>Cuadro Conductividad 2/th>
        <th>Cuadro Conductividad 3</th>
        <th>Cuadro Conductividad 4</th>
        <th>Fecha</th>
   
</tr>
    </thead>
<tbody>

<?php




$proyecto=ControladorVacas::consultarVacasInformacion();

foreach($proyecto as $row=>$item){
    echo'
    <tr>
    <td>'.$item[0].'</td>
    <td>'.$item[1].'</td>
    <td>'.$item[2].'</td>
    <td>'.$item[3].'</td>
    <td>'.$item[4].'</td>
    <td>'.$item[5].'</td>
    <td>'.$item[6].'</td>
    <td>'.$item[7].'</td>
    <td>'.$item[8].'</td>
    <td>'.$item[9].'</td>
    <td>'.$item[10].'</td>
    <td>'.$item[11].'</td>
    <td>'.$item[12].'</td>
    
    <td> 
    <a href="index.php?seccion=editarVacas&numArete='.$item[0].'">Editar</a>
    <a href="index.php?seccion=listaVacas&accion=eliminar&id='.$item[0].'">Borrar</a>
     </td>
    </tr>
    ';
}

?>




<div class="mb-3">
 <a class="btn btn-danger" href="index.php?seccion=listaVacas">Cancelar</a>
 <input type="submit" class="btn btn-success" name="editar" value="Actualizar">

</div>
</form>
</div>
</div>
</div>