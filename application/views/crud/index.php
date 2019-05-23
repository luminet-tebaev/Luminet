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

<form method="post" action="<?php echo base_url('index.php/ingresarController/semestre')?>">
    <h3>Ingresar semestre</h3>
    <div class="form-group">
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
    </div>
</form>


<body>
<form method="post" action="<?php echo base_url('index.php/ingresarController/programa')?>">
    <h3>Ingresar materia</h3>
    <label> Selecciona el programa: </label>
    <select id="idProgramas" name="idProgramas">
        <option value="0"> </option>
        <?php
            foreach($conProgramas as $programa){
                echo '<option value="'. $programa->idProgramas .'">'.$programa->nombre . '</option>';
            }
            ?>
    </select>
    <br>
    <label> Semestre: </label>
    <select id="idSemestre" name="idSemestre">
        <option value="0"> </option>
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
    </div>
</form>


<script type="text/javascript">
    $(document).ready(function () {
        $("#idProgramas").change(function () {
            $("#idProgramas option:selected").each(function () {
                idPrograma=$('#idProgramas').value();
                $.post("<?php echo base_url();?>index.php/ingresarController/fillSemestre",{
                    idProgramas : idProgramas
                }, function (data) {
                    $("#idSemestre").html(data);

                });

            });

        });

    });
</script>
</body>
</html>