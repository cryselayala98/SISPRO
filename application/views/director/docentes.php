<div id="page_content">

        <div class="container-fluid">
            <div id="indice_pag">
                <p>Director > <a href="<?=base_url();?>director/usuarios/Docentes">Docentes</a></p>
            </div>
            <div id="cotenido_pag">
                <?php  
//verificar si hay nuevos docentes que deben ser aprobados por el director de plan de estudios
if ($docentes_a) {?>

                  <div id="indice_pag">
                    <center><p>Aprobacion de nuevos Docentes</p></center>
                </div>
                                        <div class="table_">
                                       <table class="table table-hover">
                          <thead>
                            <tr id="tit_table">
                              <th scope="col">Id</th>
                              <th scope="col">Código</th>
                              <th scope="col">Nombre</th>
                              <th scope="col">Opciones</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php if($docentes_a): foreach ($docentes_a as $docente): ?>

                              <tr>
                              <th scope="row"><?php echo $docente->id; ?></th>
                              <td><?php echo $docente->codigo; ?></td>
                              <td><?php echo $docente->nombre; ?></td>
                              <td><center>
                                    <a href="<?php echo base_url(); ?>director/usuarios/Docentes/aprobar/<?php echo $docente->id; ?>"><button type="button" class="btn btn-danger btn-sm">Aprobar</button></a>
                              </center></td>
                            </tr>

                            <?php endforeach; endif;?>
                          </tbody>
                        </table>
                        </div>
                <?php }?>
              <div id="indice_pag">
                <center><p>Tabla de docentes</p></center>
              </div>
              <div class="table_">
                                       <table class="table table-hover">
                          <thead>
                            <tr id="tit_table">
                              <th scope="col">Id</th>
                              <th scope="col">Código</th>
                              <th scope="col">Nombre</th>
                              <th scope="col">Opciones</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php $i =0; ?>
                            <?php if($docentes_a2): foreach ($docentes_a2 as $docente): ?>

                              <tr>
                              <th scope="row"><?php echo $docente->id; ?></th>
                              <td><?php echo $docente->codigo; ?></td>
                              <td><?php echo $docente->nombre; ?></td>
                              <td><center>
                                   <button type="button" data-target="#myModal<?=$docente->id;?>" data-toggle="modal" class="btn btn-danger btn-sm"><span class="fa fa-search"></span>
          </button>
                              </center></td>
                            </tr>
 
<!--Modal detalle del docente-->
<div id="myModal<?=$docente->id;?>" class="modal fade " role="dialog">
        <div class="modal-dialog modal-lg ">

      <!-- Modal content-->
  <div class="modal-content modal_per ">
   
   <div class="reg_sim">
     <button type="button" class="close" data-dismiss="modal">&times;</button>
      <div class="modal-header">

      <div id="reg_sim_titu_modal">
              <h3>Detalle del Docente</h3>
      </div>
    </div>
     <div class="modal-body">
     <div id="reg_sim_content">
          <p><b>nombre: </b><?=$docente->nombre;?> </p>
         <?php if ($areas_docentes[$i]) {?>
            <p><b>Areas de conocimiento: </b>
             <?php 
                $es = false;
                foreach ($areas_docentes[$i] as $a) {
                      if($es)echo ", ";
                      $es=true;
                      echo $a-> nombre;
                }

             ?>
          </p>
        <?php }else echo "Sin Areas de Conocimiento Registradas." ?>
          


    </div>
    </div>
    <div class="modal-footer">

      <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
    </div>
  </div>
            </div>
</div>
</div>
<?php $i++; ?>
                            <?php endforeach; endif;?>
                          </tbody>
                        </table>
                        </div>
                        <div id="indice_pag">
                        <center><p>Opciones Director de Programa</p></center>
                      </div>

                        <div class="cuadro_prin_dir_doc">
                        <div id="cuadro_content_dir_doc">
                            <div id="cuadro_uno_dir_doc">
                                <div id="indice_pag">
                                    <center><p>Asignar Nuevo director de <?php echo $programa; ?> <span class="far fa-question-circle" title="Al asignar un nuevo director de plan de estudios, se cerrará la sesión y obtendrás privilegios como docente del programa"> </span></p></center>
                                </div>
                                </div>
                                <div id="cuadro_dos_dir_doc">
                                <form id="nuevoDirector" action="<?php echo base_url(); ?>Director/usuarios/Docentes/AsignarNuevoDirector" method="post">
                                    <center><p></p></center>
                                    <?php
                                            if ($this->session->flashdata("error")){?>
                                                <center>
                                                    <p>
                                                        <?php echo ($this->session->flashdata("error")); ?>
                                                    </p>
                                                </center>
                                            <?php  }

                                    ?>
                                    <input type="text" class="form-control" style="border-radius: 3px;" placeholder="Codigo del docente" name="codigoD">
                                    <button type="submit" class="btn btn-danger btn-block btn-flat" style="border-radius: 3px;">Asignar nuevo director</button>
                                </form>
                                </div>
                        </div>
                     </div>


            </div>
        </div>
</div>

<footer class="small text-center text-white-50">
      <div class="container">
        Copyright &copy; Ingeniería de Software
      </div>
    </footer>

  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
   <script type="text/javascript">

     $('table').dataTable({
                "dom": '<"top">rt<"bottom"p><"clear">',
                responsive: true
            });

$(document).ready( function() {

     toastr.options = {
  "closeButton": false,
  "debug": false,
  "newestOnTop": false,
  "progressBar": false,
  "positionClass": "toast-top-full-width",
  "preventDuplicates": false,
  "onclick": null,
  "showDuration": "300",
  "hideDuration": "1000",
  "timeOut": "5000",
  "extendedTimeOut": "1000",
  "showEasing": "swing",
  "hideEasing": "linear",
  "showMethod": "fadeIn",
  "hideMethod": "fadeOut"
}

});


   </script>
   <script src="<?php echo base_url(); ?>assets/template/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/template/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/template/vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/template/js/grayscale.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

  </body>

</html>