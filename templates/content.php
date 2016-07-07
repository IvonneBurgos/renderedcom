
<!--<p>Hola <?php //p($_['user']) ?></p>-->


    
<form>
    <div class="row">
        <div class="col-md-2">
            <label class="formElements" >Nombre de Escena: </label>
        </div>
        <div class="col-md-10" >
            <input id="scene" name="scene" class="formElements" type="text" placeholder="mi_render">
        </div>
        
    </div>
    <div class="row">
        <div class="col-md-2">
            <label>Archivo: </label>
        </div>
        <div class="col-md-10">
             <input class="formElements" type="file" value="buscar">
        </div>
       
    </div>
    <div class="row">
        <div class="col-md-2">
                 <label>Frames desde: </label>
        </div>
        <div class="col-md-4" >
             <input id="frame_ini" name="frame_ini" class="formElements" type="text" placeholder="0">
        </div>
        <div class="col-md-2">
                <label>hasta: </label>
        </div>
        <div class="col-md-4">
             <input id="frame_fin" name="frame_fin" class="formElements" type="text" placeholder="99" >
        </div>
    </div>
    
</form>
<div class="row">
        <div class="col-md-6">
            <button id="echo" type="submit" class="btn btn-default">Renderizar</button>
            <button type="submit" class="btn btn-default">Cancelar</button>
        </div>
</div>
<div id="echo-result"></div>
  <!--<div class="form-group form-inline">
    <label for="exampleInputText1" class="col-xs-4 col-sm-2 col-md-2">Nombre de Escena</label>
    <input type="text" class="form-control col-xs-8 col-sm-6 col-md-6" id="exampleInputText1" placeholder="ex: mi primer render">
  </div>
  <div class="form-group form-inline">
    <label for="exampleInputText2" class="col-xs-3 col-sm-1 col-md-1">Frames desde:</label>
    <input  type="text" class="form-control col-xs-6 col-sm-3 col-md-3" id="exampleInputText2" placeholder="frame inicio">
    <label for="exampleInputText3" class="col-xs-3 col-sm-1 col-md-1">hasta:</label>  
    <input type="text" class="form-control col-xs-6 col-sm-3 col-md-3" id="exampleInputText3" placeholder="frame final">
  </div>-->
  <!--<div class="form-group form-inline">
    <label for="exampleInputFile">Archivo</label>
    <input type="file" id="exampleInputFile">
  </div>
  <button type="submit" class="btn btn-default">Renderizar!</button>-->


<!--<p>Nombre de Escena:<input id="scene" name="scene"></p>
<p>Archivo: </p><input><a href="#">Buscar</a>
<p>Frame Inicial <input id="frame_ini" name="frame_ini"></p> 
<p>Frame Final <input id="frame_fin" name="frame_fin"></p> 
<p><button id="echo">Renderizar!</button></p>-->



<!--Respuesta Ajax: <div id="echo-result"></div>-->
          
    <?php
        /*$username = OC_User::getUser(); 
        $scene=$_POST['scene'];
        $frame_ini=$_POST['frame_ini'];
        $frame_fin=$_POST['frame_fin'];
    
        echo $scene;
    
       /* $array = ["datadir" => "Nube_Multimedia"];  
        $datadir = new OC\Files\Storage\Local($array);
        $datadir->mkdir($username);
        $scene= "scene";
        echo $datadir->getSourcePath();
        echo ' su estado es: '. $datadir->isUpdatable('admin');	
        $varfolder= $username . '/' . $scene. '/';
        $datadir->mkdir($varfolder);*/
    ?>
    
    <?php
        //chown($username, '/var/www/owncloud/Nube_Multimedia/admin');
        
       /* $data= array('usuario'=>$username,'escena'=> $scene,'frame_ini'=> 1,'frame_fin'=> 10);
        $result= shell_exec('sh /opt/cgru/setup3.sh; python "/opt/cgru/afanasy/python/job.py" ' . escapeshellarg(json_encode($data)));
        echo $result;
        // Decode the result
        $resultData = json_decode($result, true);
        // This will contain: array('status' => 'Yes!')
        var_dump($resultData);
    
        
        //$datadir=OC\Files\Filesystem::getLocalFolder('Nube Multimedia');
        //$var2=OC\Files\Storage\Local::mkdir('var/www/owncloud/Nube Multimedia/new');
          

        //OC\Files\Storage\Local::$datadir;

        // $path=OC\Files\Storage\Local

        //$var3=OC\Files\Storage\Local::mkdir('newFolder');

        //echo $var2;

        //$var2=OC\Files\Filesystem::mkdir($username);
        //$arguments  = array("datadir" => $var);
        //$var2=OC\Files\Storage\Local::__construct($arguments);
        // $var2=OC\Files\Storage\Local::mkdir('shared/Jobs/new');
        //$var2=OC\Files\Storage\Local::getSourcePath($var);
        //$var2=OCP\Files\Folder::nodeExists('Documents');
        //$var2=OC\Files\Storage\Local::is_dir($var);
        //$var3=OC\Files\Filesystem::getId();
        //echo $var2;
        //echo $var3;
        //OC\Files\Filesystem::mkdir($var);
        // $data= array('usuario'=>$username,'escena'=>'A whole new level','frame_ini'=> 1,'frame_fin'=> 10);
        // $result= shell_exec('sh /opt/cgru/setup3.sh; python "/opt/cgru/afanasy/python/job.py" ' . escapeshellarg(json_encode($data)));
        // echo $result;
        // Decode the result
        // $resultData = json_decode($result, true);
        // This will contain: array('status' => 'Yes!')
        //  var_dump($resultData);
        //Para crear una nueva carpeta
        //OC\Files\Filesystem::mkdir('newFolder');
        //echo $var . 'new3' ;
        //------------------------------------------------------------------------------------------------//
        //Cosas que no valen pero las dejo por si algun dias me sirven
        /* $structure = "./" . $var;
        echo $structure ;*/
        /*if (!mkdir("var/www/shared/Jobs/User1", 0777, true)) {
        die('Failed to create folders...');
        }*/
        //$path=OC\Files\Filesystem::getInternalPath('nueva1');
        //$intento=OC\Files\Filesystem::getMountPoint('coolForTheSummer');
        //echo 'PATH= '. $path . 'OK';
        //echo $intento;

        // getStorage() : \OCP\Files\Storage;
        //https://doc.owncloud.org/api/classes/OCP.Files.FileInfo.html#method_getStorage
        //https://doc.owncloud.org/api/classes/OCP.Files.Storage.html#method_mkdir
        // echo getPath($newFolder) ;

        /* OC\Files\Filesystem::mkdir( 'so' );
        $username = OC_User::getUser(); 
        $data= array('escena'=>'New Job','frame_ini'=> 1,'frame_fin'=> 10);
        $result= shell_exec('sh /opt/cgru/setup3.sh; python "/opt/cgru/afanasy/python/job.py" ' . escapeshellarg(json_encode($data)));
        echo $result;
        // Decode the result
        $resultData = json_decode($result, true);
        // This will contain: array('status' => 'Yes!')
        var_dump($resultData);
        /* $file = str_replace(array('/', '\\'), '',  $_GET['so']);
        fopen("/data/" . $username . "/" . $file . ".txt");*/
        // echo $username;
        /*$file = str_replace(array('/', '\\'), '',  $_GET['file']);
        fopen("/data/" . $username . "/" . $file . ".txt");*/
        //echo getStorage() : \OCP\Files\Filesystem;
        //https://doc.owncloud.org/api/classes/OCP.Files.FileInfo.html#method_getStorage
        // echo getPath( OC\Files\Filesystem\So_new2) ;
         
        /*$scene= $file=$frame_ini=$frame_fin="";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $scene = test_input($_POST["scene"]);
          $file = test_input($_POST["file"]);
          $frame_ini = test_input($_POST["frame_ini"]);
          $frame_fin = test_input($_POST["frame_fin"]);
        }

        function test_input($data) {
          $data = trim($data);
          $data = stripslashes($data);
          $data = htmlspecialchars($data);
          return $data;*/
        ?>
          
    
