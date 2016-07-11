<?php
namespace OCP\Files\Storage;
    
use OC\Files\Storage\
class Carpeta{
    
    private $url;
    private $user;
    function __construct($url,$user){
        
        $this->url=$url;
        $this->user=$user;
        
    }
    function create(){
        
    }
    
}

   
       /* $username = OC_User::getUser(); 
        $array = ["datadir" => "Nube_Multimedia"];  
        $datadir = new OC\Files\Storage\Local($array);
        $datadir->mkdir($username);*/

?>