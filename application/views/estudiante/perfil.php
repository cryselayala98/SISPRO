<div id="page_content">
      
<div class="container-fluid">
    

    <div id="indice_pag">          
        <p>Estudiante >Perfil</p>
    </div>      
    
    <div id="cotenido_pag">          
    
    <div class="cuadro_prin_est_per">
                  
           <div id="cuadro_content_est_per">
            <div id="cuadro_uno_est_per">
                <p>Información basica</p>
            </div>
            
           <div id="division">
            <div id="cuadro_dos_est_per">
                <ul>
                    <li><span class="info_basic_est_per">Nombre: </span> <br> <?=$info -> nombre?></li>
                    <li><span class="info_basic_est_per">Codigo</span><br><?=$info -> codigo?></li>
                    <li><span class="info_basic_est_per">Email: </span><br><?=$info -> correo?></li>
                </ul>
            </div>
<div id="cuadro_tres_est_per">
   <ul>
                    <li><span class="info_basic_est_per">Semestre:</span><br><?=$semestre;?></li>
                    <li><span class="info_basic_est_per">Programa académico:</span><br><?=$programa;?></li>
                    <li><span class="info_basic_est_per">Función:</span><br>Estudiante</li>
                </ul>
</div>


            <center><button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#myModal">Editar información Básica</button> 

            <a href="<?=base_url();?>estudiante/Simulacros/verResultados"><button type="button" class="btn btn-danger btn-sm">Ver mi Desempeño</button></a>
            </center>
            <br>

            </div>
        </div>

 


    </div> 

</div>
   


</div>



   </div>
   <!-------------------------------------->
    <footer class="small text-center text-white-50">
      <div class="container">
        Copyright &copy; Ingeniería de Software
      </div>
    </footer>

    <!--Modal Editar User-->
    <div id="myModal" class="modal fade " role="dialog">
        <div class="modal-dialog modal-lg ">

      <!-- Modal content-->
  <div class="modal-content modal_per ">
   <div class="ingresar_datos_simulacro">
     <button type="button" class="close" data-dismiss="modal">&times;</button>
      <div class="modal-header">

      <div id="ingresar_datos_simulacro_titulo">
              <h3>Editar Datos Básicos</h3>
      </div>
    </div>
     <div class="modal-body">
      
   <div class="ingresar_datos_simulacro">
    <form  class="form-group" method="post"  action="<?php echo base_url(); ?>estudiante/Perfil/editar">

<label>Código </label>
<input type="text" name="codigoE" value="<?php echo $info -> codigo;?>"><br>
<label>Nombre </label>
<input type="text" name="nombreE" value="<?php echo $info -> nombre;?>"><br>
<label>Cambiar Semestre </label>
<input type="text" name="semestreE" value="<?php echo $semestre; ?>"><br>
<label>Correo </label>
<input type="text" name="correoE" value="<?php echo $info -> correo;?>"><br>
<label>Cambiar Contraseña </label>
<input type="text" name="passwordE"><br>

  
  </div>
</div>
    <div class="modal-footer" style="padding: 0px;">
      <button type="button" class="btn btn-danger" data-dismiss="modal" style="margin-right: 20px;">Cerrar</button>
      <input type="submit" class="btn btn_reg_pre" value="Guardar">

      </form>
    </div>
  </div>
            </div>
</div>
</div>
      <!--Fin de la ventana Modal-->


    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
   <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url(); ?>assets/template/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/template/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Plugin JavaScript -->
    <script src="<?php echo base_url(); ?>assets/template/vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for this template -->
    <script src="<?php echo base_url(); ?>assets/template/js/grayscale.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
  </body>

</html>


        
      
    