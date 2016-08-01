<div id="mySidenav" class="sidenav">
  <a href="#" id="closeNav" class='closebtn'>×</a>
    <div id="filesDisplay">
        <?php
        
        $dataSend = array();
        // Abrimos un directorio conocido, y procedemos a leer el contenido
        if (OC\Files\Filesystem::is_dir('Documents')){
            if ($dh = OC\Files\Filesystem::opendir('Documents')){
                while (($file = readdir($dh)) !== false) {
                    $archivo = $file; 
                    $trozos = explode(".", $archivo); 
                    $extension = end($trozos); 
                    if ($extension == 'blend'){
                         // mostramos la extensión del archivo y de acuerdo a la extension
                    array_push($dataSend, "<a> Nombre de Archivo: " . $archivo . "</a>") ;
                    }
                }
            closedir($dh);
            }
        }
         ?>
        <?php
            $resultado = count($dataSend);
            for ($i = 0; $i < $resultado; $i++){
                echo $dataSend[$i];
            }
        ?>
    </div>
</div>

<div id="progress">
    Nothing here... yet
</div>