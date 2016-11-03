<?php

$data = array("get" => array("type"=>"jobs"));  
$data_string = json_encode($data);  
$ch = curl_init("http://192.168.100.5:51000/");


curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(  
	'AFANASY: 23',                                                                        
    'Content-Type: application/json')                                                                      
);                                                                  
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
                                                                                                                   
                                                                                                                     
$result = curl_exec($ch);
curl_close($ch);

echo "<pre>".$result."</pre>"; 
?>                                                   