<?php
include 'conexion.php';

if($_REQUEST['accion'] == 'add') {
    $insert = "insert into instructores(nombre_instructor)
     values('".$_POST['nombre_instructor']."')";
    mysqli_query(conexion(), $insert);
    header('location:../catalogos/instructores/index_instructores.php');
}else if($_REQUEST['accion'] == 'edit'){

    //Insertamos la ruta y otro dato a la BD
    $update = "UPDATE instructores SET nombre_instructor='".$_REQUEST['nombre_instructor']."'
               WHERE id_instructor=".$_REQUEST['id_instructor']."";
    mysqli_query(conexion(), $update);
    header('location:../catalogos/instructores/index_instructores.php');
    
}else if($_REQUEST['accion'] == 'el'){

    $ins = "SELECT *FROM cursos WHERE id_instructor = ".$_REQUEST['id'];
    $result = mysqli_query(conexion(), $ins);

    if(empty($result)){
        $delete = "DELETE FROM cursos WHERE id_instructor=".$_REQUEST['id'];
        mysqli_query(conexion(), $delete);
        header('location:../catalogos/instructores/index_instructores.php');
    }else{
         echo '<script>alert("El instructor se encuentra asociado a un curso");</script>';
         //header('location:../instructores/index_instructores.php');
    }

    
}else{
    echo '<script>alert("¡Ocurrio un error!");</script>';
}