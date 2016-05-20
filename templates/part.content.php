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

    <form action="" method="post">
    <p>Nombre de Escena</p>
    <label id ="echo-contentt"> Hola</label> 
    <p>Ubicación</p>
    <input type="text" size="5" name="b" id ="echo-content"> 
 
    <input type="submit" value="enviar" name="enviar" />
    </form>
          
    <?php
     
        $last= shell_exec('sh /opt/cgru/setup3.sh; python /opt/cgru/afanasy/python/job.py');
        echo "Command returned $last" ;
    
    ?>
      </div>
    </div>
  </body>
</html>
