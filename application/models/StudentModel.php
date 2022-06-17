<?php 
     
     class StudentModel extends CI_Model {

        public function insertStudent($data){
            $this->db->insert('students', $data);
        }

    
     }




?>