<div class="col-sm-12">
    <div class="table-responsive">
        <?php if(array_key_exists(1, $datos)){ ?>
            <table class="table table-striped">
                <thead>
                    <tr class="info">
                        <th class="text-center">Folio</th>
                        <th class="text-center">Fecha de inicio</th>
                        <th class="text-center">Fecha de término</th>
                        <th class="text-center">Apellido paterno</th>
                        <th class="text-center">Apellido materno</th>
                        <th class="text-center">Nombre</th>

                        <th class="text-center">Especialidad</th>
                        <th class="text-center">Unidad</th>
                        <th class="text-center">Delegación</th>
                        <th class="text-center">Categoría</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if(isset($datos[1]) AND !empty($datos[1])){
                        foreach ($datos[1] as $key => $dato) {
                            
                            echo '<tr>
                                <td>'.$dato['res_folio'].'</td>
                                <td>'.$dato['res_fecha_inicio'].'</td>
                                <td>'.$dato['res_fecha_termino'].'</td>
                                <td>'.$dato['res_apellido_paterno'].'</td>
                                <td>'.$dato['res_apellido_materno'].'</td>
                                <td>'.$dato['res_nombre'].'</td>
                                <td>'.$dato['res_especialidad'].'</td>
                                <td>'.$dato['res_unidad'].'</td>
                                <td>'.$dato['res_ciudad'].'</td>
                                <td>'.$dato['res_categoria'].'</td>
                            </tr>';
                        }                
                    } else {
                        echo '<tr>
                            <td colspan="11">No existen registros con los datos introducidos.</td>
                        </tr>';
                    }
                    ?>
                </tbody>
            </table>
    <?php } ?>




    <?php if(array_key_exists(2, $datos)){ ?>
            <table class="table table-striped">
                <thead>
                    <tr class="info">
                        <th class="text-center">Folio</th>
                        <th class="text-center">Fecha de inicio</th>
                        <th class="text-center">Fecha de término</th>
                        <th class="text-center">Apellido paterno</th>
                        <th class="text-center">Apellido materno</th>
                        <th class="text-center">Nombre</th>
                        <th class="text-center">Curso</th>
                        <th class="text-center">Modalidad</th>
                        <th class="text-center">Sede</th>
                        <th class="text-center">Rol</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if(isset($datos[2]) AND !empty($datos[2])){
                        foreach ($datos[2] as $key => $dato) {
                            
                            echo '<tr>
                                <td>'.$dato['res_folio'].'</td>
                                <td>'.$dato['res_fecha_inicio'].'</td>
                                <td>'.$dato['res_fecha_termino'].'</td>
                                <td>'.$dato['res_apellido_paterno'].'</td>
                                <td>'.$dato['res_apellido_materno'].'</td>
                                <td>'.$dato['res_nombre'].'</td>
                                <td>'.$dato['ed_nombre_curso'].'</td>
                                <td>'.$dato['ed_modalidad'].'</td>
                                <td>'.$dato['ed_sede'].'</td>
                                <td>'.$dato['ed_rol'].'</td>
                            </tr>';
                        }                
                    } else {
                        echo '<tr>
                            <td colspan="11">No existen registros con los datos introducidos.</td>
                        </tr>';
                    }
                    ?>
                </tbody>
            </table>
    <?php } ?>


    </div>
</div>
