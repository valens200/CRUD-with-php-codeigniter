<?php

   class EmployeeController extends CI_Controller{

    public function register(){
        $this->load->view('template/header');
        $this->load->view('Frontend/employee');
        $this->load->view('template/footer');
    }
    public function store(){
       $this->load->library('form_validation');
       $this->form_validation->set_rules('firstname','firstname', 'required');
       $this->form_validation->set_rules('lastname', 'lastname', 'required');

       if($this->form_validation->run()){
        $data = [
            "firstname" => $this->input->post('firstname'),
            "lastname"=> $this->input->post('lastname')
           ];     
       var_dump($data);
       $this->load->model('StudentModel', 'stu');
       $this->stu->insertStudent($data);
       redirect(base_url('index.php/Retrieve'));
      }else{
        $this->register();
      }

    }

    public function edit($id){
        $this->load->model('Mymodel', 'stu');
        $data['students'] = $this->stu->giveResults($id);
        $this->load->view('template/header');
        $this->load->view('frontend/updatePage', $data);
        $this->load->view('template/footer');
    }

    public function update($id){
       $this->load->library('form_validation');
       $this->form_validation->set_rules('firstname', 'firstname', 'required');
       $this->form_validation->set_rules('lastname', 'lastname','required');


       if($this->form_validation->run()){
         $data = [
            "firstname"=>$this->input->post('firstname'),
            "lastname"=>$this->input->post('lastname'),
         ];
         $this->load->model("Mymodel", "stu");
         $this->stu->updateResults($data, $id);
         redirect(base_url('index.php/Retrieve'));
       
       }else{
        $this->edit();
       }

    }

    public function delete($id){
           $this->load->model("Mymodel", "stu");
           $this->stu->deleteResults($id);
           redirect(base_url('index.php/Retrieve'));
       }
   }



  
?>
