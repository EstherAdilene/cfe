
<?php 
include '../headerPrin.php';
?>
<br>
<body>
    <div class="container">
        <div class="jumbotron mt-3">

        <?php 
        $result = mysqli_query(conexion(), "select *from instructores");
        ?>
            <div class="row">
                <div class="col-md-12">
                    <a href="nuevo_instructor.php?id=0&accion=add"><i class="fa fa-plus fa-2x" style="color: #212529;"></i></a>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <h3>Instructores</h3>
                        </div>
                    </div>

                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Instructor</th>
                                <th scope="col">Acción</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($sql = mysqli_fetch_array($result)) { ?>
                            <tr>
                                <td><?php echo  $sql['id_instructor'] ?></td>
                                <td><?php echo  $sql['nombre_instructor'] ?></td>
                                <td>
                                    <a href="nuevo_instructor.php?id=<?php echo  $sql['id_instructor'] ?>&accion=edit"><i class="fa fa-edit pointer" style="color: #212529;"></i></a>
                                    &nbsp;&nbsp;<i class="fa fa-trash pointer" onclick="eliminar()" id="eliminar" data-id="<?php echo $sql['id_instructor'] ?>" style="color: #212529;"></i>
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
                        if(confirm("¿DESEAS ELIMINAR ESTE ELEMENTO?")){
                            window.location = "../../controlador/instructor_acciones.php?accion=el&id="+id;
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
