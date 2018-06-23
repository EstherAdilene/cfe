<?php 
include 'include/header.php'; //ubicacion del header
?>
	<div id="demo" class="carousel slide" data-ride="carousel">
  		<ul class="carousel-indicators">
  			<?php    
		    	$result = mysqli_query(conexion(), "SELECT COUNT(id_slider) AS total FROM slider");
		    	$total = $result->fetch_assoc();
		    ?>
		    <li data-target="#demo" data-slide-to="0" class="active"></li>
		    <?php for($i = 1; $i <= $total['total']; $i++) {?>
		    <li data-target="#demo" data-slide-to="<?php echo $i; ?>"></li>
			<?php } ?>
  		</ul>
  		<div class="carousel-inner">
    		<div class="carousel-item active">
	      		<img src="img/vision.jpg" alt="Los Angeles" width="1100" height="500">
	    	</div>
		    <?php    
		    	$result = mysqli_query(conexion(), "SELECT *FROM slider");
		    	while($img = mysqli_fetch_array($result)){
		    ?>
	    	<div class="carousel-item">
	      		<img src="<?php echo $img['ruta_slider']?>" alt="Chicago" width="1100" height="500">  
	    	</div>
			<?php } ?>
  		</div>
	  	<a class="carousel-control-prev" href="#demo" data-slide="prev">
	    	<span class="carousel-control-prev-icon"></span>
	  	</a>
	  	<a class="carousel-control-next" href="#demo" data-slide="next">
	    	<span class="carousel-control-next-icon"></span>
		</a>
	</div>

			<br>
			<!-- contenedor en la que se encuentra las tarjetas de información -->
			<div class="container marketing ">
				<!-- row indica que se esta haciendo una fila, en la cual siempre se tiene un tamaño determinado de 
					12 espacios por lo cual  siempre hay que distribuir los espacios de la forma en la que 
					deseemos siempre y cuando respetando el espacio determinado , se delimita espacio col-ms-3 que 
					significa columna (col) mediana(md)- tamaño 3 (3) si se desea poner mas tarjetas en la parte 
					inferior simplemente se agrega otro <div class="row"> -->
				<div class="row" >
						<?php    
				    	$result = mysqli_query(conexion(), "SELECT *FROM tarjetas");
				    	while($img = mysqli_fetch_array($result)){

				    ?>	

					<div class="col-md-4 col-sm-6">
						<div class="card border-grey  text-center" style="width: 18rem; height: 23rem; margin-bottom: 3rem;"> 
						  <img  style="width: 14rem; height: 10rem; margin-left: 2rem; margin-top: 1rem;" class="card-img-top" src="<?php echo $img['ruta_tarjeta'] ?>" alt="Card image cap">  
						    <div class="card-body border-dark">   
							  <p class="card-text text-justify"><?php echo $img['descripcion_tarjeta']; ?></p>    
							   <button type="button" data-target="info" class="btn btn-success">Más información</button>    
							</div> 
					    </div>							
					</div>			
					<?php } ?>
					 <br>
			    </div>
			</div>
			    <br>
			</div>
			<br>

<?php include 'include/footer.php' ?>

			

