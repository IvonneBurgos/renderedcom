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

      <FORM>
    <p>Nombre de Escena</p>
    <label id ="echo-contentt"> Hola</label> 
    <p>Ubicación</p>
    <input type="text" size="5" name="b" id ="echo-content"> 
 
    <button id="echo">Enviar</button>
    </FORM>
        <?php
// This is the data you want to pass to Python
$data = array(
    'escena'      => 'escena',
    'ubicacion'   => 0,
    'value'       => 1,
    'description' => 'Boa',
    'itemID'      => '03e76d0a-8bab-11e0-8250-000c29b481aa');

// Execute the python script with the JSON data
$trabajo = shell_exec('cd /opt/cgru; sh /opt/cgru/setup.sh; cd /opt/cgru/Request; python ./job.py');
          
var_dump($trabajo);

$result = shell_exec('python /opt/cgru/Requests/test.py ' . escapeshellarg(json_encode($data)));

// Decode the result
$resultData = json_decode($result, true);

// This will contain: array('status' => 'Yes!')
//var_dump($resultData);

    ?>
      </div>
    </div>
  </body>
</html>
