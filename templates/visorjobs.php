
<?php

$data = array("get" => array("type"=>"jobs"));  
$data_string = json_encode($data);  
$ch = curl_init("http://200.126.7.204:51000/");

curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST"); 
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(  
    'AFANASY: 23',                                                                        
    'Content-Type: application/json')                                                                      
);                                                                  
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                                                        
$result = curl_exec($ch);
curl_close($ch);

//echo "<pre>".$result."</pre>";
$result_json = json_decode($result);
//print_r($result_json);


for($i=0;$i<count($result_json->jobs);$i++){ 
	$name_job=$result_json->jobs[$i]->name;
	$state_job=$result_json->jobs[$i]->state;
	$percentage_job=$result_json->jobs[$i]->blocks[0]->p_percentage;
    echo $name_job." ".$state_job." ".$percentage_job;
    echo "<br>";
}
?>



