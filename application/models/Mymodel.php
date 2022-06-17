<?php

 class Mymodel extends CI_Model {


    public function getResults(){
        return $this->db->get('students');
    }
    public function giveResults($id){
        $query = $this->db->get_where('students', ['studentId'=> $id]);
        return $query->row();

    }
    public function updateResults($data, $id){
        $this->db->update('students', $data, ['studentId'=> $id]);
    }
    public function deleteResults($id){
        $this->db->delete("students", ["studentId"=>$id]);
    }
 }



?>