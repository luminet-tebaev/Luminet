<?php
/**
 * Created by PhpStorm.
 * User: luminet
 * Date: 20/05/19
 * Time: 10:05 PM
 */
defined('BASEPATH') OR exit('No direct script access allowed');
//use App\models\Model_Ingresar;
class IngresarController extends CI_Controller{

   function __construct()
    {
        parent::__construct();
        $this->load->model('Model_Ingresar');
    }

    public function programa(){
        $datos=$this->input->post();
        $datos1=$datos['nombreprograma'];

        $this->Model_Ingresar->ingresarPrograma($datos1);
        redirect('index.php/mainController/index');

    }

    public function semestre(){
        $datos=$this->input->post();
        $programa=$datos['nombreprograma'];
        $semestre=$datos['semestre'];

        $this->Model_Ingresar->ingresarSemestre($programa,$semestre);
        redirect('index.php/mainController/index');

    }

    public function fillSemestre(){
        $idPrograma=$this->input->post('idPrograma');
       // echo $idPrograma;
        if($idPrograma){
            $this->load->model('Model_Ingresar');
            $semestre=$this->Model_Ingresar->conSemestre($idPrograma);
            echo '<option value="0"> </option>';
            foreach ($semestre as $sem){
                echo '<option value="'.$sem->idSemestre .'">'. $sem->semestre .'</option>';

            }
        }else{
            echo '<option value="0"> </option>';
        }
    }


    public function materia(){

        $datos=$this->input->post();
        $materia=$datos['materia'];
        $semestre=$datos['idSemestre'];

        $this->Model_Ingresar->ingresarMateria($materia,$semestre);
        redirect('index.php/mainController/index');
    }

    public function bloques(){

        $datos=$this->input->post();
        $bloque=$datos['bloque'];
        $materia=$datos['idMateria'];

        $this->Model_Ingresar->ingresarBloque($bloque,$materia);
        redirect('index.php/mainController/index');
    }

    public function contenido(){

        $datos=$this->input->post();
        $contenido=$datos['contenido'];
        $bloque=$datos['idBloque'];

        $this->Model_Ingresar->ingresarContenido($contenido,$bloque);
        redirect('index.php/mainController/index');
    }

    public function tema(){

        $datos=$this->input->post();
        $tema=$datos['tema'];
        $contenido=$datos['idContenido'];

        $this->Model_Ingresar->ingresarTema($tema,$contenido);
        redirect('index.php/mainController/index');
    }

    public function subtema(){

        $datos=$this->input->post();
        $tema=$datos['idTema'];
        $subtema=$datos['subtema'];

        $this->Model_Ingresar->ingresarSubtema($tema,$subtema);
        redirect('index.php/mainController/index');
    }

}
