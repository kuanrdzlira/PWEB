<div class="container">
    <div class="row">
        <div class="col-12">
            <table id="example" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>Numero Arete</th>
                        <th>Tipo</th>
                        <th>Peso</th>
                        <th>Fecha de Vacunación</th>
                        <th>Vacuna</th>
                        <th>Tipo de inseminación </th>
                        <th>Numero de inseminación</th>
                        <th>Partos</th>
                        <th>Promedio PH</th>
                        <th>Promedio Conductividad</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $lista = ControladorVacas::consultarVacas();
                        foreach ($lista as $row => $item){
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
    
                            <td> 
                            <a href="index.php?seccion=editarVacas&NumArete='.$item[0].'"><i class="bi bi-pencil-square"></i></a>
                            <a href="index.php?seccion=listaVacas&accion=eliminar&id='.$item[0].'"><i class="bi bi-trash"></i></a>
                            </td>
                        </tr>';
                    }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>