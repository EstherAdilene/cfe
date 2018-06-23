
<?php 
include '../headerPrin.php';
?>
<br>
<body>
    <div class="container">
        <div class="jumbotron mt-3">
        <?php
         $sql = mysqli_query(conexion(), "select *from cursos, instructores where cursos.id_instructor = instructores.id_instructor AND cursos.id_curso =".$_GET['id']);

        $instructores = mysqli_query(conexion(), "select *from instructores where id_instructor =".$_GET['id']);
        $fila = $instructores->fetch_assoc();
        $fila2 = $sql->fetch_assoc();
        ?>   
        <div class="col-md-6" style="margin: auto;">
                <div class="card border-grey  text-center" align="text-center" style="width: 29rem; height: 33rem;"> 
                    
                    <div class="card-body border-dark"> 
                        <h2 class="card-title"> <?php echo  $_GET['id'] == 0 ? 'Nuevo curso' : 'Editar Curso' ?></h2>
                        <div class="custom-file">
                        <br>
                        <form name="form1" action="../../controlador/instructor_acciones.php?id=<?php echo  $fila['id_curso']?>&accion=<?php echo  $_GET['accion']?>" method="POST" enctype="multipart/form-data">

                            <h4>Instructor:</h4>
                            <br> 
                            <!-- Input para seleccionar al instructor-->
                            <input type="text"  name="nombre_instructor" class="form-control" placeholder="Nombre del instructor" value="<?php echo  $fila['nombre_instructor']?>">
                            <br>

                            
                            <?php if($_GET['id'] != 0) { ?>
                            <input type="hidden" name="id_instructor" value="<?php echo  $_GET['id']?>">
                            <?php } ?>

                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </form>
                        </div>
                    </div>
                </div>							
            </div>
        </div>

			
<?php
include '../footerP.php'; // ubicacion del footer

?>

