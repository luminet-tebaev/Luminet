<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class MainController extends CI_Controller{

    public function index()
    {
        $this->load->model("Model_Ingresar");
        $data['conProgramas']=$this->Model_Ingresar->conProgramas();

        $this->load->view("crud/index",$data);
    }
}