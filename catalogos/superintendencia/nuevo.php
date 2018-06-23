<?php 
include '../headerPrin.php'; 
?>
<div class="container">
    <div class="jumbotron mt-3">
        <div class="row">
        <?php
        $sql = "select *from superintendencia where id_superintendencia=".$_GET['id'];
        $result = mysqli_query(conexion(), $sql);
        $fila = $result->fetch_assoc();
        ?>   
        <div class="col-md-6" style="margin-left: 25%;">
                <div class="card border-grey  text-center" align="text-center" style="width: 29rem; height: 33rem;"> 
                    <?php if($_GET['id'] != 0) { ?>
                    <img style="width: 20rem; height: 12rem; margin-left: 5rem; margin-top: 1rem;" class="card-img-top" src="../<?php echo $fila['ruta_filosofia']?>" alt="Card image cap">  
                    <?php } else{ ?>
                    <img style="width: 50%; height:45%; margin-left: 25%; margin-top: 1rem;" class="card-img-top" src="../img/agregar.png" alt="Card image cap">  
                    <?php } ?>

                     <?php if($_GET['id'] != 0) { ?>
                    <img style="width: 20rem; height: 12rem; margin-left: 5rem; margin-top: 1rem;" class="card-img-top" src="../<?php echo $fila['ruta_ubicacion']?>" alt="Card image cap">  
                    <?php } else{ ?>
                    <img style="width: 50%; height:45%; margin-left: 25%; margin-top: 1rem;" class="card-img-top" src="../img/agregar.png" alt="Card image cap">  
                    <?php } ?>


                    <div class="card-body border-dark"> 
                        <h5 class="card-title"><?php echo  $fila['descripcion_tarjeta']?></h5>
                        <div class="custom-file">
                        <br>
                        <form name="form1" action="../../controlador/galeria_acciones.php?id=<?php echo  $fila['id_tarjeta']?>&accion=<?php echo  $_GET['accion']?>" method="POST" enctype="multipart/form-data">
                            <input name="imagen" type="file">
                            <br>
                            <br>
                            <input type="text" name="descripcion_tarjeta" class="form-control" placeholder="descripción" value="<?php echo  $fila['descripcion_tarjeta']?>">

                            <?php if($_GET['id'] != 0) { ?>
                            <input type="hidden" name="ruta_img_elim" value="<?php echo $fila['ruta_tarjeta']?>">
                            <?php } ?>
                            <br>
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </form>
                        </div>
                    </div>
                </div>							
            </div>
        </div>
    </div>
</div>

			
<?php
include '../footerP.php'; // ubicacion del footer

?>

