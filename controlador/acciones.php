<?php
include 'conexion.php';

if($_REQUEST['accion'] == 'add') {
    //Crea una ruta con el nombre de la imagen
    $ruta= 'img/'.md5(rand()).'.'.end(explode('.',$_FILES['imagen']['name']));
    //Copia la imagen a la ruta especificada en $ruta 
    move_uploaded_file($_FILES['imagen']['tmp_name'],"../".$ruta);
    //Insertamos la ruta y otro dato a la BD
    $insert = "insert into slider(ruta_slider, nombre_slider) values('".$ruta."','".$_POST['nombre_archivo']."')";
    $q = mysqli_query(conexion(), $insert);
    header('location:../catalogos/slider/SliderP.php');
}else if($_REQUEST['accion'] == 'edit'){
    //Eliminamos el archivo que ya no sera usado
    $archivo = $_FILES['imagen']['name'];
    if($archivo == ''){
        $update = "UPDATE slider SET nombre_slider = '".$_REQUEST['nombre_archivo']."'
                   WHERE id_slider=".$_REQUEST['id']."";
    }else {
        unlink("../".$_REQUEST["ruta_img_elim"]);
        //Crea una ruta con el nombre de la imagen
        $ruta= 'img/'.md5(rand()).'.'.end(explode('.',$_FILES['imagen']['name']));
        //Copia la imagen a la ruta especificada en $ruta 
        move_uploaded_file($_FILES['imagen']['tmp_name'],"../".$ruta);
        //Insertamos la ruta y otro dato a la BD
        $update = "UPDATE slider SET ruta_slider='".$ruta."', nombre_slider = '".$_REQUEST['nombre_archivo']."'
               WHERE id_slider=".$_REQUEST['id']."";
    }
    
    mysqli_query(conexion(), $update);
    header('location:../catalogos/slider/SliderP.php');
    
}else if($_REQUEST['accion'] == 'el'){
    $delete = "DELETE FROM slider WHERE id_slider=".$_REQUEST['id'];
    mysqli_query(conexion(), $delete);
    //<<Unlink>> Elimina la imagen de la carpeta permanentemente
    unlink("../".base64_decode($_REQUEST['rut']));
    header('location:../catalogos/slider/SliderP.php');
}else{
    echo '<script>alert("¡Ocurrio un error!");</script>';
}