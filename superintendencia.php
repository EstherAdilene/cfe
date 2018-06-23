<?php 
include 'include/header.php'; //ubicacion del header
?>


  <body>
    <div class="container">
      <div class="jumbotron mt-3">
        <h1 id="titulo">Mensaje</h1>
        <p class="text-justify" id="mensaje">Para mi es un gusto poder saludarles desde este portal que entre otras cosas tiene como finalidad mantenernos informados de las actividades que la Zona esta realizando, el grupo de trabajo con el que contamos y las nuevas herramientas que utilizamos para facilitar nuestras labores. Sin embargo lo más importante es contar con un vínculo que facilite nuestro que hacer diario y nos mantenga en contacto, mejorando así nuestros resultados con enfoque a la empresa, a los clientes internos, permitiéndonos así cumplir nuestra Misión y Visión. cualquier sugerencia agradeceré nos las hagan saber, reciban un cordial saludo.</p>


        <!--Empiezan la imagenes dentro del circulo-->
         <div class="container marketing">

        <!-- Three columns of text below the carousel -->
        <div class="row" id="superin">
          <div class="col-lg-6">
            <img class="rounded-circle" src="img/ubicacion.jpg" alt="Generic placeholder image" width="140" height="140">
            <h2>Ubicación</h2>
            <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#ubicacion" >
             Mas detalles
           </button>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-6">
            <img class="rounded-circle" src="img/filo.png" alt="Generic placeholder image" width="140" height="140">
            <h2>Filosofía</h2>
            <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#filosofia">Mas detalles</button>
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
      </div>
    </div>
  </div>
                        <!---Terminan las imagenes dentro del circulo-->

           <!--____________________________________modal de inicio de Ubicación________________________________-->

        <div class="modal  bd-example-modal-lg" id="ubicacion" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered ">
              <div class="modal-content">
                <div  class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel" ">Ubicación</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  </button>
                </div>
                  <div class="modal-body">
                    <!--<div class="card" style="<-->
                      <img src="img/cfe.jpg" style="width: 48rem; height: 29rem">
                    <div class="form-row">
                      <div class="form-group">
                      </div>
                    </div>
              </div>
             <div class="modal-footer">
                  <button type="delete" class="btn btn-dark" data-dismiss="modal">Cerrar</button>
              </div>
            </div>
          </div>
        </div>
      </div>
                    <!--________________________Modal final de ubicación________________________________________-->
      

        <!--______________modal finalizado de Filosofía_____________-->
        
        <div class="modal  bd-example-modal-lg" id="filosofia" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                 <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Filosofía de la división</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  </button>
                </div>
                <div class="modal-body form-horizontal">
                <div class="row">

                    <div class="col-md-3 col-xs-6 text-center">
                        <h5>Misión</h5>
                        <p align="justify" class="small">Prestar el servicio público de energía eléctrica con criterios de suficiencia, competitividad y sustentabilidad, comprometidos con la satisfacción de los clientes, con el desarrollo del país y con la preservación del medio ambiente.</p>
                    </div>
                    <div class="col-md-3 col-xs-6 text-center">
                        <h5>Visión</h5>
                        <p align="justify" class="small">Ser una empresa de energía, de las mejores en el sector eléctrico a nivel mundial, con presencia internacional, fortaleza financiera e ingresos adicionales por servicios relacionados con su capital intelectual e infraestructura física y comercial.
                        Una empresa reconocida por su atención al cliente, competitividad, transparencia, calidad en el servicio, capacidad de su personal, vanguardia tecnológica y aplicación de criterios de desarrollo sustentable. </p>
                    </div>
                    <div class="col-md-3 col-xs-6 text-center">
                        <h5>Objetivos Estrategicos</h5>
                        <p align="left" class="small">» Garantizar el abasto del suministro eléctrico. <br>
                        » Incrementar la competitividad.<br>
                        » Dar un buen servicio al cliente.<br>
                        » Trabajar con criterios de desarrollo sustentable y responsabilidad social.<br>
                        » Participar en nuevas áreas de oportunidad.<br>
                        » Promover el liderazgo y desarrollo del personal.<br>
                        » Contar con fortaleza financiera<br></p>
                      </div>


                          <div class="col-md-3 col-xs-6 text-center">
                        <h5>Noticias</h5>
                        <p align="left" class="small">» En construcción<br></p>
         
                        <h5>Cursos</h5>
                        <p align="left" class="small">»Innovación y calidad. <br>
                        » Incrementar la competitividad.<br>
                        » Seguridad e higiene.<br>
                        » Frecuentes, Portal Sig, URS.<br>
                        » Otras Diviciones, Secretarias.<br>
                        » Seguridad social.<br></p>
                      </div>
                  </div>
                </div>
             <div class="modal-footer">
                  <button type="delete" class="btn btn-dark" data-dismiss="modal">Cerrar</button>
              </div>
              </form>
              </div>
            </div>
          </div>
        <!--______________Terminando modal de filosofia______________-->
      </div>
       </div>
     </div>
   </div>
    </body>
      <?php
  include 'include/footer.php';
  ?>
   



