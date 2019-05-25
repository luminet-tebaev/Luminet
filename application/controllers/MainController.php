<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class MainController extends CI_Controller{

    public function index()
    {
        $this->load->model("Model_Ingresar");
        $data['conProgramas']=$this->Model_Ingresar->conProgramas();
        $data['conSemestre']=$this->Model_Ingresar->conSemestre();
        $data['conMateria']=$this->Model_Ingresar->conMateria();
        $data['conBloque']=$this->Model_Ingresar->conBloque();
        $data['conContenido']=$this->Model_Ingresar->conContenido();
        $data['conTema']=$this->Model_Ingresar->conTema();
        $this->load->view("crud/index",$data);
    }
}
