<?php
function conexion(){
	$conexion = mysqli_connect("localhost","root","","cfe2");
    mysqli_query($conexion,"SET names 'utf8'");
    return $conexion;
}
    