<div id="mySidenav" class="sidenav">
	<div class="sidenav-top">
		<h2 class="sidenav-title">Directorio</h2>
		<a href="#" id="closeNav" class='closebtn'>×</a>
	</div>
	<div id="filesDisplay">
		<?php
			leer_archivos_y_directorios('.');

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
								$ruta_completa = str_replace("./", "", $ruta_completa);
								// $ruta_sin_punto = preg_filter('./', '', $ruta_completa);
								// Comprobamos si la ruta más file es un directorio (es decir, que file es
								// un directorio), y si lo es, decimos que es un directorio y volvemos a
								// llamar a la función de manera recursiva.
								if (OC\Files\Filesystem::is_dir($ruta_completa))
								{
									echo '<br /><strong>Directorio:</strong> <a href="#" class="route">' . $ruta_completa . '</a>';
									leer_archivos_y_directorios($ruta_completa);
								}
								else
								{
									//Sólo archivos .blend
									$extension = end( explode('.', $file));

									if ($extension === "blend"){
										echo '<br /><a href="#" class="file" url="' . $ruta_completa .'">' . $file . '</a><br />';

									}
								}
							}
						} 
						closedir($dh);
						// Tiene que ser ruta y no ruta_completa por la recursividad
						// echo "<strong>Fin Directorio:</strong><a>" . $ruta . "</a><br /><br />";
					}
				}
				else
				{
					echo $ruta;
					echo "<br/>No es ruta válida";
				}
			}
		?>
	</div>
</div>