
<?php 
include '../headerPrin.php';
?>
<br>
<body>
    <div class="container">
        <div class="jumbotron mt-3">

        <?php 

        $mes = mysqli_query(conexion(), "select *from meses where meses.id_mes =".$_GET['id']);
        $nombre_mes = $mes->fetch_assoc();
        $result = mysqli_query(conexion(), "select *from cursos, meses, instructores where cursos.id_instructor = instructores.id_instructor
            and cursos.id_mes = meses.id_mes AND meses.id_mes =".$_GET['id']);
        ?>
            <div class="row">
                <div class="col-md-12">
                    <a href="nuevo_curso.php?id_mes=<?php echo   $nombre_mes['id_mes']?>&id=0&accion=add&mes=<?php echo   $nombre_mes['nombre_mes']?>"><i class="fa fa-plus fa-2x" style="color: #212529;"></i></a>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <h3><?php echo  $nombre_mes['nombre_mes'] ?></h3>
                        </div>
                    </div>

                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Instructor</th>
                                <th scope="col">Curso</th>
                                <th scope="col">Archivo</th>
                                <th scope="col">Acción</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($sql = mysqli_fetch_array($result)) { ?>
                            <tr>
                                <td><?php echo $sql['nombre_instructor'] ?></td>
                                <td><?php echo $sql['nombre_curso'] ?></td>
                                <td><a href="../../<?php echo  $sql['archivo_curso']?>" target="_blank"><i class="far fa-file-pdf pointer" style="color: #212529;"></i></a></td>
                                <td>
                                    <a href="nuevo_curso.php?id_mes=<?php echo   $nombre_mes['id_mes']?>&id=<?php echo $sql['id_curso'] ?>&accion=edit&mes=<?php echo   $nombre_mes['nombre_mes']?>&rut=<?php echo  base64_encode($sql['archivo_curso']) ?>"><i class="fa fa-edit pointer" style="color: #212529;"></i></a>
                                    &nbsp;&nbsp;<i class="fa fa-trash pointer" onclick="eliminar()" id="eliminar" data-archivo="<?php echo  $sql['archivo_curso']?>" data-id="<?php echo $sql['id_curso'] ?>" data-mes="<?php echo $sql['id_mes'] ?>" style="color: #212529;"></i>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>

                <!-- ---------------------- ELIMINAR CURSO ---------------------------->
                <script type="text/javascript">
                    function eliminar() {
                        var data = document.getElementById('eliminar');
                        var id = data.getAttribute("data-id");
                        var id_mes = data.getAttribute("data-mes");
                        var ruta = data.getAttribute("data-archivo");
                        if(confirm("¿DESEAS ELIMINAR ESTE ELEMENTO?")){
                            window.location = "../../controlador/cursos_acciones.php?accion=el&id="+id+"&rut="+ruta+"&mes="+id_mes;
                        }
                    };
                </script>
            </div>
        </div>
    </div>
</body>
			
<?php
include '../footerP.php'; // ubicacion del footer
?>
