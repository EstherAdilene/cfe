<?php
include '../../controlador/conexion.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="utf8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex, nofollow">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>CFE | Suministro básico</title>
    
    <script src="../../plugins/js/jquery-3.2.1.slim.min.js" type="text/javascript"></script>
    
    <link href="../../plugins/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="../../plugins/css/estiloss.css" rel="stylesheet" type="text/css" >
    <link href="../../img/logo_verd.jpg" rel="icon" type="image/jpg">


</head>
	<body>
		

		<nav class="navbar navbar-expand-lg ">			  
			  <!--boton de Estructura SB-->
			  <div class="collapse navbar-collapse" id="navbarSupportedContent">

			  	<a class="navbar-brand" href="#"> <img id="CFE" src="../../img/cfe.png" width="150" height="75" class="d-inline-block align-center" alt=""></a>

			    <ul class="navbar-nav mr-auto" aling="left">
			    	  
					  <!--boton de inicio-->
					  <a href="../slider/SliderP.php" ><button type="button" class="btn btn-white active" data-target="#" ></i>Slider</button><span class="sr-only">(current)</span></a>
					  <!--boton galeria-->
					  <a href="../galeria/GaleriaP.php"><button style="margin-left: 4px;" type="button" class="btn btn-white" data-toggle="modal" data-target="#" ><!--<i class="fas fa-home">--></i>Galeria</button></a>
					  <!--boton  superintendencia-->
                                          <a href="../superintendencia/superintendenciaP.php" ><button style="margin-left: 4px;" type="button" class="btn btn-white" data-toggle="modal" data-target="#" ><!--<i class="fas fa-home">--></i>Superintendencia</button></a>
					  <a href="../instructores/index_instructores.php" ><button style="margin-left: 4px;" type="button" class="btn btn-white" data-toggle="modal" data-target="#" ><!--<i class="fas fa-home">--></i>Instructor</button></a>
			      <!--boton  cursos 2018-->
			      <div class="btn-group">   
				      	<button style="margin-left: 4px;" type="button" class="btn btn-white dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Cursos 2018</button>  
				      	<!--items de  enero a febrero-->
				        <div class="dropdown-menu ">    


				        	<?php
                                                
						        $sql = "select *from meses ";
						        $result = mysqli_query(conexion(), $sql);
					        
					        while ($sql = mysqli_fetch_array($result)) { ?>

					      	    <a style="height: 15px;"class="dropdown-item" href="../../catalogos/cursos/index_curso.php?id=<?php echo $sql['id_mes']?>"><small><?php echo $sql['nombre_mes']?></small></a> 
					      	    <div class="dropdown-divider"></div>

					      	<?php } ?>
				      	</div> 
			      </div>

			      <!--boton ligas de interes-->
 
			      <div class="btn-group">   
			      	<button style="margin-left: 4px;" type="button" class="btn btn-white dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Ligas de interés</button>

			      	<!--boton items de ligas-->

			        <div class="dropdown-menu">       
			      	    <a style="height: 15px; " class="dropdown-item" href="http://10.18.160.24/Login.php"><small>Carga de aspectos ambientales</small></a>
			      	    <div class="dropdown-divider"></div> 
			      	    <a style="height: 15px;" class="dropdown-item" href="http://cedac.cfemex.com/"><small>CEDAC</small></a> 
			      	    <div class="dropdown-divider"></div>     
			      	    <a style="height: 15px;" class="dropdown-item" href="http://10.151.1.51/CRESPONSIVAS/accesa.aspx"><small>Carta responsiva</small></a>   
			      	    <div class="dropdown-divider"></div>     
			      	    <a style="height: 15px;" class="dropdown-item" href="http://10.151.1.13:8080/firmasuministro/"><small>Firma lotus | suministro</small></a>
			      	    <div class="dropdown-divider"></div>  
			      	    <a  style="height: 15px;" class="dropdown-item" href="http://telecom.dk0.cfemex.com/cgi-bin/ttx.cgi"><small>Mesa TELECOM</small></a>  
			      	    <div class="dropdown-divider"></div>     
			      	    <a  style="height: 15px;" class="dropdown-item" href="http://10.151.1.12/sirij/"><small>R I M</small></a> 
			      	    <div class="dropdown-divider"></div> 
			      	    <a  style="height: 15px;" class="dropdown-item" href="http://10.151.160.21/webcalendar/login.php?"><small>Web calendar</small></a>  
			      	    <div class="dropdown-divider"></div>     
			      	    <a  style="height: 15px;" class="dropdown-item" href="http://10.151.160.21/call/"><small>Control polizas</small></a> 
			      	    <div class="dropdown-divider"></div>
			      	    <a style="height: 15px;" class="dropdown-item" href="http://10.151.160.21/REPORTES_N_I/index.html"><small>Recibos no impresos</small></a>  
			      	    <div class="dropdown-divider"></div>     
			      	    <a style="height: 20px;" class="dropdown-item" href="http://10.151.160.21/ESTADO_CICLO"><small>Control de ciclos</small></a>			    
			      	</div> 
			      </div>

			      <!--boton de directorio personal-->

			        <a href="#" ><button style="margin-left: 4px;" type="button" class="btn btn-white" data-toggle="modal" data-target="#directorio" > Directorio personal </button></a>

			        <!--boton portal divisional-->

			        <a href="http://10.19.151.53/Nova/ModSB2016/index.aspx" > <button  style="margin-left: 4px;" type="button" class="btn btn-white" >Portal Divisional
				  </button></a>

				  <a style="margin-left: 30px;" class="navbar-brand" title="Cerrar Sesión" href="../login/logout.php" data-content="Cerrar Sesión"><img src="../../img/logout.jpg" width="30" height="30" class="d-inline-block align-center"  alt=""></a>


			    </ul>
			  </div>
			  
		</nav>

		<!--modal de directorio personal-->

		<div  id="directorio" class="modal  bd-example-modal-lg" tabindex="-1" role="dialog" arialabelledby="myLargeModalLabel" aria-hidden="true"> 
		  <div class="modal-dialog modal-lg ">    
		    <div class="modal-content">   
		       <div class="modal-header">        
		            <h5 class="modal-title">Directorio Personal</h5>         
		            <button type="button" class="close" data-dismiss="modal" aria-label="Close">           
		         	<span aria-hidden="true">&times;</span></button>      
		        </div> 


		        <!-- cuerpo de la ventana modal-->

		        <div class="modal-body"> 

		        	<!--funcion del buscador para hacer la consulta en tiempo real-->

				      <script type="text/javascript">
				        $(document).ready(function () {
				            (function ($) {
				                $('#filtrar').keyup(function () {
				                    var rex = new RegExp($(this).val(), 'i');
				                    $('.buscar tr').hide();
				                    $('.buscar tr').filter(function () {
				                        return rex.test($(this).text());
				                    }).show();
				                })
				            }(jQuery));
				        });
				      </script>  
				    <br>

				    <!-- buscador donde se hace  la consulta de los datos-->
				    <div class="row">
				      <div class="input-group col-md-8"> <button class="btn btn-success disabled " style="">Buscar</button>
				        <input id="filtrar" type="text" class="form-control" placeholder="Buscador...">
				      </div>
				      <div>
				      	<a href="reportes/reporte.php"><button class="btn btn-success"> PDF </button></a>
				      </div>
				    </div>
				      <br>

				      	<!--tabla de la modal de directorio-->
					    <table class="table  table-striped table-ligth table-hover table-sm table-bordered">
				        <?php  
				        		//consulta SQL donde manda a llamar todas las extenciones desde la base de datos de la tabla directoriotelefonico con orden ascendente.//
				                $sql="SELECT extencionAnterior, extencionNueva, usuario, telefonoDirecto From directoriotelefonico order by extencionNueva desc ";
				                // resultado sql donde se llama la conexion que en la parte de arriba esta como require_once('conexion.php') y  la sentencia SQL donde se encuentra la consulta
				                $result=mysqli_query(conexion(), $sql);
				                ?>
				        <thead>
				          <tr>

				          <!-- columnas donde estan los titulos de la tabla-->

				             <th scope="col">Extensión anterior</th>
				             <th scope="col">Extensión nueva</th>
				             <th scope="col">Usuario</th>
				             <th scope="col">Télefono directo</th>

				          </tr>
				        </thead>
				        <tbody class="buscar">

				        	<!-- cuerpo de la tabla  donde se mandan a llamar todos los datos con un conexion a base de datos con un ciclo while  que recorre todas las filas y muestra el resultado y la coloca dentro de cada $row-->

				          <?php  while($row=mysqli_fetch_row($result)){ ?>
				                <tr>
				                  <td><?php echo $row[0] ?></td>
				                  <td><?php echo $row[1] ?></td>
				                  <td><?php echo $row[2] ?></td>
				                  <td><?php echo $row[3] ?></td>
				                </tr>
				              <?php } ?>
				        </tbody>
				      </table>
				    </div>	

		    </div>
		  </div>
         </div> 

        </div>	

