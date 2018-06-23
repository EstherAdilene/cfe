
<?php 
include '../headerPrin.php' ;
?>
<br>
<body>
    <div class="container">
        <div class="jumbotron mt-3">
            <div class="row">
                <div class="col-md-12">
                    <a href="nuevo.php?id=0&accion=add"><i class="fa fa-plus fa-2x" style="color: #212529;"></i></a>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <?php 
                    $results = mysqli_query(conexion(), "SELECT *FROM tarjetas");
                    $result = mysqli_query(conexion(), "SELECT *FROM tarjetas");
                    ?>
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Ruta</th>
                                <th scope="col">Descripción</th>
                                <th scope="col">Vista previa</th>
                                <th scope="col">Acción</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($sql = mysqli_fetch_array($result)) { ?>
                            <tr>
                                <td><?php echo $sql['id_tarjeta'] ?></td>
                                <td><?php echo $sql['ruta_tarjeta'] ?></td>
                                <td><?php echo $sql['descripcion_tarjeta'] ?></td>
                                <td><a href="#"><i class="fa fa-image pointer" data-toggle="modal" data-target="#<?php echo  $sql['id_tarjeta']?>" style="color: #212529;"></i></a></td>
                                <td>
                                    <a href="nuevo.php?id=<?php echo $sql['id_tarjeta'] ?>&accion=edit"><i class="fa fa-edit pointer" style="color: #212529;"></i></a>
                                    &nbsp;&nbsp;<i class="fa fa-trash pointer" id="eliminar" onclick="eliminar()" data-archivo="<?php echo  base64_encode($sql['ruta_tarjeta'])?>" data-id="<?php echo $sql['id_tarjeta'] ?>" style="color: #212529;"></i>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>

                <!-- ---------------------- MODAL IMAGEN ---------------------------->
                <script type="text/javascript">
                    function eliminar() {
                        var data = document.getElementById('eliminar');
                        var id = data.getAttribute("data-id");
                        var ruta = data.getAttribute("data-archivo");
                        if(confirm("¿DESEAS ELIMINAR ESTE ELEMENTO?")){
                            window.location = "../../controlador/galeria_acciones.php?accion=el&id="+id+"&rut="+ruta;
                        }
                    };
                </script>
                <?php while($row = mysqli_fetch_array($results)) {?>
                <div class="modal  bd-example-modal" id="<?php echo  $row['id_tarjeta']?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-sm modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Vista previa</h5>
                            </div>
                            <div class="modal-body">
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <img src="<?php echo "../../".$row['ruta_tarjeta']; ?>" id="imagen_modal" width="100%" height="100%">
                                    </div>
                                </div>					
                            </div>
                            <div class="modal-footer">
                              <button type="delete" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ---------------------- END MODAL IMAGEN ---------------------------->
                <?php } ?>
            </div>
        </div>
    </div>
</body>
			
<?php
include '../footerP.php'; // ubicacion del footer
?>
