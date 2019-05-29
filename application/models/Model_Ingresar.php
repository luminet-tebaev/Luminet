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

        //if($query->num_rows() > 0){
            return $query->result();
        //}

    }

    public function conSemestre(){
        //$query=$this->db->query("select * from programas");
        $query=$this->db->get('semestres');

        //if($query->num_rows() > 0){
            return $query->result();
        //}

    }

    public function conMateria(){
        //$query=$this->db->query("select * from programas");
        $query=$this->db->get('materias');

        //if($query->num_rows() > 0){
            return $query->result();
        //}

    }


    public function conBloque(){
        //$query=$this->db->query("select * from programas");
        $query=$this->db->get('bloques');

       // if($query->num_rows() > 0){
            return $query->result();
        //}

    }

    public function conContenido(){
        $query=$this->db->get('contenidos');

        //if($query->num_rows() > 0){
            return $query->result();
       // }

    }

    public function conTema(){
        $query=$this->db->get('temas');

       // if($query->num_rows() > 0){
            return $query->result();
        //}

    }

    public function conSubtema(){
        $query=$this->db->get('subtemas');

        //if($query->num_rows() > 0){
            return $query->result();
       // }

    }
    /*
    public function conSemestre($idProgramas){
        $this->db->where('idProgramas',$idProgramas);
        $semestre=$this->db->get('semestres');

        if($semestre->num_rows() > 0){
            return $semestre->result();
        }

        //$query=$this->db->query("select * from semestres where idProgramas=",$idProgramas);
        //return $query->result();
    }*/

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

    public function ingresarMateria($materia,$semestre){
        $array=array(
            'nombre'=>$materia,
            'idSemestre'=>$semestre
        );

        $this->db->insert('materias',$array);
    }

    public function ingresarBloque($bloque,$materia){
        $array=array(
            'numBloque'=>$bloque,
            'idMaterias'=>$materia
        );

        $this->db->insert('bloques',$array);
    }

    public function ingresarContenido($contenido,$bloque){
        $array=array(
            'nombre'=>$contenido,
            'idBloques'=>$bloque
        );

        $this->db->insert('contenidos',$array);
    }

    public function ingresarTema($tema,$contenido){
        $array=array(
            'nombre'=>$tema,
            'idContenidos'=>$contenido
        );

        $this->db->insert('temas',$array);
    }

    public function ingresarSubtema($tema,$subtema){
        $array=array(
            'idTemas'=>$tema,
            'nombre'=>$subtema
        );

        $this->db->insert('subtemas',$array);
    }
}
