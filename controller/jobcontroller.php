<?php
/**
 * ownCloud - renderedcom
 *
 * This file is licensed under the Affero General Public License version 3 or
 * later. See the COPYING file.
 *
 * @author IvonneBurgos <irburgos@espol.edu.ec>
 * @copyright IvonneBurgos 2016
 */

namespace OCA\RenderEdcom\Controller;

use OCP\IRequest;
use OCP\AppFramework\Http\TemplateResponse;
use OCP\AppFramework\Http\DataResponse;
use OCP\AppFramework\Controller;
use OC\Files\Storage\Local as Local;
use OC\Files\Filesystem as Filesystem;
use OC\Files\View as View;


class JobController extends Controller{
    
	private $userId;
  
	public function __construct($AppName, IRequest $request, $UserId){
		parent::__construct($AppName, $request);
		$this->userId = $UserId;
	}

	/**
	 * CAUTION: the @Stuff turns off security checks; for this page no admin is
	 *          required and no CSRF check. If you don't know what CSRF is, read
	 *          it up in the docs or you might create a security hole. This is
	 *          basically the only required method to add this exemption, don't
	 *          add it to any other method if you don't exactly know what it does
	 *
	 * @NoAdminRequired
	 * @NoCSRFRequired
	 */
	public function createJob($scene,$frame_ini,$frame_fin){
        
        $frame_inicio = (int) preg_replace('/[^0-9]/', '', $frame_ini);
        $frame_final = (int) preg_replace('/[^0-9]/', '', $frame_fin);
        $varpath = $this->createFolder($scene);
        $data= array('user'=>$this->userId,'scene'=> $scene,'frame_ini'=> $frame_inicio,'frame_fin'=> $frame_final, 'pathSave'=>$varpath);
        $result= shell_exec('sh /opt/cgru/setup3.sh; python "/opt/cgru/afanasy/python/job.py" ' . escapeshellarg(json_encode($data)));
        //return new DataResponse('OK :)');*/
        return new DataResponse($result);
    }
    
    public function createFolder($scene){
        
        $array = ["datadir" => "Nube_Multimedia"];  
        $datadir = new Local($array);
        $varfolder= $this->userId . '/' . $scene . '/';
        $datadir->mkdir($varfolder); 
        $result= shell_exec('chmod 777 -R /var/www/owncloud/Nube_Multimedia/' . $this->userId); 
        return $varfolder;
    }
    
 public function openDir(){
        
        $dataUser= new Filesystem();
        $owner = $dataUser->getOwner('Documents');
        $dataSend = array();
        // Abrimos un directorio conocido, y procedemos a leer el contenido
        if ($dataUser->is_dir('Documents')) {
            if ($dh = $dataUser->opendir('Documents')){
                while (($file = readdir($dh)) !== false) {
                    $archivo = $file; 
                    $trozos = explode(".", $archivo); 
                    $extension = end($trozos); 
                    // mostramos la extensión del archivo 
                    array_push($dataSend, "Nombre de Archivo: " . $archivo . " y su dueño es " . $owner) ;
                }
            closedir($dh);
            }
        }
        return new DataResponse($dataSend);
    }
    }