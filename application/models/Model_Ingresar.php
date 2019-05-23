<?php
/**
 * Created by PhpStorm.
 * User: luminet
 * Date: 20/05/19
 * Time: 10:10 PM
 */
class Model_Ingresar extends CI_Model{
    /*function __construct()
    {
        parent::__construct();
        $this->load->database();
    }*/

    public function conProgramas(){
        //$query=$this->db->query("select * from programas");
        $query=$this->db->get('programas');

        if($query->num_rows() > 0){
            return $query->result();
        }

    }


    public function conSemestre($idProgramas){
        $this->db->where('idProgramas',$idProgramas);
        $semestre=$this->db->get('semestres');

        if($semestre->num_rows() > 0){
            return $semestre->result();
        }

        //$query=$this->db->query("select * from semestres where idProgramas=",$idProgramas);
        //return $query->result();
    }

    public function ingresarPrograma($datos1){
        $array=array(
            'nombre'=>$datos1
        );

        $this->db->insert('programas',$array);
    }

    public function ingresarSemestre($programa,$semestre){
        $array=array(
            'semestre'=>$semestre,
            'idProgramas'=>$programa
        );

        $this->db->insert('semestres',$array);
    }
}