<?php
include 'conexion.php';

if($_REQUEST['accion'] == 'add') {
    //Crea una ruta con el nombre de la imagen
    $ruta = '../img/'.$_FILES['imagen']['name'];
    //Copia la imagen a la ruta especificada en $ruta 
    move_uploaded_file($_FILES['imagen']['tmp_name'],$ruta);
    //Insertamos la ruta y otro dato a la BD
    $insert = "insert into tarjetas(ruta_tarjeta, descripcion_tarjeta) values('img/".$_FILES['imagen']['name']."','".$_POST['descripcion_tarjeta']."')";
    mysqli_query(conexion(), $insert);
    header('location:../catalogos/galeria/GaleriaP.php');
}else if($_REQUEST['accion'] == 'edit'){
    //Eliminamos el archivo que ya no sera usado
     unlink("../".$_REQUEST["ruta_img_elim"]);
    //Crea una ruta con el nombre de la imagen
    $ruta = '../img/'.$_FILES['imagen']['name'];
    //Copia la imagen a la ruta especificada en $ruta 
    move_uploaded_file($_FILES['imagen']['tmp_name'],$ruta);
    //Insertamos la ruta y otro dato a la BD
    $update = "UPDATE tarjetas SET ruta_tarjeta='img/".$_FILES['imagen']['name']."', nombre_tarjeta = '".$_REQUEST['nombre_archivo']."'
               WHERE id_tarjeta=".$_REQUEST['id']."";
    mysqli_query(conexion(), $update);
    header('location:../catalogos/galeria/GaleriaP.php');
    
}else if($_REQUEST['accion'] == 'el'){
    $delete = "DELETE FROM tarjetas WHERE id_tarjeta=".$_REQUEST['id'];
    mysqli_query(conexion(), $delete);
    //<<Unlink>> Elimina la imagen de la carpeta permanentemente
    unlink("../".base64_decode($_REQUEST['rut']));
    header('location:../catalogos/galeria/GaleriaP.php');
}else{
    echo '<script>alert("¡Ocurrio un error!");</script>';
}