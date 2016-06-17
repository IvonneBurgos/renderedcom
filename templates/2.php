<!DOCTYPE html>
<html lang="en">
  <head>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css"
          rel="stylesheet">
  </head>
  <body>
    <div class="container">
      <div class="header">
        <h3 class="text-muted">Render EDCOM-ESPOL</h3>
      </div>
      <hr/>
      <div>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <p>Nombre de Escena</p>
    <input type="text" size="5" name="scene" id ="echo-content">  
    <p>Archivo</p>
    <input type="text" size="5" name="file" > 
    <p>Frame Inicial</p>
    <input type="text" size="5" name="frame_ini"  >
    <p>Frame Final</p>
    <input type="text" size="5" name="frame_fin"> 
    <p><button id="echo">Send ajax request</button></p>
    </form>
   <div id="echo-result"> </div>
          
    <?php
        $username = OC_User::getUser(); 
        $array = ["datadir" => "Nube_Multimedia"];  
        $datadir = new OC\Files\Storage\Local($array);
        $datadir->mkdir($username);
       // echo $scene;
        /*echo $datadir->getSourcePath();
        echo ' su estado es: '. $datadir->isUpdatable('admin');	
        $varfolder= $username . '/' . $scene. '/';
        $datadir->mkdir($varfolder);
        //chown($username, '/var/www/owncloud/Nube_Multimedia/admin');
        
        $data= array('usuario'=>$username,'escena'=> $scene,'frame_ini'=> 1,'frame_fin'=> 10);
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
          
       
      </div>
    </div>
  </body>
</html>
