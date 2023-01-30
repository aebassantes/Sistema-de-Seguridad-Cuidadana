<?php
//Activamos el almacenamiento en el buffer
ob_start();
session_start();

if (!isset($_SESSION["nombre"])) {
    header("Location: login.html");
} else {
    require 'header.php';
    if ($_SESSION['denuncia'] == 1) {
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
                                <h1 class="box-title">Denuncias
                                    <button class="btn btn-success" id="btnagregar" onclick="mostrarform(true)"><i
                                                class="fa fa-plus-circle"></i> Agregar
                                    </button>
                                </h1>
                                <div class="box-tools pull-right">
                                </div>
                            </div>
                            <!-- /.box-header -->
                            <!-- centro -->
                            <div class="panel-body table-responsive" id="listadoregistros">
                                <table id="tbllistado"
                                       class="table table-striped table-bordered table-condensed table-hover">
                                    <thead>
                                    <th>Opciones</th>
                                    <th>Nombre</th>
                                    <th>Apellido</th>
                                    <th>Cedula</th>
                                    <th>Ciudad</th>
                                    <th>Direccion</th>
                                    <th>Motivo</th>
                                    <th>Estado de Reporte</th>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                    <tfoot>
                                    <th>Opciones</th>
                                    <th>Nombre</th>
                                    <th>Apellido</th>
                                    <th>Cedula</th>
                                    <th>Ciudad</th>
                                    <th>Direccion</th>
                                    <th>Motivo</th>
                                    <th>Estado de Reporte</th>
                                    </tfoot>
                                </table>
                            </div>
                            <div class="panel-body" id="formularioregistros">
                                <form name="formulario" id="formulario" method="POST">
                                    <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <label>Nombre(*):</label>
                                        <input type="hidden" name="idarticulo" id="idarticulo">
                                        <input type="text" class="form-control" name="nombre" id="nombre"
                                               maxlength="100" placeholder="Nombre" required>
                                    </div>
                                    <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <label>Apellido(*):</label>
                                        <input type="text" class="form-control" name="apellido" id="apellido"
                                               placeholder="Apellido" required>
                                    </div>
                                    <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <label>Cedula:</label>
                                        <input type="text" class="form-control" name="cedula" id="cedula"
                                               placeholder="Cédula" required>
                                    </div>
                                    <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <label>Ciudad:</label>
                                        <input type="text" class="form-control" name="ciudad" id="ciudad"
                                               placeholder="Ciudad">
                                    </div>
                                    <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <label>Direccion:</label>
                                        <input type="text" class="form-control" name="direccion" id="direccion"
                                               placeholder="Dirección">
                                    </div>
                                    <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <label>Motivo:</label>
                                        <input type="text" class="form-control" name="motivo" id="motivo"
                                               placeholder="Motivo">
                                    </div>
                                    <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <label>Explicacion:</label>
                                        <textarea class="form-control" name="explicacion" id="explicacion"
                                                  placeholder="Explicación"></textarea>
                                    </div>
                                    <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <label>Informacion:</label>
                                        <textarea type="text" class="form-control" name="informacion" id="informacion"
                                                  placeholder="Información"></textarea>
                                    </div>
                                    <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <button class="btn btn-primary" type="submit" id="btnGuardar"><i
                                                    class="fa fa-save"></i> Guardar
                                        </button>

                                        <button class="btn btn-danger" onclick="cancelarform()" type="button"><i
                                                    class="fa fa-arrow-circle-left"></i> Cancelar
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <!--Fin centro -->
                        </div><!-- /.box -->
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </section><!-- /.content -->

        </div><!-- /.content-wrapper -->
        <!--Fin-Contenido-->
        <?php
    } else {
        require 'noacceso.php';
    }
    require 'footer.php';
    ?>
    <script type="text/javascript" src="../public/js/JsBarcode.all.min.js"></script>
    <script type="text/javascript" src="../public/js/jquery.PrintArea.js"></script>
    <script type="text/javascript" src="scripts/reporte.js"></script>
    <?php
}
ob_end_flush();
?>