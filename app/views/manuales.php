<!DOCTYPE html>
<html lang="es-mx">

<head>
    <title>Manuales | Luminet</title>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="public/pictures/logoTeba.jpg">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link href="public/layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
    <link href="public/layout/styles/fonts/fontawesome-4.6.3.min.css" rel="stylesheet" type="text/css" media="all">
    <link href="public/layout/styles/style.scss" rel="stylesheet" type="text/css" media="all">
</head>

<body id="top" style="backgroud:white;">
    <div class="bgded overlay" style="background-image:url('public/pictures/manuales2.jpg');">
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


    <div class="wrapper row3" style="padding-bottom:32em;">
        <br><br><br>
        <center>
            <h1 style="color:#C5A059" font-family="NeoSansPro"><b>Manuales</b></h1>
        </center>

        <div class="container">

            <!-- MANUAL DE USUARIO -->
            <details>
                <summary>
                    <i class="fa fa-folder" style=""></i>
                    <div class="selector"></div><b>MANUALES DE USUARIO</b>
                </summary>
                <?php 
		$files = array();
		ordenarCarpetasManua("./public/files/Manuales/Manuales_de_usuario");
		function ordenarCarpetasManua($ruta)
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
				obtener_estructura_directoriosManua($files,$ruta);
				//Cierra el gestor de archivos
				closedir($gestor);
				echo "</details>";
			}
			else
			{
				echo "No es una ruta de directorio valida<br/>";
			}
		}
                   function obtener_estructura_directoriosManua($archivos, $ruta){
                            echo "<details><summary><i class='fa fa-folder';></i></summary>";
                            // Recorre todos los elementos del directorio
                           foreach($archivos as $archivo){
                               $ruta_completa = $ruta . "/" . str_replace(" ", "%20",$archivo);          
                               // Se muestran todos los archivos y carpetas excepto "." y ".."
                               if ($archivo != "." && $archivo != "..") {
                                 // Si es un directorio se recorre recursivamente
                                 if (is_dir($ruta_completa)) {
                                     echo "<details><summary>
                                     <div class='selector'></div>"
                                    .str_replace("_", " ",$archivo)."</summary></details>";
                                     ordenarCarpetasManua($ruta_completa);
                                 } else {
                                     echo "<details><summary>
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
            <!-------------------------------------------------------------------------------------VIDEOTUTORIALES-->
            <details>
                <summary>
                    <i class="fa fa-folder" style=""></i>
                    <div class="selector"></div><b>VIDEOTUTORIALES</b>
                </summary>
                <?php 
		$files = array();
		ordenarCarpetasManua2("./public/files/Manuales/Videotutoriales");
		function ordenarCarpetasManua2($ruta)
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
				obtener_estructura_directoriosManua2($files,$ruta);
				//Cierra el gestor de archivos
				closedir($gestor);
				echo "</details>";
			}
			else
			{
				echo "No es una ruta de directorio valida<br/>";
			}
		}
                   function obtener_estructura_directoriosManua2($archivos, $ruta){
                            echo "<details><summary><i class='fa fa-folder';></i></summary>";
                            // Recorre todos los elementos del directorio
                           foreach($archivos as $archivo){
                               $ruta_completa = $ruta . "/" . str_replace(" ", "%20",$archivo);          
                               // Se muestran todos los archivos y carpetas excepto "." y ".."
                               if ($archivo != "." && $archivo != "..") {
                                 // Si es un directorio se recorre recursivamente
                                 if (is_dir($ruta_completa)) {
                                     echo "<details><summary>
                                     <div class='selector'></div>"
                                    .str_replace("_", " ",$archivo)."</summary></details>";
                                     ordenarCarpetasManua2($ruta_completa);
                                 } else {
                                     echo "<details><summary>
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