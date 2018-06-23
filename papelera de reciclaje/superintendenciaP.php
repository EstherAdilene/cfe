<?php include'include/headerP.php'; ?>
<?php #require_once('../candado.php'); ?>


<body>
    <div class="container">
      <div class="jumbotron mt-3">
        <form>
           <h1 style="text-align: center;">Mensaje</h1>
          <div class="form-group">
    <label for="exampleFormControlTextarea1">Mensaje de Superintendencia</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
  </div>


        <div class="custom-file">
          <input type="file" class="custom-file-input" id="customFileLang" lang="es">
          <label class="custom-file-label" for="customFileLang">Seleccionar Archivo</label>
        </div>
        <br>
        <br>
        <div class="custom-file">
          <input type="file" class="custom-file-input" id="customFileLang" lang="es">
          <label class="custom-file-label" for="customFileLang">Seleccionar Archivo</label>
        </div> 
        <br>
        <br>
        <button style="margin-left: 440px" type="button" class="btn btn-primary">Guardar</button>
        <button style="text-align: center;" type="button" class="btn btn-secondary">Cancelar</button>       
        </form>
      </div>
    </div>
  </body>




    <?php include 'include/footerP.php' ?>

