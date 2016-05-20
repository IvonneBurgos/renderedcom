<?php      
         $last= shell_exec('sh /opt/cgru/setup3.sh; python /opt/cgru/afanasy/python/job.py');
    echo "Command returned $last" ;
//shell_exec($command);
//$c1 = 'echo ${CGRU_LOCATION}';
//echo "***".shell_exec("putenv('CGRU_LOCATION=/opt/cgru'); 
//echo ${CGRU_LOCATION}")."++";          
          
  //$new = shell_exec ("CGRU_LOCATION=/opt/cgru; export //CGRU_LOCATION; echo hola $CGRU_LOCATION  "); 

           
//This is the data you want to pass to Python
/*$data = array(
   'escena'      => 'escena',
    'ubicacion'   => 0,
    'value'       => 1,
    'description' => 'Boa',
    'itemID'      => '03e76d0a-8bab-11e0-8250-000c29b481aa');
*/
// Execute the python script with the JSON data
/*$trabajo = shell_exec('cd /opt/cgru; source /opt/cgru/setup.sh; cd /opt/cgru/afanasy/python; python /job.py');
          
var_dump($trabajo);

$result = shell_exec('python /opt/cgru/Requests/test.py ' . escapeshellarg(json_encode($data)));*/

// Decode the resul$resultData = json_decode($result, true);

// This will contain: array('status' => 'Yes!')
//var_dump($resultData);
    
    ?>