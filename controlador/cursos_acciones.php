<?php
include 'funciones.php';
include 'conexion.php';

if($_REQUEST['accion'] == 'add') {
    //Crea una ruta con el nombre de la imagen
    $ruta = '../archivos/'.$_FILES['archivo']['name'];
    //Copia la imagen a la ruta especificada en $ruta 
    move_uploaded_file($_FILES['archivo']['tmp_name'],$ruta);
    //Insertamos la ruta y otro dato a la BD
    $insert = "insert into cursos(id_instructor, id_mes, nombre_curso, archivo_curso)
     values(".$_POST['id_instructor'].",".$_POST['id_mes']." ,'".$_POST['nombre_curso']."', 'archivos/".$_FILES['archivo']['name']."')";
    mysqli_query(conexion(), $insert);
    header('location:../catalogos/cursos/index_curso.php?id='.$_POST['id_mes']);

}else if($_REQUEST['accion'] == 'edit'){

    unlink("../".base64_decode($_REQUEST["ruta"]));
    $ruta = '../archivos/'.$_FILES['archivo']['name'];
    move_uploaded_file($_FILES['archivo']['tmp_name'],$ruta);


    $update = "UPDATE cursos SET id_instructor = ".$_REQUEST['id_instructor'].",
            nombre_curso = '".$_REQUEST['nombre_curso']."', archivo_curso = 'archivos/".$_FILES['archivo']['name']."'
            WHERE id_curso=".$_REQUEST['id']."";

    mysqli_query(conexion(), $update);

    header('location:../catalogos/cursos/index_curso.php?id='.$_POST['id_mes']);
    
}else if($_REQUEST['accion'] == 'el'){
    $delete = "DELETE FROM cursos WHERE id_curso=".$_REQUEST['id'];
    mysqli_query(conexion(), $delete);
    //<<Unlink>> Elimina la imagen de la carpeta permanentemente
    unlink("../".base64_decode($_REQUEST['rut']));
    header('location:../catalogos/cursos/index_curso.php?id='.$_REQUEST['mes']);


//ESTO ES UN AJAX, DEVUELVE UNA RESPUESTA AL ARCHIVO DONDE SE ESTA HACIENDO LA PETICION
    //EN ESTE CASO EL ARCHIVO HEADER

}else if($_REQUEST['accion'] == 'ajax'){

    $result = mysqli_query(conexion(), "select *from cursos, meses, instructores where cursos.id_instructor = instructores.id_instructor
    and cursos.id_mes = meses.id_mes AND meses.id_mes = ".$_POST['id']);

    $tr = "";
    while ($row = mysqli_fetch_array($result)) {
        $tr.= '<tr> 
            <td>'.$row['nombre_instructor'].'</td>
            <td>'.$row['nombre_curso'].'</td>
            <td><a href="'.$row['archivo_curso'].'" target="_blank"><i class="far fa-file-pdf pointer" style="color: #212529;"></i></a></td>
        </tr>';
    }
    echo json_encode(array('tr' => $tr));

// FIN DEL AJAX

}else{
    echo '<script>alert("¡Ocurrio un error!");</script>';
}