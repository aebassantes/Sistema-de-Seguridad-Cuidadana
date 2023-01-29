<?php
//Activamos el almacenamiento en el buffer
ob_start();
session_start();

if (!isset($_SESSION["nombre"])) {
  header("Location: login.html");
} else {
  require 'header.php';

  if ($_SESSION['escritorio'] == 1) {



?>
    <!--Contenido-->
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="box">
              <div class="box-header with-border">
                <h1 class="box-title">Escritorio </h1>
                <h2>Sistema de Seguridad Ciudadana</h2>
                
              </div>
              <br>
              

              <!--Fin centro -->
            </div><!-- /.box -->
          </div><!-- /.col -->
        </div><!-- /.row -->

        <div class="d-flex mb-4">
                <div class="card bg-white">
                <div class="col-lg-4">
                <button class="btn btn-primary">Reporte</button>
                <p>El botón reporte lo va a llevar a un formato de reportes que tendrá que llenar,
            para luego poder imprimir</p>
              </div>
                </div>
              
              <div class="col-lg-4">
                <button class="btn btn-primary"><a  class="text-black" href="articulo.php">Denuncias</a>    </button>
                <p>El botón denuncia lo va a llevar a un formato de denucias que tendrá que llenar,
            para luego poder imprimir</p>
              </div>


               <div class="col-lg-4">
                <button class="btn btn-primary">Alertar</button>
                <p>El botón alertar lo va a llevar a emitir un alerta a las autoridades.</p>
              </div>
              </div>
            
      </section><!-- /.content -->

    </div><!-- /.content-wrapper -->
    <!--Fin-Contenido-->
  <?php
  } else {
    require 'noacceso.php';
  }

  require 'footer.php';
  ?>
  <script type="text/javascript" src="scripts/categoria.js"></script>
  <script src="../public/js/chart.min.js"></script>
  <script src="../public/js/Chart.bundle.min.js"></script>


<?php
}
ob_end_flush();
?>