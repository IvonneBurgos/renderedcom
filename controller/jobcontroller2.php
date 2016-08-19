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
        $result= shell_exec('sh /opt/cgru/setup.sh; python "/opt/cgru/afanasy/python/job6.py" ' . escapeshellarg(json_encode($data)));
        return new DataResponse($result);
    }
    
    protected function createFolder($scene){
        $dataUser = new Filesystem();
        $varfolder = $dataUser->mkdir('Documents/'. $scene);
        $result= shell_exec('chmod 777 -R /var/www/owncloud/data/'. $this->userId .'/files/Documents/' . $scene); 
        return $varfolder;
    }

    }