<?php
namespace OCP\Files\Storage;
    
use OC\Files\Storage\Local;
public class Carpeta{
    
    private $url;
    private $user;
    function __construct(){
        
        $this->url=$url;
        $this->user=$user;
        
    }
    function create(){
        $array = ["datadir" => "Nube_Multimedia"];  
        $datadir = new OC\Files\Storage\Local($array);
    }
    
}

   
       /* $username = OC_User::getUser(); 
        $array = ["datadir" => "Nube_Multimedia"];  
        $datadir = new OC\Files\Storage\Local($array);
        $datadir->mkdir($username);*/

?>