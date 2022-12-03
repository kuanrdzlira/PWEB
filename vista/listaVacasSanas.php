<div class="col-12">
<table class="table">
    <thead>
        <tr>
        <th>Numero Arete</th>
        <th>Peso</th>
        <th>Tipo de inseminación </th>
        <th>Numero de inseminación</th>
        <th>Partos</th>
        <th>Vacuna</th>
        <th>Promedio PH</th>
        <th>Promedio Conductividad</th>

   
</tr>
    </thead>
<tbody>
    <?php
 
$lista = ControladorVacas::consultarVacasSInfo();
    foreach ($lista as $row => $item){
    echo'
    <tr>
    <td>'.$item[0].'</td>
    <td>'.$item[2].'</td>
    <td>'.$item[5].'</td>
    <td>'.$item[6].'</td>
    <td>'.$item[7].'</td>
    <td>'.$item[4].'</td>
    <td>'.$item[8].'</td>    
    <td>'.$item[9].'</td>    

    <td> 
     </td>
    </tr>
    ';
}
    ?>
</tbody>
</table>
</div>