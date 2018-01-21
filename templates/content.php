<div id="form">
   <div class="row">
      <div class="col-md-12">
         <label class='labelPosition'>Nombre de Escena</label>
      </div>
      <div class="col-md-12">
         <input id="scene" name="scene" class="formElements lower" type="text" placeholder="mi_render">
      </div>
   </div>
   <div class="row">
      <div class="col-md-12">
         <label class='labelPosition'>Archivo</label>
      </div>
      <div class="col-sm-8 col-md-8" >
         <input id="file_path" name="file_path" class="formElements" type="text" placeholder="mi_archivo.xy" readonly>
      </div>
      <div class="col-sm-1 col-md-1"></div>
      <div class="col-sm-3 col-md-3" >
         <button id="buscar" class="btn btn-primary formElements">Buscar</button>
      </div>
      <div id="progress-div" class="col-xs-12 col-sm-12 col-md-12 progress">
         <?php print_unescaped($this->inc('progreso')); ?>
      </div>
   </div>
   <div class="row">
      <div class="col-md-6">
         <div  class="col-md-12">
            <label class='labelPosition'>Frames desde</label>
         </div>
         <div id="div_ini" class="col-md-12" >
            <input id="frame_ini" name="frame_ini" class="formElements" type="text" placeholder="1">
         </div>
      </div>
      <div class="col-md-6">
         <div class="col-md-12">
            <label class='labelPosition' id='label_frame_fin'>hasta</label>
         </div>
         <div class="col-md-12">
            <input id="frame_fin" name="frame_fin" class="formElements" type="text" placeholder="99" >
         </div>
      </div>
   </div>
   <div class="row">
      <div class="col-md-12">
         <button id="render" type="submit" class="btn btn-success"><strong>Renderizar</strong></button>
      </div>
   </div>
   <div id="echo-result"></div>
</div>
