
<?php 
require_once('controlador/conexion.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<!-- links necesarios para que los  las formas y colores de los componentes de la pagina agarren de forma correcta-->
	<meta charset="utf8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<meta name="robots" content="noindex, nofollow">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

	<title>CFE | Suministro básico</title>
        <script  type="text/javascript" src="plugins/js/jquery-3.2.1.slim.min.js?<?php echo md5(microtime())?>"></script>
        <link rel="stylesheet" type="text/css" href="plugins/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="plugins/css/estiloss.css">
        
        <link href="img/logo_verd.jpg" rel="icon" type="image/jpg">
        
        
</head>
		
			
	<body>				
		<!--Botones de header-->	
		<nav class="navbar navbar-expand-lg ">			  
			  <!--boton de Estructura SB-->
			  <div class="collapse navbar-collapse" id="navbarSupportedContent">

			  	<a class="navbar-brand" href="#"> <img id="CFE" src="img/cfe.png" width="150" height="75" class="d-inline-block align-center" alt=""></a>

			    <ul class="navbar-nav mr-auto">
			    	  
					  <!--boton de inicio-->
					  <a href="index.php" ><button type="button" class="btn btn-white active" data-target="#" ><i class="fas fa-home"></i> Inicio </button><span class="sr-only">(current)</span></a>
					  <!--boton  superintendencia-->
					  <a href="superintendencia.php" ><button style="margin-left: 4px;" type="button" class="btn btn-white" data-toggle="modal" data-target="#" ><!--<i class="fas fa-home">--></i> Superintendencia </button></a>
			      <div class="btn-group">   
				      	<button style="margin-left: 4px;" type="button" class="btn btn-white dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Estructura SB  
				      	</button>  
				     <!--item de suministro-->
				        <div class="dropdown-menu">    
				      	    <a class="dropdown-item" href="PDF-Organigram-per.pdf"><small>Suministro</small></a>   
				      	</div> 
			      </div>
			      <!--boton  cursos 2018-->
			      <div class="btn-group">   
				      	<button style="margin-left: 4px;" type="button" class="btn btn-white dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Cursos 2018</button>  
				      	<!--items de  enero a febrero-->
				        <div class="dropdown-menu " style="height: 465px;">

				        	<?php

						        $sql = "select *from meses ";
						        $result = mysqli_query(conexion(), $sql);
					        
					        while ($sql = mysqli_fetch_array($result)) { ?>

					      	    <div>
				        			<button style="width: 160px; height: 35px; text-align: center" type="button" class="btn alert-secondary" id="meses" data-id_mes="<?php echo  $sql['id_mes']?>" data-toggle="modal" data-target="#ventana"><?php echo  $sql['nombre_mes']?></button>
				        		</div>

					      	<?php } ?>

				      	</div>
			      </div>

			      <!--modal de cursos 2018-->
				    <!--modal ventana-->
				    <!-- Modal -->

				    <script type="text/javascript">
				    	$(document).ready(function() {
				    		$('body').on('click','#meses', function () {
						        var id = $(this).attr('data-id_mes');
						        $.ajax({
						            url: "controlador/cursos_acciones.php",
						            type: 'POST',
						            dataType: 'json',
						            data:{
						                id:id,
						                accion:"ajax"
						            },beforeSend: function () {
						            },success: function (data) {
						            	if(data.tr != ""){
						                	$('#tabla-cursos tbody').html(data.tr);
						            	}else {
						            		$('#tabla-cursos tbody').html("<tr><td>NO HAY CURSOS REGISTRADOS</td></tr>");
						            	}
						            },error: function (e) {
						                console.log(e);
						            }
						        });
						    });
				    	});
				    </script>

					<div class="modal fade" id="ventana" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					  	<div class="modal-dialog" role="document">
					    	<div class="modal-content">
					      		<div class="modal-header">
					        		<h5 class="modal-title" id="exampleModalLabel"> Cursos del mes de  de 2018</h5>
							        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
							          <span aria-hidden="true">&times;</span>
							        </button>
						      	</div>
					      		<div class="modal-body">
				      				<div class="col-md-12 col-sm-6">
					  		<div class="card">
					        	<table class="table" id="tabla-cursos">
			                        <thead class="thead-dark">
			                            <tr>
			                                <th scope="col">Instructor</th>
			                                <th scope="col">Curso</th>
			                                <th scope="col">Archivo</th>
			                            </tr>
			                        </thead>
			                        <tbody>
			                        </tbody>
			                    </table> 
							</div>
					    </div>
					      </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
					      </div>
					    </div>
					  </div>
					</div>
					
			      <!--boton ligas de interes-->

			      <div class="btn-group">   
			      	<button style="margin-left: 4px;" type="button" class="btn btn-white dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Ligas de interés</button>

			      	<!--boton items de ligas-->

			        <div class="dropdown-menu">       
			      	    <a style="height: 29px; " class="dropdown-item" href="http://10.18.160.24/Login.php"><small>Carga de aspectos ambientales</small></a>
			      	    <div class="dropdown-divider"></div> 
			      	    <a style="height: 29px;" class="dropdown-item" href="http://cedac.cfemex.com/"><small>CEDAC</small></a> 
			      	    <div class="dropdown-divider"></div>     
			      	    <a style="height: 29px;" class="dropdown-item" href="http://10.151.1.51/CRESPONSIVAS/accesa.aspx"><small>Carta responsiva</small></a>   
			      	    <div class="dropdown-divider"></div>     
			      	    <a style="height: 29px;" class="dropdown-item" href="http://10.151.1.13:8080/firmasuministro/"><small>Firma lotus | suministro</small></a>
			      	    <div class="dropdown-divider"></div>  
			      	    <a  style="height: 29px;" class="dropdown-item" href="http://telecom.dk0.cfemex.com/cgi-bin/ttx.cgi"><small>Mesa TELECOM</small></a>  
			      	    <div class="dropdown-divider"></div>     
			      	    <a  style="height: 29px;" class="dropdown-item" href="http://10.151.1.12/sirij/"><small>R I M</small></a> 
			      	    <div class="dropdown-divider"></div> 
			      	    <a  style="height: 29px;" class="dropdown-item" href="http://10.151.160.21/webcalendar/login.php?"><small>Web calendar</small></a>  
			      	    <div class="dropdown-divider"></div>     
			      	    <a  style="height: 29px;" class="dropdown-item" href="http://10.151.160.21/call/"><small>Control polizas</small></a> 
			      	    <div class="dropdown-divider"></div>
			      	    <a style="height: 29px;" class="dropdown-item" href="http://10.151.160.21/REPORTES_N_I/index.html"><small>Recibos no impresos</small></a>  
			      	    <div class="dropdown-divider"></div>     
			      	    <a style="height: 29px;" class="dropdown-item" href="http://10.151.160.21/ESTADO_CICLO"><small>Control de ciclos</small></a>			    
			      	</div> 
			      </div>

			      <!--boton de directorio personal-->

			        <a href="#" ><button style="margin-left: 4px;" type="button" class="btn btn-white" data-toggle="modal" data-target="#directorio" > Directorio personal </button></a>

			        <!--boton portal divisional-->

			        <a href="http://10.19.151.53/Nova/ModSB2016/index.aspx" > <button  style="margin-left: 4px;" type="button" class="btn btn-white" >Portal Divisional
				  </button></a>

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