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
use OC\Files\Filesystem as Filesystem;
use OC\Files\Storage\Local as Local;


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

    // Recibe el nombre de la escena, el path del archivo, el rango de frames y se envía al servidor de Afanasy

	public function createJob($scene,$file_path,$frame_ini,$frame_fin){
        $date = time(); 
        $directory = explode('/', $file_path, -1);
        $directory = join('/', $directory);
        $frame_inicio = (int) preg_replace('/[^0-9]/', '', $frame_ini);
        $frame_final = (int) preg_replace('/[^0-9]/', '', $frame_fin);
        
            $varpath = $this->createFolder($scene,$date);
            $data = array('user'=> $this->userId,'scene'=> $scene."_".$date, 'directory'=>$directory, 'file_path'=>$file_path,'frame_ini'=> $frame_inicio,'frame_fin'=> $frame_final, 'pathSave'=> $varpath);
            $result = shell_exec('sh /opt/cgru/setuprender.sh; python "/opt/cgru/afanasy/python/blenderjob.py" ' . escapeshellarg(json_encode($data)));
            $confirmation = true;
        
            
        return new DataResponse(['result' => $result, 'confirmation' => $confirmation]);
    }
    
    //Crea una carpeta en el repositorio de Owncloud con el nombre de la escena y la fecha actual.

    protected function createFolder($scene,$date){
        
        $array = ["datadir" => "Nube_Multimedia"];  
        $datadir = new Local($array);
        $varfolder= $this->userId . '/' . $scene . "_". $date.'/';
        $datadir->mkdir($varfolder); 
        $result= shell_exec('chmod 770 -R /var/www/owncloud/Nube_Multimedia/'. $this->userId .'/' . $scene . "_" . $date); 
        return $varfolder;
    }

}