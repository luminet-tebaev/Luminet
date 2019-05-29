<!DOCTYPE html

        <html>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


<head>
    <title>CRUD PROGRAMA</title>


    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: #e3f2fd;">
        <a class="navbar-brand" href="#">Luminet</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo base_url('index.php/mainController/index')?>">Insertar <span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item active">
                    <a class="nav-link" href="#">Actualizar o Eliminar <span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </nav>
    <script languaje="Javascript">

        document.write('<style type="text/css">div.cp_oculta{display: none;}</style>');
        function MostrarOcultar(capa,enlace)
        {
            if (document.getElementById)
            {
                var aux = document.getElementById(capa).style;
                aux.display = aux.display? "":"block";
            }
        }
    </script>

</head>

<body>

<p>
    <?php foreach ($conSemestre as $sem): ?>
<li> <a value="<?php echo $sem->idSemestre?>" class="texto" href="javascript:MostrarOcultar('<?php echo $sem->idSemestre ?>');" >
        <?php echo $sem->semestre ?>
    </a></li>

<div class="cp_oculta nav" id="1">
    <p>
        <?php foreach ($conMateria as $materia): ?>
    <li nav-item> <a value="<?php echo $materia->idMaterias?>" class="texto" href="javascript:MostrarOcultar('7'); ">
            &emsp; <?php echo $materia->nombre ?>
        </a>
    </li>


    <div class="cp_oculta nav" id="7">
        <p>
            <?php foreach ($conBloque as $bloque): ?>
        <li class="nav-item"> <a value="<?php echo $bloque->idBloques?>" class="texto" href="javascript:MostrarOcultar('9'); ">
                &emsp;&emsp;<?php echo $bloque->numBloque ?>
            </a>
        </li>


        <div class="cp_oculta" id="9">
            <p>
                <?php foreach ($conContenido as $contenido): ?>
            <li> <a value="<?php echo $contenido->idContenidos?>" class="texto" href="javascript:MostrarOcultar('11'); ">
                    &emsp;&emsp;&emsp;<?php echo $contenido->nombre ?>
                </a>
            </li>

            <div class="cp_oculta" id="11">
                <p>
                    <?php foreach ($conTema as $tema): ?>
                <li> <a value="<?php echo $tema->idTemas?>" class="texto" href="javascript:MostrarOcultar('15'); ">
                        &emsp;&emsp;&emsp;&emsp;<?php echo $tema->nombre ?>
                    </a>
                </li>

                <div class="cp_oculta" id="15">
                    <p>
                        <?php foreach ($conSubtema as $subtema): ?>
                    <li value="<?php echo $subtema->idSubtemas?>">
                        &emsp;&emsp;&emsp;&emsp;&emsp;<?php echo $subtema->nombre ?>
                    </li>

                    <?php endforeach; ?>
                    </p>

                </div>

                <?php endforeach; ?>
                </p>

            </div>

            <?php endforeach; ?>
            </p>

        </div>

        <?php endforeach; ?>
        </p>

    </div>
    <?php endforeach; ?>
    </p>
</div>

<div class="cp_oculta nav" id="2">
    <p>
        <?php foreach ($conMateria as $materia): ?>
    <li nav-item> <a value="<?php echo $materia->idMaterias?>" class="texto" href="javascript:MostrarOcultar('7'); ">
            &emsp; <?php echo $materia->nombre ?>
        </a>
    </li>


    <div class="cp_oculta nav" id="7">
        <p>
            <?php foreach ($conBloque as $bloque): ?>
        <li class="nav-item"> <a value="<?php echo $bloque->idBloques?>" class="texto" href="javascript:MostrarOcultar('9'); ">
                &emsp;&emsp;<?php echo $bloque->numBloque ?>
            </a>
        </li>


        <div class="cp_oculta" id="9">
            <p>
                <?php foreach ($conContenido as $contenido): ?>
            <li> <a value="<?php echo $contenido->idContenidos?>" class="texto" href="javascript:MostrarOcultar('11'); ">
                    &emsp;&emsp;&emsp;<?php echo $contenido->nombre ?>
                </a>
            </li>

            <div class="cp_oculta" id="11">
                <p>
                    <?php foreach ($conTema as $tema): ?>
                <li> <a value="<?php echo $tema->idTemas?>" class="texto" href="javascript:MostrarOcultar('15'); ">
                        &emsp;&emsp;&emsp;&emsp;<?php echo $tema->nombre ?>
                    </a>
                </li>

                <div class="cp_oculta" id="15">
                    <p>
                        <?php foreach ($conSubtema as $subtema): ?>
                    <li value="<?php echo $subtema->idSubtemas?>">
                        &emsp;&emsp;&emsp;&emsp;&emsp;<?php echo $subtema->nombre ?>
                    </li>

                    <?php endforeach; ?>
                    </p>

                </div>

                <?php endforeach; ?>
                </p>

            </div>

            <?php endforeach; ?>
            </p>

        </div>

        <?php endforeach; ?>
        </p>

    </div>
    <?php endforeach; ?>
    </p>
</div>


<?php endforeach; ?>
</p>

<div class="cp_oculta nav" id="3">
    <p>
        <?php foreach ($conMateria as $materia): ?>
    <li nav-item> <a value="<?php echo $materia->idMaterias?>" class="texto" href="<?php echo $materia->idMaterias?> ">
            &emsp; <?php echo $materia->nombre ?>
        </a>
    </li>
    <?php endforeach; ?>
    </p>
</div>





</body>

</html>
