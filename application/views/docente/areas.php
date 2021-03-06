<div id="page_content">

        <div class="container-fluid">
            
            <div id="indice_pag">
                <p>Docente > <a href="<?=base_url();?>docente/Areas">Areas</a></p>
            </div>
            
            <div id="cotenido_pag">

                    <?php
                        if ($this->session->flashdata("error")) {
                              echo $this->session->flashdata("error");
                        } else if ($this->session->flashdata("bien")) {
                              echo $this->session->flashdata("bien");
                        }
                    ?>

<?php if (!$todas_las_areas) {
    echo "no hay areas de conocimiento registradas";
    } else {
    ?>
                <div id="indice_pag">
                    <center><p>Areas de Conocimiento</p></center>
                </div>  

                            <div class="table_">
                           <table class="table table-hover">
              <thead>
                <tr id="tit_table">
                  <th scope="col">Id</th>
                  <th scope="col">Nombre</th>
                  <th scope="col">No. Preguntas</th>
                </tr>
              </thead>
              <tbody>
                            <?php $i=-1;
                            foreach ($todas_las_areas as $area): 
                                  $i++;
                                ?>
                                <tr>
                                  <th scope="row"><?php echo $area->id; ?></th>
                                  <td><?php echo $area->nombre; ?></td>
                                  <td><center><?php echo $n_preguntas[$i]; ?></center></td>
                                </tr>
                            <?php endforeach; ?> 
              </tbody>
            </table>
            </div>
                                <?php } ?>

            <div id="indice_pag">
                    <center><p>Opciones del Usuario - Relacionarse a un Area</p></center>
                </div>

  <div class="cuadro_prin_doc_pre_ami">

           <div id="cuadro_content_doc_pre_ami">
            
              
                        <form method="post" action="<?php echo base_url(); ?>docente/Areas/registrarArea?>">
                           <select id="inputState" class="form-control" name="areaR" >
                                <?php foreach ($todas_las_areas as $area): ?>
                                     <?php $validacion = false;?>
                                     <?php foreach ($areas_doc as $area_doc) {
                                         if ($area_doc->nombre == $area->nombre) {
                                                //el docente ya registró esa era, no mostrarla
                                                $validacion = true;
                                                break;
                                            }
                                        }
                                    if (!$validacion) {?>
                                        <option ><?=$area->nombre?></option>
                                    <?php } ?>

                                  <?php endforeach;?>
                                        </select>
                                   

            


       
                                       
                                            <input type="submit" name="guardarA" align="center" height="5px" style="margin:0;" class="btn btn_regu" value="Registrar Area">
                                      
                                        
                                  
                                  </form>
                           
                           
                        </form>
        
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
   </script>
   <script src="<?php echo base_url(); ?>assets/template/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/template/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/template/vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/template/js/grayscale.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

  </body>

</html>

