
<!--<p>Hola <?php //p($_['user']) ?></p>-->

<div id="form">
    <div class="row">
        <div class="col-md-2">
            <label class='labelPosition'>Nombre de Escena: </label>
        </div>
        <div class="col-md-10">
            <input id="scene" name="scene" class="formElements" type="text" placeholder="mi_render">
        </div>
        </div>
    <div class="row">
        <div class="col-md-2">
            <label class='labelPosition'>Archivo: </label>
        </div>
       <div class="col-md-8" >
            <input id="file_path" name="file_path" class="formElements" type="text" placeholder="mi_archivo.xy">
        </div>
        <div class="col-md-2" >
           <button id="buscar" class="btn btn-primary formElements">Buscar</button>
        </div>
        
    </div>
    <div class="row">
        <div  class="col-md-2">
            <label class='labelPosition'>Frames desde: </label>
        </div>
        <div id="div_ini" class="col-md-4" >
            <input id="frame_ini" name="frame_ini" class="formElements" type="text" placeholder="0">
        </div>
        <div class="col-md-2">
            <label class='labelPosition' id='label_frame_fin'>hasta: </label>
        </div>
        <div class="col-md-4">
            <input id="frame_fin" name="frame_fin" class="formElements" type="text" placeholder="99" >
        </div>
    </div>
    <div class="row">
    <div class="col-md-2"></div>
        
    <div class="col-md-4">
        <button id="render" type="submit" class="btn btn-success">Renderizar</button>
    </div>
    <div class="col-md-2">   
        <button id="cancel" type="submit" class="btn btn-danger">Cancelar</button>
    </div>
</div>
    <div id="echo-result"></div>
</div>
