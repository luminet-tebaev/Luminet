<!DOCTYPE html>
<html lang="es-mx">

<head>
    <title>Biblioteca | Luminet</title>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="public/pictures/logoTeba.jpg">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link href="public/layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
    <link href="public/layout/styles/fonts/fontawesome-4.6.3.min.css" rel="stylesheet" type="text/css" media="all">
    <link href="public/layout/styles/style.scss" rel="stylesheet" type="text/css" media="all">
</head>

<body id="top" style="backgroud:white;">
    <div class="bgded overlay" style="background-image:url('public/pictures/libros.jpg');">
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
            <h1 style="color:#C5A059" font-family="NeoSansPro"><b>Biblioteca</b></h1>
        </center>

        <div class="container">
            <!-------------------------------------------------------------------------------------LITERATURA GENERAL-->

            <details>
                <summary>
                    <i class="fa fa-folder" style=""></i>
                    <div class="selector"></div><b>LITERATURA GENERAL</b>
                </summary>
                <?php 
		$files = array();
		ordenarCarpetas1("./public/files/Biblioteca/Literatura_General/");
		function ordenarCarpetas1($ruta)
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
				obtener_estructura_directorios1($files,$ruta);
				//Cierra el gestor de archivos
				closedir($gestor);
				echo "</details>";
			}
			else
			{
				echo "No es una ruta de directorio valida<br/>";
			}
		}
                   function obtener_estructura_directorios1($archivos, $ruta){
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
                                     ordenarCarpetas1($ruta_completa);
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
            <!-------------------------------------------------------------------------------------PRIMER SEMESTRE-->
            <details>
                <summary>
                    <i class="fa fa-folder" style=""></i>
                    <div class="selector"></div><b>PRIMER SEMESTRE</b>
                </summary>
                <?php 
		$files = array();
		ordenarCarpetasBiblio("./public/files/Biblioteca/1_Semestre/");
		function ordenarCarpetasBiblio($ruta)
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
				obtener_estructura_directoriosBiblio($files,$ruta);
				//Cierra el gestor de archivos
				closedir($gestor);
				echo "</details>";
			}
			else
			{
				echo "No es una ruta de directorio valida<br/>";
			}
		}
                   function obtener_estructura_directoriosBiblio($archivos, $ruta){
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
                                     ordenarCarpetasBiblio($ruta_completa);
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
            <!-------------------------------------------------------------------------------------SEGUNDO SEMESTRE-->
            <details>
                <summary>
                    <i class="fa fa-folder" style=""></i>
                    <div class="selector"></div><b>SEGUNDO SEMESTRE</b>
                </summary>
                <?php 
		$files = array();
		ordenarCarpetasBiblio2("./public/files/Biblioteca/2_Semestre/");
		function ordenarCarpetasBiblio2($ruta)
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
				obtener_estructura_directoriosBiblio2($files,$ruta);
				//Cierra el gestor de archivos
				closedir($gestor);
				echo "</details>";
			}
			else
			{
				echo "No es una ruta de directorio valida<br/>";
			}
		}
                   function obtener_estructura_directoriosBiblio2($archivos, $ruta){
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
                                     ordenarCarpetasBiblio2($ruta_completa);
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
            <!-------------------------------------------------------------------------------------TERCER SEMESTRE-->
            <details>
                <summary>
                    <i class="fa fa-folder" style=""></i>
                    <div class="selector"></div><b>TERCER SEMESTRE</b>
                </summary>
                <?php 
		$files = array();
		ordenarCarpetasBiblio3("./public/files/Biblioteca/3_Semestre/");
		function ordenarCarpetasBiblio3($ruta)
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
				obtener_estructura_directoriosBiblio3($files,$ruta);
				//Cierra el gestor de archivos
				closedir($gestor);
				echo "</details>";
			}
			else
			{
				echo "No es una ruta de directorio valida<br/>";
			}
		}
                   function obtener_estructura_directoriosBiblio3($archivos, $ruta){
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
                                     ordenarCarpetasBiblio3($ruta_completa);
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

            <!-------------------------------------------------------------------------------------CUARTO SEMESTRE-->
            <details>
                <summary>
                    <i class="fa fa-folder" style=""></i>
                    <div class="selector"></div><b>CUARTO SEMESTRE</b>
                </summary>
                <?php 
		$files = array();
		ordenarCarpetasBiblio4("./public/files/Biblioteca/4_Semestre/");
		function ordenarCarpetasBiblio4($ruta)
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
				obtener_estructura_directoriosBiblio4($files,$ruta);
				//Cierra el gestor de archivos
				closedir($gestor);
				echo "</details>";
			}
			else
			{
				echo "No es una ruta de directorio valida<br/>";
			}
		}
                   function obtener_estructura_directoriosBiblio4($archivos, $ruta){
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
                                     ordenarCarpetasBiblio4($ruta_completa);
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
            <!-------------------------------------------------------------------------------------QUINTO SEMESTRE-->
            <details>
                <summary>
                    <i class="fa fa-folder" style=""></i>
                    <div class="selector"></div><b>QUINTO SEMESTRE</b>
                </summary>
                <?php 
		$files = array();
		ordenarCarpetasBiblio5("./public/files/Biblioteca/5_Semestre/");
		function ordenarCarpetasBiblio5($ruta)
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
				obtener_estructura_directoriosBiblio5($files,$ruta);
				//Cierra el gestor de archivos
				closedir($gestor);
				echo "</details>";
			}
			else
			{
				echo "No es una ruta de directorio valida<br/>";
			}
		}
                   function obtener_estructura_directoriosBiblio5($archivos, $ruta){
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
                                     ordenarCarpetasBiblio5($ruta_completa);
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
            <!-------------------------------------------------------------------------------------SEXTO SEMESTRE-->
            <details>
                <summary>
                    <i class="fa fa-folder" style=""></i>
                    <div class="selector"></div><b>SEXTO SEMESTRE</b>
                </summary>
                <?php 
		$files = array();
		ordenarCarpetasBiblio6("./public/files/Biblioteca/6_Semestre/");
		function ordenarCarpetasBiblio6($ruta)
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
				obtener_estructura_directoriosBiblio6($files,$ruta);
				//Cierra el gestor de archivos
				closedir($gestor);
				echo "</details>";
			}
			else
			{
				echo "No es una ruta de directorio valida<br/>";
			}
		}
                   function obtener_estructura_directoriosBiblio6($archivos, $ruta){
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
                                     ordenarCarpetasBiblio6($ruta_completa);
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
            <!-------------------------------------------------------------------------------------APE-->
            <details>
                <summary>
                    <i class="fa fa-folder" style=""></i>
                    <div class="selector"></div><b>APE</b>
                </summary>
                <?php 
		$files = array();
		ordenarCarpetasBiblio7("./public/files/Biblioteca/APE/");
		function ordenarCarpetasBiblio7($ruta)
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
				obtener_estructura_directoriosBiblio7($files,$ruta);
				//Cierra el gestor de archivos
				closedir($gestor);
				echo "</details>";
			}
			else
			{
				echo "No es una ruta de directorio valida<br/>";
			}
		}
                   function obtener_estructura_directoriosBiblio7($archivos, $ruta){
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
                                     ordenarCarpetasBiblio7($ruta_completa);
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

            <!-------------------------------------------------------------------------------------APE-->
            <details>
                <summary>
                    <i class="fa fa-folder" style=""></i>
                    <div class="selector"></div><b>AUDIOLIBROS INCLUSIÓN</b>
                </summary>
                <?php 
		$files = array();
		ordenarCarpetasBiblio8("./public/files/Biblioteca/Audiolibros_inclusion/");
		function ordenarCarpetasBiblio8($ruta)
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
				obtener_estructura_directoriosBiblio8($files,$ruta);
				//Cierra el gestor de archivos
				closedir($gestor);
				echo "</details>";
			}
			else
			{
				echo "No es una ruta de directorio valida<br/>";
			}
		}
                   function obtener_estructura_directoriosBiblio8($archivos, $ruta){
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
                                     ordenarCarpetasBiblio8($ruta_completa);
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