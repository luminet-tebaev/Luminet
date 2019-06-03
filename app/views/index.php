<!DOCTYPE html>
<html lang="es-mx">

<head>
    <title>Luminet</title>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="public/pictures/logoTeba.jpg">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link href="public/layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>

<body id="top">
    <div class="bgded overlay" style="background-image:url('public/pictures/alumnosTeba06.JPG');">
        <div class="wrapper row1">
            <header id="header" class="hoc clear">
                <div id="logo" class="fl_right">
                    <a href="./"><img id="logo" src="public/pictures/logoTeba_claro.png"></a>
                </div>
            </header>

            <div id="pageintro" class="hoc clear">
                <ul>
                    <article>
                        <img id="luminet" src="public/pictures/Luminet_nombre.png">
                    </article>
                </ul>
            </div>
        </div>
    </div>
    <div class="wrapper row3">
        <main class="hoc containerFirst clear">
            <ul class="nospace group services">
                <li class="one_third first active">
                    <article class="bgded overlay" style="background-image:url('public/pictures/wikipedia.gif');">
                        <a style="font-family='NeoSansLight'" href="#popup" class="popup-link" onclick="jmgModal('miventana',{
				               title: '¡ADVERTENCIA!', width: 400, height: 20,
                               content: 'El contenido disponible a continuación tiene carácter meramente informativo, por lo cual te recomendamos no hacer uso de ello como referencia bibliográfica. '},
                               ['CONTINUAR',function(){                                 window.open('http://www.luminet.edu.mx:8000/wikipedia_es_all_novid_2018-04/');}]);">
                            <div class="txtwrap"><i class="block fa fa-4x fa-wikipedia-w"></i>
                                <h6 class="heading"><strong>Wikipedia</strong></h6>
                            </div>
                        </a>
                        <footer> <a href="#popup" class="popup-link" onclick="jmgModal('miventana',{
				               title: '¡ADVERTENCIA!', width: 400, height: 20,
                               content: 'El contenido disponible a continuación tiene carácter meramente informativo, por lo cual te recomendamos no hacer uso de ello como referencia bibliográfica.'},
                               ['CONTINUAR',function(){                                  window.open('http://www.luminet.edu.mx:8000/wikipedia_es_all_novid_2018-04/');}]);"> Ir&raquo;</a></footer>
                    </article>
                </li>
                <li class="one_third active">
                    <article class="bgded overlay" style="background-image:url('public/pictures/video_logo.jpg')">
                        <a href="./videotecaoficial" target="_blank">
                            <div class="txtwrap"><i class="block fa fa-4x  fa-video-camera"></i>
                                <h6 class="heading"><strong>Videoteca Oficial</strong></h6>
                            </div>
                        </a>
                        <footer><a href="./videotecaoficial" target="_blank">Ir &raquo;</a></footer>
                    </article>
                </li>
                <li class="one_third active">
                    <article class="bgded overlay" style="background-image:url('public/pictures/books.jpg');">
                        <a href="./biblioteca" target="_blank">
                            <div class="txtwrap"><i class="block fa fa-4x fa-book"></i>
                                <h6 class="heading"><strong>Biblioteca</strong></h6>
                            </div>
                        </a>
                        <footer><a href="./biblioteca" target="_blank">Ir &raquo;</a></footer>
                    </article>
                </li>
                <li class="one_third first active">
                    <article class="bgded overlay" style="background-image:url('public/pictures/recurpeda.jpeg');">
                        <a href="./recursos-pedagogicos" target="_blank">
                            <div class="txtwrap"><i class="block fa fa-4x fa-cubes"></i>
                                <h6 class="heading"><strong>Didácticos</strong></h6>
                            </div>
                        </a>
                        <footer><a href="./recursos-pedagogicos" target="_blank">Ir &raquo;</a></footer>
                    </article>
                </li>
                <li class="one_third active">
                    <article class="bgded overlay" style="background-image:url('public/pictures/khan_logo.png');">
                        <a href="http://www.luminet.edu.mx:8008/learn/khan/" target="_blank">
                            <div class="txtwrap"><i class="block fa fa-4x fa-university"></i>
                                <h6 class="heading"><strong>Khan Academy</strong></h6>
                            </div>
                        </a>
                        <footer><a href="http://www.luminet.edu.mx:8008/learn/khan/" target="_blank">Ir &raquo;</a></footer>
                    </article>
                </li>
                <li class="one_third active">
                    <article id="videoCom" class="bgded overlay" style="background-image:url('public/pictures/videoteca2.jpg');">
                        <a href="./videotecacomplementaria" target="_blank">
                            <div class="txtwrap"><i class="block fa fa-4x  fa-file-video-o"></i>
                                <h6 class="heading"><strong>Videoteca Complementaria</strong></h6>
                            </div>
                        </a>
                        <footer id="videoFoo"><a href="./videotecacomplementaria" target="_blank">Ir &raquo;</a></footer>
                    </article>
                </li>
            </ul>
            <div class="clear"></div>
        </main>
    </div>
    <div class="wrapper row4 bgded overlay">
        <div class="wrapper row5">
            <div id="copyright" class="hoc clear">
                <p class="fl_right"> Todos Los Derechos Reservados - 2018 &copy; &nbsp;&nbsp;&nbsp;&nbsp;</p>
                <p>Dirección General de Telebachillerato de Veracruz.&nbsp;&nbsp;&nbsp;&nbsp;
            </div>
        </div>
    </div>
    <a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
    <script src="public/layout/scripts/jquery.min.js"></script>
    <script src="public/layout/scripts/jquery.backtotop.js"></script>
    <script src="public/layout/scripts/modal.js"></script>
    <script>
        // función aparte para no complicar el código
        function metaventana() {
            jmgModal('ventana2', {
                title: 'Sub-ventana',
                width: 300,
                height: 20,
                content: 'Contenido de la sub-ventana'
            });
        }
    </script>
</body>

</html>
