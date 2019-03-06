<!DOCTYPE html>
<html lang="es-mx">

<head>
    <title>Recursos Pedagógicos | Luminet</title>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="public/pictures/logoTeba.jpg">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link href="public/layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
    <link href="public/layout/styles/fonts/fontawesome-4.6.3.min.css" rel="stylesheet" type="text/css" media="all">
    <link href="public/layout/styles/style.scss" rel="stylesheet" type="text/css" media="all">
</head>

<body id="top" style="backgroud:white;">
    <div class="bgded overlay" style="background-image:url('public/pictures/files.jpg');">
        <div class="wrapper row1">
            <header id="header" class="hoc clear">
                <br>
                <center><a href="./"><img id="logo" class="fl_right" src="public/pictures/logoTeba.jpg"></a></center>
                <nav id="mainav" class="fl_right">
                    <ul class="clear">
                    </ul>
                </nav>
            </header>
        </div>
    </div>


    <div class="wrapper row3" style="padding-bottom:21.5em;">
        <br><br><br>
        <center>
            <h1 style="color:#C5A059" font-family="NeoSansPro"><b>Recursos Pedagógicos</b></h1>
        </center>

        <div class="container">

            <!-------------------------------------------------------------------------------------PROGRAMAS EDUCATIVOS-->
            <details>
                <summary>
                    <i class="fa fa-folder" style=""></i>
                    <div class="selector"></div><b>PROGRAMAS OFICIALES</b>
                </summary>
                <?php 
		$files = array();
		ordenarCarpetasRecur("./public/files/RecursosPedagogicos/Programas_Educativos/");
		function ordenarCarpetasRecur($ruta)
		{
			unset($files);
			// Se comprueba que realmente sea la ruta de un directorio
			if(is_dir($ruta))
			{
				// Abre un gestor de directorios para la ruta indicada
				$gestor = opendir($ruta);
				while(($archivo = readdir($gestor)) !== false)
				{
					$files[] = $archivo;
				}
				//Ordena el arreglo $files
				natsort($files);
				obtener_estructura_directoriosRecur($files,$ruta);
				//Cierra el gestor de archivos
				closedir($gestor);
				echo "</details>";
			}
			else
			{
				echo "No es una ruta de directorio valida<br/>";
			}
		}
                   function obtener_estructura_directoriosRecur($archivos, $ruta){
                            echo "<details><summary><i class='fa fa-folder';></i></summary>";
                            // Recorre todos los elementos del directorio
                           foreach($archivos as $archivo){
                               $ruta_completa = $ruta . "/" . str_replace(" ", "%20",$archivo);          
                               // Se muestran todos los archivos y carpetas excepto "." y ".."
                               if ($archivo != "." && $archivo != "..") {
                                 // Si es un directorio se recorre recursivamente
                                 if (is_dir($ruta_completa)) {
                                     echo "<details><summary style='cursor:initial;'>
                                     <div class='selector'></div>"
                                    .str_replace("_", " ",$archivo)."</summary></details>";
                                     ordenarCarpetasRecur($ruta_completa);
                                 } else {
                                     echo "<details><summary style='cursor:initial;'>
                                     <i class='fa fa-file-text';></i>
                                     <div class='selector'></div>
                                    <a target='_blank' href=".$ruta_completa.">".ucwords(strtolower(str_replace("_", " ",$archivo)))."</a>
                                     </summary></details>";                                    
                                 }                                   
                             } 
			}                               
                   }
                ?>
            </details>
            <!-------------------------------------------------------------------------------------MATERIAL COMPLEMENTARIO-->
            <details>
                <summary>
                    <i class="fa fa-folder" style=""></i>
                    <div class="selector"></div><b>MATERIAL COMPLEMENTARIO</b>
                </summary>
                <?php 
		$files = array();
		ordenarCarpetasRecur2("./public/files2/");
		function ordenarCarpetasRecur2($ruta)
		{
			unset($files);
			// Se comprueba que realmente sea la ruta de un directorio
			if(is_dir($ruta))
			{
				// Abre un gestor de directorios para la ruta indicada
				$gestor = opendir($ruta);
				while(($archivo = readdir($gestor)) !== false)
				{
					$files[] = $archivo;
				}
				//Ordena el arreglo $files
				natsort($files);
				obtener_estructura_directoriosRecur2($files,$ruta);
				//Cierra el gestor de archivos
				closedir($gestor);
				echo "</details>";
			}
			else
			{
				echo "No es una ruta de directorio valida<br/>";
			}
		}
                   function obtener_estructura_directoriosRecur2($archivos, $ruta){
                            echo "<details><summary><i class='fa fa-folder';></i></summary>";
                            // Recorre todos los elementos del directorio
                           foreach($archivos as $archivo){
                               $ruta_completa = $ruta . "/" . str_replace(" ", "%20",$archivo);          
                               // Se muestran todos los archivos y carpetas excepto "." y ".."
                               if ($archivo != "." && $archivo != "..") {
                                 // Si es un directorio se recorre recursivamente
                                 if (is_dir($ruta_completa)) {
                                     echo "<details><summary style='cursor:initial;'>
                                     <div class='selector'></div>"
                                    .str_replace("_", " ",$archivo)."</summary></details>";
                                     ordenarCarpetasRecur2($ruta_completa);
                                 } else {
                                     echo "<details><summary style='cursor:initial;'>
                                     <i class='fa fa-file-text';></i>
                                     <div class='selector'></div>
                                    <a target='_blank' href=".$ruta_completa.">".ucwords(strtolower(str_replace("_", " ",$archivo)))."</a>
                                     </summary></details>";                                    
                                 }                                   
                             } 
			}                               
                   }
                ?>
            </details>

            <!-------------------------------------------------------------------------------------INGRESO A EDUCACIÓN SUPERIOR-->
            <details>
                <summary>
                    <i class="fa fa-folder" style=""></i>
                    <div class="selector"></div><b>INGRESO A EDUCACIÓN SUPERIOR</b>
                </summary>
                <?php 
		$files = array();
		ordenarCarpetasRecur3("./public/files/RecursosPedagogicos/Ingreso_a_Educación_Superior/");
		function ordenarCarpetasRecur3($ruta)
		{
			unset($files);
			// Se comprueba que realmente sea la ruta de un directorio
			if(is_dir($ruta))
			{
				// Abre un gestor de directorios para la ruta indicada
				$gestor = opendir($ruta);
				while(($archivo = readdir($gestor)) !== false)
				{
					$files[] = $archivo;
				}
				//Ordena el arreglo $files
				natsort($files);
				obtener_estructura_directoriosRecur3($files,$ruta);
				//Cierra el gestor de archivos
				closedir($gestor);
				echo "</details>";
			}
			else
			{
				echo "No es una ruta de directorio valida<br/>";
			}
		}
                   function obtener_estructura_directoriosRecur3($archivos, $ruta){
                            echo "<details><summary><i class='fa fa-folder';></i></summary>";
                            // Recorre todos los elementos del directorio
                           foreach($archivos as $archivo){
                               $ruta_completa = $ruta . "/" . str_replace(" ", "%20",$archivo);          
                               // Se muestran todos los archivos y carpetas excepto "." y ".."
                               if ($archivo != "." && $archivo != "..") {
                                 // Si es un directorio se recorre recursivamente
                                 if (is_dir($ruta_completa)) {
                                     echo "<details><summary style='cursor:initial;'>
                                     <div class='selector'></div>"
                                    .str_replace("_", " ",$archivo)."</summary></details>";
                                     ordenarCarpetasRecur3($ruta_completa);
                                 } else {
                                     echo "<details><summary style='cursor:initial;'>
                                     <i class='fa fa-file-text';></i>
                                     <div class='selector'></div>
                                    <a target='_blank' href=".$ruta_completa.">".ucwords(strtolower(str_replace("_", " ",$archivo)))."</a>
                                     </summary></details>";                                    
                                 }                                   
                             } 
			}                               
                   }
                ?>
            </details>
            <!-------------------------------------------------------------------------------------OEVSyT-->
            <details>
                <summary>
                    <i class="fa fa-folder" style=""></i>
                    <div class="selector"></div><b>OEVSyT</b>
                </summary>
                <?php 
    $files = array();
    ordenarCarpetasRecur4("./public/files/RecursosPedagogicos/OEVSyT/");
    function ordenarCarpetasRecur4($ruta)
    {
      unset($files);
      // Se comprueba que realmente sea la ruta de un directorio
      if(is_dir($ruta))
      {
        // Abre un gestor de directorios para la ruta indicada
        $gestor = opendir($ruta);
        while(($archivo = readdir($gestor)) !== false)
        {
          $files[] = $archivo;
        }
        //Ordena el arreglo $files
        natsort($files);
        obtener_estructura_directoriosRecur4($files,$ruta);
        //Cierra el gestor de archivos
        closedir($gestor);
        echo "</details>";
      }
      else
      {
        echo "No es una ruta de directorio valida<br/>";
      }
    }
                   function obtener_estructura_directoriosRecur4($archivos, $ruta){
                            echo "<details><summary><i class='fa fa-folder';></i></summary>";
                            // Recorre todos los elementos del directorio
                           foreach($archivos as $archivo){
                               $ruta_completa = $ruta . "/" . str_replace(" ", "%20",$archivo);          
                               // Se muestran todos los archivos y carpetas excepto "." y ".."
                               if ($archivo != "." && $archivo != "..") {
                                 // Si es un directorio se recorre recursivamente
                                 if (is_dir($ruta_completa)) {
                                     echo "<details><summary style='cursor:initial;'>
                                     <div class='selector'></div>"
                                    .str_replace("_", " ",$archivo)."</summary></details>";
                                     ordenarCarpetasRecur4($ruta_completa);
                                 } else {
                                     echo "<details><summary style='cursor:initial;'>
                                     <i class='fa fa-file-text';></i>
                                     <div class='selector'></div>
                                    <a target='_blank' href=".$ruta_completa.">".ucwords(strtolower(str_replace("_", " ",$archivo)))."</a>
                                     </summary></details>";                                    
                                 }                                   
                             } 
      }                               
                   }
                ?>
            </details>
            <!-------------------------------------------------------------------------------------OEVSyT Anexos-->
            <details>
                <summary>
                    <i class="fa fa-folder" style=""></i>
                    <div class="selector"></div><b>ANEXOS</b>
                </summary>
                <?php 
    $files = array();
    ordenarCarpetasRecur5("./public/files/RecursosPedagogicos/OEVSyT_Anexos/");
    function ordenarCarpetasRecur5($ruta)
    {
      unset($files);
      // Se comprueba que realmente sea la ruta de un directorio
      if(is_dir($ruta))
      {
        // Abre un gestor de directorios para la ruta indicada
        $gestor = opendir($ruta);
        while(($archivo = readdir($gestor)) !== false)
        {
          $files[] = $archivo;
        }
        //Ordena el arreglo $files
        natsort($files);
        obtener_estructura_directoriosRecur5($files,$ruta);
        //Cierra el gestor de archivos
        closedir($gestor);
        echo "</details>";
      }
      else
      {
        echo "No es una ruta de directorio valida<br/>";
      }
    }
                   function obtener_estructura_directoriosRecur5($archivos, $ruta){
                            echo "<details><summary><i class='fa fa-folder';></i></summary>";
                            // Recorre todos los elementos del directorio
                           foreach($archivos as $archivo){
                               $ruta_completa = $ruta . "/" . str_replace(" ", "%20",$archivo);          
                               // Se muestran todos los archivos y carpetas excepto "." y ".."
                               if ($archivo != "." && $archivo != "..") {
                                 // Si es un directorio se recorre recursivamente
                                 if (is_dir($ruta_completa)) {
                                     echo "<details><summary style='cursor:initial;'>
                                     <div class='selector'></div>"
                                    .str_replace("_", " ",$archivo)."</summary></details>";
                                     ordenarCarpetasRecur5($ruta_completa);
                                 } else {
                                     echo "<details><summary style='cursor:initial;'>
                                     <i class='fa fa-file-text';></i>
                                     <div class='selector'></div>
                                    <a target='_blank' href=".$ruta_completa.">".ucwords(strtolower(str_replace("_", " ",$archivo)))."</a>
                                     </summary></details>";                                    
                                 }                                   
                             } 
      }                               
                   }
                ?>
            </details>
            <!-------------------------------------------------------------------------------------EMPRENDEDORES-->
            <details>
                <summary>
                    <i class="fa fa-folder" style=""></i>
                    <div class="selector"></div><b>EMPRENDEDORES</b>
                </summary>
                <?php 
    $files = array();
    ordenarCarpetasRecur6("./public/files/RecursosPedagogicos/Emprendedores/");
    function ordenarCarpetasRecur6($ruta)
    {
      unset($files);
      // Se comprueba que realmente sea la ruta de un directorio
      if(is_dir($ruta))
      {
        // Abre un gestor de directorios para la ruta indicada
        $gestor = opendir($ruta);
        while(($archivo = readdir($gestor)) !== false)
        {
          $files[] = $archivo;
        }
        //Ordena el arreglo $files
        natsort($files);
        obtener_estructura_directoriosRecur6($files,$ruta);
        //Cierra el gestor de archivos
        closedir($gestor);
        echo "</details>";
      }
      else
      {
        echo "No es una ruta de directorio valida<br/>";
      }
    }
                   function obtener_estructura_directoriosRecur6($archivos, $ruta){
                            echo "<details><summary><i class='fa fa-folder';></i></summary>";
                            // Recorre todos los elementos del directorio
                           foreach($archivos as $archivo){
                               $ruta_completa = $ruta . "/" . str_replace(" ", "%20",$archivo);          
                               // Se muestran todos los archivos y carpetas excepto "." y ".."
                               if ($archivo != "." && $archivo != "..") {
                                 // Si es un directorio se recorre recursivamente
                                 if (is_dir($ruta_completa)) {
                                     echo "<details><summary style='cursor:initial;'>
                                     <div class='selector'></div>"
                                    .str_replace("_", " ",$archivo)."</summary></details>";
                                     ordenarCarpetasRecur6($ruta_completa);
                                 } else {
                                     echo "<details><summary style='cursor:initial;'>
                                     <i class='fa fa-file-text';></i>
                                     <div class='selector'></div>
                                    <a target='_blank' href=".$ruta_completa.">".ucwords(strtolower(str_replace("_", " ",$archivo)))."</a>
                                     </summary></details>";                                    
                                 }                                   
                             } 
      }                               
                   }
                ?>
            </details>
            <!-------------------------------------------------------------------------------------NORMAS-->
            <details>
                <summary>
                    <i class="fa fa-folder" style=""></i>
                    <div class="selector"></div><b>NORMAS</b>
                </summary>
                <?php 
    $files = array();
    ordenarCarpetasRecur7("./public/files/RecursosPedagogicos/Normas/");
    function ordenarCarpetasRecur7($ruta)
    {
      unset($files);
      // Se comprueba que realmente sea la ruta de un directorio
      if(is_dir($ruta))
      {
        // Abre un gestor de directorios para la ruta indicada
        $gestor = opendir($ruta);
        while(($archivo = readdir($gestor)) !== false)
        {
          $files[] = $archivo;
        }
        //Ordena el arreglo $files
        natsort($files);
        obtener_estructura_directoriosRecur7($files,$ruta);
        //Cierra el gestor de archivos
        closedir($gestor);
        echo "</details>";
      }
      else
      {
        echo "No es una ruta de directorio valida<br/>";
      }
    }
                   function obtener_estructura_directoriosRecur7($archivos, $ruta){
                            echo "<details><summary><i class='fa fa-folder';></i></summary>";
                            // Recorre todos los elementos del directorio
                           foreach($archivos as $archivo){
                               $ruta_completa = $ruta . "/" . str_replace(" ", "%20",$archivo);          
                               // Se muestran todos los archivos y carpetas excepto "." y ".."
                               if ($archivo != "." && $archivo != "..") {
                                 // Si es un directorio se recorre recursivamente
                                 if (is_dir($ruta_completa)) {
                                     echo "<details><summary style='cursor:initial;'>
                                     <div class='selector'></div>"
                                    .str_replace("_", " ",$archivo)."</summary></details>";
                                     ordenarCarpetasRecur7($ruta_completa);
                                 } else {
                                     echo "<details><summary style='cursor:initial;'>
                                     <i class='fa fa-file-text';></i>
                                     <div class='selector'></div>
                                    <a target='_blank' href=".$ruta_completa.">".ucwords(strtolower(str_replace("_", " ",$archivo)))."</a>
                                     </summary></details>";                                    
                                 }                                   
                             } 
      }                               
                   }
                ?>
            </details>
            <!-------------------------------------------------------------------------------------APPS MÓVILES-->
            <details>
                <summary>
                    <i class="fa fa-folder" style=""></i>
                    <div class="selector"></div><b>APPS MÓVILES</b>
                </summary>
                <?php 
    $files = array();
    ordenarCarpetasRecur8("./public/files/RecursosPedagogicos/Aplicaciones_Móviles/");
    function ordenarCarpetasRecur8($ruta)
    {
      unset($files);
      // Se comprueba que realmente sea la ruta de un directorio
      if(is_dir($ruta))
      {
        // Abre un gestor de directorios para la ruta indicada
        $gestor = opendir($ruta);
        while(($archivo = readdir($gestor)) !== false)
        {
          $files[] = $archivo;
        }
        //Ordena el arreglo $files
        natsort($files);
        obtener_estructura_directoriosRecur8($files,$ruta);
        //Cierra el gestor de archivos
        closedir($gestor);
        echo "</details>";
      }
      else
      {
        echo "No es una ruta de directorio valida<br/>";
      }
    }
                   function obtener_estructura_directoriosRecur8($archivos, $ruta){
                            echo "<details><summary><i class='fa fa-folder';></i></summary>";
                            // Recorre todos los elementos del directorio
                           foreach($archivos as $archivo){
                               $ruta_completa = $ruta . "/" . str_replace(" ", "%20",$archivo);          
                               // Se muestran todos los archivos y carpetas excepto "." y ".."
                               if ($archivo != "." && $archivo != "..") {
                                 // Si es un directorio se recorre recursivamente
                                 if (is_dir($ruta_completa)) {
                                     echo "<details><summary style='cursor:initial;'>
                                     <div class='selector'></div>"
                                    .str_replace("_", " ",$archivo)."</summary></details>";
                                     ordenarCarpetasRecur8($ruta_completa);
                                 } else {
                                     echo "<details><summary style='cursor:initial;'>
                                     <i class='fa fa-file-text';></i>
                                     <div class='selector'></div>
                                    <a target='_blank' href=".$ruta_completa.">".ucwords(strtolower(str_replace("_", " ",$archivo)))."</a>
                                     </summary></details>";                                    
                                 }                                   
                             } 
      }                               
                   }
                ?>
            </details>
        </div>
    </div>

    <div class="wrapper row4 bgded overlay">
        <div class="wrapper row4 bgded overlay">
            <div class="wrapper row5">
                <div id="copyright" class="hoc clear">
                    <p class="fl_left"> Todos Los Derechos Reservados - 2018 &copy;</p>
                    <p class="fl_right">Dirección General De Telebachillerato de Veracruz.</p>
                </div>
            </div>
        </div>
    </div>
    <a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>

    <script src="public/layout/scripts/listas.js"></script>
    <script src="public/layout/scripts/jquery.min.js"></script>
    <script src="public/layout/scripts/jquery.backtotop.js"></script>
</body>

</html>