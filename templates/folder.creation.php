<?php
        $username = OC_User::getUser(); 
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
    