<?php 
include '../headerPrin.php'; 
?>

<br>
<body>
<div class="container">
    <div class="jumbotron mt-3">
        <div class="row">
                <div class="col-md-12">
        <?php
         $sql = mysqli_query(conexion(), "select *from cursos, instructores where cursos.id_instructor = instructores.id_instructor AND cursos.id_curso =".$_GET['id']);

        $instructores = mysqli_query(conexion(), "select *from instructores");

        $fila = $sql->fetch_assoc();
        ?>   
        <div class="col-md-6" style="margin: auto;">
                <div class="card border-grey  text-center" align="text-center" style="width: 29rem; height: 33rem;"> 
                    
                    <div class="card-body border-dark"> 
                        <h5 class="card-title"> <?php echo  $_GET['id'] == 0 ? 'Nuevo curso' : 'Editar Curso' ?></h5>
                        <div class="custom-file">
                        <br>
                        <form name="form1" action="../../controlador/cursos_acciones.php?id=<?php echo  $fila['id_curso']?>&accion=<?php echo  $_GET['accion']?>" method="POST" enctype="multipart/form-data">
                            <!-- Input para la imagen-->
                            <input name="archivo" type="file">

                            <br><br> Curso: 
                            <!-- Input para el curso-->
                            <input type="text" name="nombre_curso" class="form-control" placeholder="Nombre del curso" value="<?php echo  $fila['nombre_curso']?>">
                            <br>

                            Instructor: 
                            <!-- Input para seleccionar al instructor-->
                            <select name="id_instructor" class="form-control" id="id_instructor" data-id="<?php echo  $fila['id_instructor'] ?>">
                                <option value="">Seleccionar...</option>
                                <?php while($inst = mysqli_fetch_array($instructores)) { ?>
                                <option value="<?php echo  $inst['id_instructor'] ?>"><?php echo  $inst['nombre_instructor'] ?></option>
                                <?php } ?>
                            </select>

                            <br>
                            Mes: <input type="text" disabled="" name="mes" class="form-control" value="<?php echo  $_GET['mes'] ?>">
                            <br>
                            <input type="hidden" name="id_mes" value="<?php echo  $_GET['id_mes']?>">
                            <input type="hidden" name="id" value="<?php echo  $_GET['id']?>">
                            <?php if($_GET['id'] != 0) { ?>
                            <input type="hidden" name="ruta" value="<?php echo  $_GET['rut']?>">
                            <?php } ?>

                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </form>
                        </div>
                    </div>
                </div>							
            </div>
        </div>
    </div>
</div>
</div>
</body>


			
<?php
include '../footerP.php'; // ubicacion del footer

?>

