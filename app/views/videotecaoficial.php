<!DOCTYPE html>
<html lang="es-mx">

<head>
    <title>Videoteca Oficial | Luminet</title>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="public/pictures/logoTeba.jpg">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link href="public/layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
    <link href="public/layout/styles/fonts/fontawesome-4.6.3.min.css" rel="stylesheet" type="text/css" media="all">
    <link href="public/layout/styles/style.scss" rel="stylesheet" type="text/css" media="all">
    <link href="public/layout/styles/modal-video.min.scss" rel="stylesheet" type="text/css" media="all">
</head>

<body id="top" style="backgroud:white;">
    <div class="bgded overlay" style="background-image:url('public/pictures/videoteca.png');">
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


    <div class="wrapper row3" style="padding-bottom:19.5em;">
        <br><br><br>
        <center>
            <h1 style="color:#C5A059" font-family="NeoSansPro"><b>Videoteca Oficial</b></h1>
        </center>

        <div class="container">

            <!-------------------------------------------------------------------------------------PRIMER SEMESTRE-->
            <details>
                <summary>
                    <i class="fa fa-folder" style=""></i>
                    <div class="selector"></div><b>PRIMER SEMESTRE</b>
                </summary>
                <?php 
		$files = array();
		ordenarCarpetasVideoOfi("./public/files/VideotecaOficial/1_Semestre/");
		function ordenarCarpetasVideoOfi($ruta)
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
				obtener_estructura_directoriosVideoOfi($files,$ruta);
				//Cierra el gestor de archivos
				closedir($gestor);
				echo "</details>";
			}
			else
			{
				echo "No es una ruta de directorio valida<br/>";
			}
		}
                   function obtener_estructura_directoriosVideoOfi($archivos, $ruta){
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
                                     ordenarCarpetasVideoOfi($ruta_completa);
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
		ordenarCarpetasVideoOfi2("./public/files/VideotecaOficial/2_Semestre/");
		function ordenarCarpetasVideoOfi2($ruta)
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
				obtener_estructura_directoriosVideoOfi2($files,$ruta);
				//Cierra el gestor de archivos
				closedir($gestor);
				echo "</details>";
			}
			else
			{
				echo "No es una ruta de directorio valida<br/>";
			}
		}
                   function obtener_estructura_directoriosVideoOfi2($archivos, $ruta){
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
                                     ordenarCarpetasVideoOfi2($ruta_completa);
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
		ordenarCarpetasVideoOfi3("./public/files/VideotecaOficial/3_Semestre/");
		function ordenarCarpetasVideoOfi3($ruta)
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
				obtener_estructura_directoriosVideoOfi3($files,$ruta);
				//Cierra el gestor de archivos
				closedir($gestor);
				echo "</details>";
			}
			else
			{
				echo "No es una ruta de directorio valida<br/>";
			}
		}
                   function obtener_estructura_directoriosVideoOfi3($archivos, $ruta){
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
                                     ordenarCarpetasVideoOfi3($ruta_completa);
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
		ordenarCarpetasVideoOfi4("./public/files/VideotecaOficial/4_Semestre/");
		function ordenarCarpetasVideoOfi4($ruta)
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
				obtener_estructura_directoriosVideoOfi4($files,$ruta);
				//Cierra el gestor de archivos
				closedir($gestor);
				echo "</details>";
			}
			else
			{
				echo "No es una ruta de directorio valida<br/>";
			}
		}
                   function obtener_estructura_directoriosVideoOfi4($archivos, $ruta){
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
                                     ordenarCarpetasVideoOfi4($ruta_completa);
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
		ordenarCarpetasVideoOfi5("./public/files/VideotecaOficial/5_Semestre/");
		function ordenarCarpetasVideoOfi5($ruta)
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
				obtener_estructura_directoriosVideoOfi5($files,$ruta);
				//Cierra el gestor de archivos
				closedir($gestor);
				echo "</details>";
			}
			else
			{
				echo "No es una ruta de directorio valida<br/>";
			}
		}
                   function obtener_estructura_directoriosVideoOfi5($archivos, $ruta){
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
                                     ordenarCarpetasVideoOfi5($ruta_completa);
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
		ordenarCarpetasVideoOfi6("./public/files/VideotecaOficial/6_Semestre/");
		function ordenarCarpetasVideoOfi6($ruta)
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
				obtener_estructura_directoriosVideoOfi6($files,$ruta);
				//Cierra el gestor de archivos
				closedir($gestor);
				echo "</details>";
			}
			else
			{
				echo "No es una ruta de directorio valida<br/>";
			}
		}
                   function obtener_estructura_directoriosVideoOfi6($archivos, $ruta){
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
                                     ordenarCarpetasVideoOfi6($ruta_completa);
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
            <!-------------------------------------------------------------------------------------FORMACIÓN PARA EL TRABAJO-->
            <details>
                <summary>
                    <i class="fa fa-folder" style=""></i>
                    <div class="selector"></div><b>FORMACIÓN PARA EL TRABAJO</b>
                </summary>
                <?php 
		$files = array();
		ordenarCarpetasVideoOfi7("./public/files/VideotecaOficial/Formación_Para_el_Trabajo/");
		function ordenarCarpetasVideoOfi7($ruta)
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
				obtener_estructura_directoriosVideoOfi7($files,$ruta);
				//Cierra el gestor de archivos
				closedir($gestor);
				echo "</details>";
			}
			else
			{
				echo "No es una ruta de directorio valida<br/>";
			}
		}
                   function obtener_estructura_directoriosVideoOfi7($archivos, $ruta){
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
                                     ordenarCarpetasVideoOfi7($ruta_completa);
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
            <!-------------------------------------------------------------------------------------ACTIVIDADES PARAESCOLARES-->
            <details>
                <summary>
                    <i class="fa fa-folder" style=""></i>
                    <div class="selector"></div><b>ACTIVIDADES PARAESCOLARES</b>
                </summary>
                <?php 
		$files = array();
		ordenarCarpetasVideoOfi8("./public/files/VideotecaOficial/Actividades_Paraescolares/");
		function ordenarCarpetasVideoOfi8($ruta)
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
				obtener_estructura_directoriosVideoOfi8($files,$ruta);
				//Cierra el gestor de archivos
				closedir($gestor);
				echo "</details>";
			}
			else
			{
				echo "No es una ruta de directorio valida<br/>";
			}
		}
                   function obtener_estructura_directoriosVideoOfi8($archivos, $ruta){
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
                                     ordenarCarpetasVideoOfi8($ruta_completa);
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
            <!-------------------------------------------------------------------------------------BARRA SABATINA-->
            <details>
                <summary>
                    <i class="fa fa-folder" style=""></i>
                    <div class="selector"></div><b>BARRA SABATINA</b>
                </summary>
                <?php 
		$files = array();
		ordenarCarpetasVideoOfi9("./public/files/VideotecaOficial/Barra_Sabatina/");
		function ordenarCarpetasVideoOfi9($ruta)
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
				obtener_estructura_directoriosVideoOfi9($files,$ruta);
				//Cierra el gestor de archivos
				closedir($gestor);
				echo "</details>";
			}
			else
			{
				echo "No es una ruta de directorio valida<br/>";
			}
		}
                   function obtener_estructura_directoriosVideoOfi9($archivos, $ruta){
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
                                     ordenarCarpetasVideoOfi9($ruta_completa);
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

    <script>
        $(document).ready(function() {
            $(".js-modal-btn").modalVideo({
                channel: 'vimeo'
            });
        });
    </script>
    <script src="public/layout/scripts/listas.js"></script>
    <script src="public/layout/scripts/jquery.min.js"></script>
    <script src="public/layout/scripts/jquery.backtotop.js"></script>
    <script src="public/layout/scripts/modal-video.js"></script>
</body>

</html>