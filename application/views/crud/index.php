<!DOCTYPE html>
<html>

<h1>Insertar datos</h1>

<form method="post" action="<?php echo base_url('index.php/ingresarController/programa')?>">
    <div class="form-group">
        <label> Selecciona la tabla a la cual quieres agregar datos: </label>
        <select name="nombresTablas" required>
            <option value="1">Programas</option>
            <option value="2">Semestres</option>
            <option value="3">Materias</option>
            <option value="4">Bloques</option>
            <option value="5">Contenidos</option>
            <option value="6">Temas</option>
            <option value="7">Subtemas</option>
        </select>
        <br>
        <label> Nombre del Programa: </label>
        <input type="text" name="nombreprograma">
        <button type="submit" name="Guardar" value="Guardar">Guardar</button>
        <br>
        <br>

    </div>

</form>


    <div class="form-group">
        <form method="post" action="<?php echo base_url('index.php/ingresarController/semestre')?>">
            <h3>Ingresar semestre</h3>
        <label> Selecciona el programa: </label>
        <select name="nombreprograma" required>
            <?php foreach ($conProgramas as $programas){?>
                <option value="<?php echo $programas->idProgramas?>"><?php echo $programas->nombre; ?></option>
            <?php }?>
        </select>
        <br>
        <label> Semestre: </label>
        <input type="text" name="semestre">
        <button type="submit" name="Guardar" value="Guardar">Guardar</button>
        </form>
    </div>



<div class="form-group">
<form method="post" action="<?php echo base_url('index.php/ingresarController/materia')?>">
    <h3>Ingresar materia</h3>
    <label> Selecciona el programa: </label>
    <select id="idProgramas" name="idProgramas">

        <?php
            foreach($conProgramas as $programa){
                echo '<option value="'. $programa->idProgramas .'">'.$programa->nombre . '</option>';
            }
            ?>
    </select>
    <br>
    <label> Semestre: </label>
    <select id="idSemestre" name="idSemestre">

        <?php
        foreach($conSemestre as $sem){
            echo '<option value="'. $sem->idSemestre .'">'.$sem->semestre . '</option>';
        }
        ?>
    </select>
    <br>
    <label> Materia:</label>
    <input type="text" name="materia">
    <button type="submit" name="Guardar" value="Guardar">Guardar</button>

</form>
</div>


<script type="text/javascript">
    $(document).ready(function () {
        $("#idProgramas").change(function () {
            $("#idProgramas option:selected").each(function () {

                idProgramas=$('#idProgramas').value();
                $.post("<?php echo base_url();?>index.php/ingresarController/fillSemestre",{
                    idProgramas : idProgramas
                }, function (data) {
                    $("#idSemestre").html(data);

                });

            });

        });

    });
</script>

<div class="form-group">
<form method="post" action="<?php echo base_url('index.php/ingresarController/bloques')?>">
    <h3>Ingresar Bloque</h3>
    <label> Selecciona el programa: </label>
    <select id="idProgramas" name="idProgramas">

        <?php
        foreach($conProgramas as $programa){
            echo '<option value="'. $programa->idProgramas .'">'.$programa->nombre . '</option>';
        }
        ?>
    </select>
    <br>
    <label> Semestre: </label>
    <select id="idSemestre" name="idSemestre">

        <?php
        foreach($conSemestre as $sem){
            echo '<option value="'. $sem->idSemestre .'">'.$sem->semestre . '</option>';
        }
        ?>
    </select>
    <br>
    <label> Materia:</label>
    <select id="idMateria" name="idMateria">

        <?php
        foreach($conMateria as $materia){
            echo '<option value="'. $materia->idMaterias .'">'.$materia->nombre . '</option>';
        }
        ?>
    </select>
    <br>
    <label> Bloque:</label>
    <input type="text" name="bloque">
    <button type="submit" name="Guardar" value="Guardar">Guardar</button>

</form>
</div>

<div class="form-group">
    <form method="post" action="<?php echo base_url('index.php/ingresarController/contenido')?>">
        <h3>Ingresar Contenido</h3>
        <label> Selecciona el programa: </label>
        <select id="idProgramas" name="idProgramas">

            <?php
            foreach($conProgramas as $programa){
                echo '<option value="'. $programa->idProgramas .'">'.$programa->nombre . '</option>';
            }
            ?>
        </select>
        <br>
        <label> Semestre: </label>
        <select id="idSemestre" name="idSemestre">

            <?php
            foreach($conSemestre as $sem){
                echo '<option value="'. $sem->idSemestre .'">'.$sem->semestre . '</option>';
            }
            ?>
        </select>
        <br>
        <label> Materia:</label>
        <select id="idMateria" name="idMateria">

            <?php
            foreach($conMateria as $materia){
                echo '<option value="'. $materia->idMaterias .'">'.$materia->nombre . '</option>';
            }
            ?>
        </select>
        <br>
        <label> Bloque:</label>
        <select id="idBloque" name="idBloque">

            <?php
            foreach($conBloque as $bloque){
                echo '<option value="'. $bloque->idBloques .'">'.$bloque->numBloque . '</option>';
            }
            ?>
        </select>
        <br>
        <label> Contenido:</label>
        <input type="text" name="contenido">
        <button type="submit" name="Guardar" value="Guardar">Guardar</button>

    </form>
</div>

<div class="form-group">
    <form method="post" action="<?php echo base_url('index.php/ingresarController/tema')?>">
        <h3>Ingresar Temas</h3>
        <label> Selecciona el programa: </label>
        <select id="idProgramas" name="idProgramas">

            <?php
            foreach($conProgramas as $programa){
                echo '<option value="'. $programa->idProgramas .'">'.$programa->nombre . '</option>';
            }
            ?>
        </select>
        <br>
        <label> Semestre: </label>
        <select id="idSemestre" name="idSemestre">

            <?php
            foreach($conSemestre as $sem){
                echo '<option value="'. $sem->idSemestre .'">'.$sem->semestre . '</option>';
            }
            ?>
        </select>
        <br>
        <label> Materia:</label>
        <select id="idMateria" name="idMateria">

            <?php
            foreach($conMateria as $materia){
                echo '<option value="'. $materia->idMaterias .'">'.$materia->nombre . '</option>';
            }
            ?>
        </select>
        <br>
        <label> Bloque:</label>
        <select id="idBloque" name="idBloque">

            <?php
            foreach($conBloque as $bloque){
                echo '<option value="'. $bloque->idBloques .'">'.$bloque->numBloque . '</option>';
            }
            ?>
        </select>
        <br>
        <label> Contenido:</label>
        <select id="idContenido" name="idContenido">

            <?php
            foreach($conContenido as $contenido){
                echo '<option value="'. $contenido->idContenidos .'">'.$contenido->nombre . '</option>';
            }
            ?>
        </select>
        <br>
        <label> Tema:</label>
        <input type="text" name="tema">
        <button type="submit" name="Guardar" value="Guardar">Guardar</button>

    </form>
</div>

<div class="form-group">
    <form method="post" action="<?php echo base_url('index.php/ingresarController/subtema')?>">
        <h3>Ingresar Subtemas</h3>
        <label> Selecciona el programa: </label>
        <select id="idProgramas" name="idProgramas">

            <?php
            foreach($conProgramas as $programa){
                echo '<option value="'. $programa->idProgramas .'">'.$programa->nombre . '</option>';
            }
            ?>
        </select>
        <br>
        <label> Semestre: </label>
        <select id="idSemestre" name="idSemestre">

            <?php
            foreach($conSemestre as $sem){
                echo '<option value="'. $sem->idSemestre .'">'.$sem->semestre . '</option>';
            }
            ?>
        </select>
        <br>
        <label> Materia:</label>
        <select id="idMateria" name="idMateria">

            <?php
            foreach($conMateria as $materia){
                echo '<option value="'. $materia->idMaterias .'">'.$materia->nombre . '</option>';
            }
            ?>
        </select>
        <br>
        <label> Bloque:</label>
        <select id="idBloque" name="idBloque">

            <?php
            foreach($conBloque as $bloque){
                echo '<option value="'. $bloque->idBloques .'">'.$bloque->numBloque . '</option>';
            }
            ?>
        </select>
        <br>
        <label> Contenido:</label>
        <select id="idContenido" name="idContenido">

            <?php
            foreach($conContenido as $contenido){
                echo '<option value="'. $contenido->idContenidos .'">'.$contenido->nombre . '</option>';
            }
            ?>
        </select>
        <br>
        <label> Tema:</label>
        <select id="idTema" name="idTema">

            <?php
            foreach($conTema as $tema){
                echo '<option value="'. $tema->idTemas .'">'.$tema->nombre . '</option>';
            }
            ?>
        </select>
        <br>
        <label> Subtema:</label>
        <input type="text" name="subtema">
        <button type="submit" name="Guardar" value="Guardar">Guardar</button>

    </form>
</div>

</html>
