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

 /*   function __construct()
    {
        parent::__construct();
        $this->load->model('Model_Ingresar');
    }
*/

    public function programa(){
        $datos=$this->input->post();
        $datos1=$datos['nombreprograma'];

        $this->Model_Ingresar->ingresarPrograma($datos1);
        redirect('/');

    }

    public function semestre(){
        $datos=$this->input->post();
        $programa=$datos['nombreprograma'];
        $semestre=$datos['semestre'];

        $this->Model_Ingresar->ingresarSemestre($programa,$semestre);
        redirect('/');

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
        //echo "Hola";
        $datos=$this->input->post();
        $programa=$datos['idPrograma'];

        echo $programa;
    }


}