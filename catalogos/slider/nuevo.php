
<?php 
include '../headerPrin.php' ;
?>
<div class="container">
    <div class="jumbotron mt-3">
        <div class="row">
        <?php
        $sql = "select *from slider where id_slider=".$_GET['id'];
        $result = mysqli_query(conexion(), $sql);
        $fila = $result->fetch_assoc(); 
        ?>   
        <div class="col-md-6" style="margin-left: 25%;">
                <div class="card border-grey  text-center" align="text-center" style="width: 29rem; height: 33rem;"> 
                    <?php if($_GET['id'] != 0) { ?>
                    <img style="width: 27rem; height: 15rem; margin-left: 2rem; margin-top: 1rem;" class="card-img-top" src="../../<?php echo $fila['ruta_slider']?>" alt="Card image cap">  
                    <?php } else{ ?>
                    <img style="width: 50%; height:45%; margin-left: 25%; margin-top: 1rem;" class="card-img-top" src="../../img/agregar.png" alt="Card image cap">  
                    <?php } ?>
                    <div class="card-body border-dark"> 
                        <h5 class="card-title"><?php echo  $fila['nombre_slider']?></h5>
                        <div class="custom-file">
                        <br>
                        <form name="form1" action="../../controlador/acciones.php?id=<?php echo  $fila['id_slider']?>&accion=<?php echo  $_GET['accion']?>" method="POST" enctype="multipart/form-data">
                            <input name="imagen" type="file">
                            <br>
                            <br>
                            Descripción<input type="text" name="nombre_archivo" class="form-control" placeholder="Nombre del archivo" value="<?php echo  $fila['nombre_slider']?>">
                            <br>
                            <?php if($_GET['id'] != 0) { ?>
                            <input type="hidden" name="ruta_img_elim" value="<?php echo $fila['ruta_slider']?>">
                            <?php }?>
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

