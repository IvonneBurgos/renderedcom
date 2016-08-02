<div id="mySidenav" class="sidenav">
  <a href="#" id="closeNav" class='closebtn'>×</a>
    <div id="filesDisplay">
        <?php
        /*$dataSend = array();
        // Abrimos un directorio conocido, y procedemos a leer el contenido
        if (OC\Files\Filesystem::is_dir('Documents')){
            if ($dh = OC\Files\Filesystem::opendir('Documents')){
                while (($file = readdir($dh)) !== false) {
                    $archivo = $file; 
                    $trozos = explode(".", $archivo); 
                    $extension = end($trozos); 
                    if ($extension == 'blend'){
                         // mostramos la extensión del archivo y de acuerdo a la extension
                    array_push($dataSend, "<a>" . $archivo . "</a>") ;
                    }
                }
            closedir($dh);
            }
        }*/
         ?>
        <?php
           /* $resultado = count($dataSend);
            for ($i = 0; $i < $resultado; $i++){
                echo $dataSend[$i];
            }*/
        ?>
            <?php
        
        leer_archivos_y_directorios('Documents');
     
    function leer_archivos_y_directorios($ruta)
    {
        // comprobamos si lo que nos pasan es un direcotrio
        if (OC\Files\Filesystem::is_dir($ruta))
        {
            // Abrimos el directorio y comprobamos que
            if ($dh = OC\Files\Filesystem::opendir($ruta))
            {
                while (($file = readdir($dh)) !== false)
                {
                    // Si quisieramos mostrar todo el contenido del directorio pondríamos lo siguiente:
                    // echo '<br />' . $file . '<br />';
                    // Pero como lo que queremos es mostrar todos los archivos excepto "." y ".."
                    if ($file!="." && $file!="..")
                    {
                        $ruta_completa = $ruta . '/' . $file;
     
                        // Comprobamos si la ruta más file es un directorio (es decir, que file es
                        // un directorio), y si lo es, decimos que es un directorio y volvemos a
                        // llamar a la función de manera recursiva.
                        if (OC\Files\Filesystem::is_dir($ruta_completa))
                        {
                            echo "<br /><strong>Directorio:</strong> <a>" . $ruta_completa . "</a>";
                            leer_archivos_y_directorios($ruta_completa . "/");
                        }
                        else
                        {
                            echo '<br /><a>' . $file . '</a><br />';
                        }
                    }
                } 
                closedir($dh);
                // Tiene que ser ruta y no ruta_completa por la recursividad
                echo "<strong>Fin Directorio:</strong><a>" . $ruta . "</a><br /><br />";
            }
        }
        else
        {
            echo $ruta;
            echo "<br/>No es ruta valida";
        }
    }
     ?>   
        
    </div>
</div>

<div id="progress">
    Nothing here... yet
</div>